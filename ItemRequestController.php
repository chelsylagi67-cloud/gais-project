<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;
use App\Models\ItemRequest;
use Barryvdh\DomPDF\Facade\Pdf;

class ItemRequestController extends Controller
{
    public function store(Request $req, Inventory $inventory)
{
    $req->validate([
        'quantity' => 'required|integer|min:1',
        'reason' => 'nullable|string'
    ]);

    ItemRequest::create([
        'user_id' => auth()->id(),
        'inventories_id' => $inventory->id,
        'quantity' => $req->quantity,
        'reason' => $req->reason,
        'status' => 'pending',
        'request_datetime' => now()
    ]);

return redirect()->route('my.request')
    ->with('success', 'Request berhasil dibuat');
}
// Halaman My Requests (User)

    public function myRequests(Request $req)
{
    $requests = ItemRequest::with('inventory')
        ->where('user_id', auth()->id())
        ->latest()
        ->paginate(10);

    $selected = null;

    if ($req->timeline) {
        $selected = ItemRequest::with(['inventory','user'])
            ->where('user_id', auth()->id())
            ->find($req->timeline);
    }

return view('MyRequest', compact('requests','selected'));

}

public function downloadPdf($id)
{
    $request = ItemRequest::with(['inventory','user'])
        ->where('user_id', auth()->id())
        ->findOrFail($id);

    $pdf = Pdf::loadView('pdf.request', compact('request'));

    return $pdf->download('Request-'.$request->id.'.pdf');
}
public function adminIndex()
{
    $requests = ItemRequest::with(['inventory','user'])
        ->latest()
        ->paginate(10);

    return view('admin.requests', compact('requests'));
}

}
