<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\ItemRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;


class AdminRequestsController extends Controller
{
    public function index(Request $req)
    {
        $q = ItemRequest::with(['inventory','user'])
            ->where('status', 'pending')
            ->latest();

        // Optional: search
        if ($req->search) {
            $search = $req->search;
            $q->whereHas('user', fn($u) => $u->where('name', 'like', "%$search%"))
              ->orWhereHas('inventory', fn($i) => $i->where('item_name', 'like', "%$search%"));
        }

        $requests = $q->paginate(10);

        // TOTAL PENDING
        $totalPending = ItemRequest::where('status', 'pending')->count();

        // HIGH URGENCY
       $highUrgency = 0;
if (\Schema::hasColumn('item_requests', 'urgency')) {
    $highUrgency = ItemRequest::where('urgency', 'Urgent')
        ->where('status', 'pending')
        ->count();
}



        // REQUESTS TODAY
        $requestsToday = ItemRequest::whereDate('created_at', Carbon::today())->count();

        // AVG RESPONSE TIME (jam)
        $avgResponse = ItemRequest::whereNotNull('approved_at')
            ->selectRaw('AVG(TIMESTAMPDIFF(HOUR, request_datetime, approved_at)) as avg_hours')
            ->value('avg_hours');

        return view('adminrequests', compact(
            'requests',
            'totalPending',
            'highUrgency',
            'requestsToday',
            'avgResponse'
        ));
        // atau jika file kamu ada di folder admin:
        // return view('admin.adminrequests', compact('requests','totalPending','highUrgency','requestsToday','avgResponse'));
    }

    public function approve(ItemRequest $itemRequest)
    {
        // pastikan hanya pending yang bisa diproses
        if ($itemRequest->status !== 'pending') {
            return back()->with('error', 'Request sudah diproses.');
        }

        DB::transaction(function () use ($itemRequest) {
            // OPTIONAL: kurangi stok saat approve
            $inv = $itemRequest->inventory;
            if ($inv && $inv->stock < $itemRequest->quantity) {
                abort(400, 'Stok tidak cukup.');
            }

            if ($inv) {
                $inv->decrement('stock', $itemRequest->quantity);
            }

            $itemRequest->update([
                'status' => 'approved',
                'approved_by' => auth()->id(),
                'approved_at' => now(),
            ]);
        });

        return back()->with('success', 'Request approved.');
    }

    public function reject(ItemRequest $itemRequest)
    {
        if ($itemRequest->status !== 'pending') {
            return back()->with('error', 'Request sudah diproses.');
        }

        $itemRequest->update([
            'status' => 'rejected',
            'approved_by' => auth()->id(),
            'approved_at' => now(),
        ]);

        return back()->with('success', 'Request rejected.');
    }
    public function exportCsv(Request $req)
{
    $q = ItemRequest::with(['inventory','user'])->latest();

    if ($req->search) {
        $search = $req->search;
        $q->where(function ($qq) use ($search) {
            $qq->whereHas('user', function ($u) use ($search) {
                $u->where('name', 'like', "%{$search}%");
            })->orWhereHas('inventory', function ($i) use ($search) {
                $i->where('item_name', 'like', "%{$search}%");
            });
        });
    }

    $rows = $q->get();

    $filename = 'item-requests-' . now()->format('Y-m-d_His') . '.csv';

    return response()->streamDownload(function () use ($rows) {

        $out = fopen('php://output', 'w');

        // BOM supaya Excel support UTF-8
        fprintf($out, chr(0xEF).chr(0xBB).chr(0xBF));

        fputcsv($out, [
            'Request ID',
            'Tanggal',
            'Requester',
            'Unit',
            'Item',
            'Qty',
            'Satuan',
            'Status',
            'Urgency',
            'Reason',
        ]);

        foreach ($rows as $r) {
            fputcsv($out, [
                $r->id,
                optional($r->created_at)->format('Y-m-d H:i:s'),
                $r->user->name ?? '-',
                $r->user->department ?? '-',
                $r->inventory->item_name ?? '-',
                $r->quantity ?? 0,
                $r->inventory->unit ?? '',
                $r->status ?? '',
                $r->urgency ?? 'Normal',
                $r->reason ?? '',
            ]);
        }

        fclose($out);

    }, $filename);
}


}
