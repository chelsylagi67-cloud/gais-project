<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\ItemRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserInventoryController extends Controller
{
    public function index()
    {
        $items = Inventory::all();
        return view('UserInventory', compact('items'));
    }

    public function storeRequest(Request $request)
    {
        $request->validate([
            'inventory_id' => 'required|exists:inventory,id',
            'quantity' => 'required|integer|min:1'
        ]);

        $item = Inventory::findOrFail($request->inventory_id);

        if ($item->stock < $request->quantity) {
            return back()->with('error', 'Stock tidak cukup!');
        }

        // Kurangi stock
        $item->stock -= $request->quantity;
        $item->save();

        // Simpan ke tabel request
        ItemRequest::create([
            'inventory_id' => $item->id,
            'user_id' => Auth::id(),
            'quantity' => $request->quantity,
            'urgency' => $request->urgency,
            'date_needed' => $request->date_needed,
            'reason' => $request->reason,
            'status' => 'Pending'
        ]);

        return back()->with('success', 'Request berhasil dikirim!');
    }
}
