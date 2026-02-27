<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Inventory;
use App\Models\ItemRequest;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
public function storeFromUser(Request $request)
{
    $request->validate([
        'item_id' => 'required|exists:inventories,id',
        'quantity' => 'required|integer|min:1',
        'reason' => 'required|string',
    ]);

    DB::transaction(function () use ($request) {

        $item = Inventory::lockForUpdate()->findOrFail($request->item_id);

        if ($item->stock < $request->quantity) {
            abort(400, 'Stock not enough');
        }

        // Simpan request dulu
        ItemRequest::create([
            'user_id' => Auth::id(),
            'item_id' => $item->id,
            'quantity' => $request->quantity,
            'reason' => $request->reason,
            'status' => 'pending',          // ✅ sesuai enum DB
            'request_datetime' => now(),    // ✅ sesuai tabel
        ]);

        // Kurangi stock
        $item->decrement('stock', $request->quantity);
    });

   
    return back()->with('success', 'Request submitted successfully!');
}

}
