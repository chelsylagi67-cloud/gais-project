<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checklist;
use Illuminate\Support\Facades\Auth;

class ChecklistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index(Request $request)
{
    $type = $request->get('type', 'Daily');

    $checklists = Checklist::when($type, function ($q) use ($type) {
            return $q->where('type', $type);
        })
        ->orderBy('created_at', 'desc')
        ->get();

    // 🔥 Hitung jumlah DONE per kategori
    $dailyDone = Checklist::where('type', 'Daily')
                    ->where('status', 'Done')
                    ->count();

    $weeklyDone = Checklist::where('type', 'Weekly')
                    ->where('status', 'Done')
                    ->count();

    $monthlyDone = Checklist::where('type', 'Monthly')
                    ->where('status', 'Done')
                    ->count();

    return view('checklist.checklist', compact(
        'checklists',
        'type',
        'dailyDone',
        'weeklyDone',
        'monthlyDone'
    ));
}

    /**
     * Show the form for creating a new resource.
     */
public function create()
{
    return view('checklist.create');
}

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)

{
    $data = $request->validate([
        'activity_name' => 'required|string|max:255',
        'type'          => 'required|string|max:50',   // Daily/Weekly/Monthly
        'category'      => 'nullable|string|max:255',
        'location'      => 'nullable|string|max:255',
        'description'   => 'nullable|string',
    ]);

Checklist::create([
    'created_by'    => Auth::id(),
    'activity_time' => now()->format('H:i:s'),
    'type'          => $data['type'],
    'status'        => 'Pending',
    'date'          => now()->toDateString(),
    'notes'         => "Activity: {$data['activity_name']}\n"
                    . "Category: " . ($data['category'] ?? '-') . "\n"
                    . "Location: " . ($data['location'] ?? '-') . "\n"
                    . "SOP: " . ($data['description'] ?? '-'),
]);

    return redirect()->route('checklist.index')->with('success', 'Activity berhasil disimpan!');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


public function bulkUpdate(Request $request)
{
    $checkedIds = $request->input('checked', []);
    $type = $request->input('type', 'Daily');

    Checklist::where('type', $type)->update(['status' => 'Pending']);

    if (!empty($checkedIds)) {
        Checklist::where('type', $type)
            ->whereIn('id', $checkedIds)
            ->update(['status' => 'Done']);
    }

    return redirect()->route('checklist.index', ['type' => $type])
        ->with('success', 'Status berhasil di-commit!');
}
public function userChecklist(Request $request)
{
    $type = $request->get('type', 'Daily'); // default Daily

    $checklists = Checklist::where('type', $type)
        ->orderBy('created_at', 'desc')
        ->get();

    return view('checklist.UserChecklist', compact('checklists', 'type'));
}
}
