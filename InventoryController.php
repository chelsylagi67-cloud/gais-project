<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class InventoryController extends Controller
{
public function index(Request $request)
{
    $query = Inventory::query();

    // SEARCH
    if ($request->filled('search')) {
        $query->where(function ($q) use ($request) {
            $q->where('item_name', 'like', '%' . $request->search . '%')
              ->orWhere('category', 'like', '%' . $request->search . '%')
              ->orWhere('location', 'like', '%' . $request->search . '%');
        });
    }

    // CATEGORY FILTER
    if ($request->filled('category')) {
        $query->where('category', $request->category);
    }

    // LOCATION FILTER
    if ($request->filled('location')) {
        $query->where('location', $request->location);
    }

    $inventories = $query->paginate(10)->withQueryString();

    // ===============================
    // 🔥 DASHBOARD CALCULATION
    // ===============================

    $totalItems = Inventory::count();

    $lowStock = Inventory::whereColumn('stock', '<=', 'minimum_stock')->count();

    $damagedAssets = Inventory::where('condition', 'damaged')->count();

    $totalValue = Inventory::selectRaw('COALESCE(SUM(stock * price),0) as total')
                ->value('total');

    return view('InventoryManagement', compact(
        'inventories',
        'totalItems',
        'lowStock',
        'damagedAssets',
        'totalValue'
    ));
}


    // ==============================
    // SCAN BARCODE
    // ==============================

    public function scanForm()
    {
        return view('inventory-scan');
    }

    public function scanStore(Request $request)
    {
        $request->validate([
            'barcode' => 'required'
        ]);

        // Cek apakah barcode sudah ada
        $existing = Inventory::where('barcode', $request->barcode)->first();

        if ($existing) {
            // Kalau sudah ada → tambah stock
            $existing->increment('stock');
            return redirect()->back()->with('success', 'Stock berhasil ditambahkan!');
        }

        // Kalau belum ada → buat item baru
Inventory::create([
    'barcode' => $request->barcode,
    'item_name' => 'New Item',
    'category' => 'Uncategorized',
    'stock' => 1,
    'minimum_stock' => 1,
    'unit' => 'pcs',
    'location' => 'Storage',
    'price' => 0, // default harga
    'condition' => 'Good'
]);



        return redirect()->back()->with('success', 'Item baru berhasil ditambahkan!');
    }

    // ==============================
    // CRUD
    // ==============================

    public function create()
    {
        return view('adminnewitem');
    }

    public function store(Request $request)
    {
  $request->validate([
    'barcode' => 'nullable|unique:inventories,barcode',
    'item_name' => 'required',
    'category' => 'required',
    'stock' => 'required|integer',
    'minimum_stock' => 'required|integer',
    'price' => 'required|numeric|min:0', // tambahkan ini
    'unit' => 'required',
    'location' => 'required',
    'condition' => 'required'
]);

        Inventory::create($request->all());

        return redirect()->route('inventory.index')
            ->with('success', 'Item berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $item = Inventory::findOrFail($id);
        return view('editinventory', compact('item'));
    }

public function update(Request $request, $id)
{
    $item = Inventory::findOrFail($id);

    $request->validate([
        'item_name' => 'required',
        'category' => 'required',
        'stock' => 'required|integer',
        'minimum_stock' => 'required|integer',
        'unit' => 'required',
        'location' => 'required',
        'price' => 'required|numeric|min:0',
        'condition' => 'required'
    ]);

    $item->item_name = $request->item_name;
    $item->category = $request->category;
    $item->location = $request->location;
    $item->stock = $request->stock;
    $item->minimum_stock = $request->minimum_stock;
    $item->price = $request->price;
    $item->unit = $request->unit;
    $item->condition = $request->condition;
    $item->description = $request->description;

    $item->save();

    return redirect()->route('inventory.index')
        ->with('success', 'Item berhasil diupdate!');
}


    public function destroy($id)
    {
        $item = Inventory::findOrFail($id);
        $item->delete();

        return redirect()->route('inventory.index')
            ->with('success', 'Item berhasil dihapus!');
    }
   public function export(Request $request)
{
    $filename = 'inventory_' . date('Y-m-d_H-i-s') . '.csv';

    $headers = [
        "Content-type" => "text/csv",
        "Content-Disposition" => "attachment; filename=$filename",
        "Pragma" => "no-cache",
        "Cache-Control" => "must-revalidate",
        "Expires" => "0"
    ];

    $query = Inventory::query();

    if ($request->filled('search')) {
        $query->where('item_name', 'like', '%'.$request->search.'%');
    }

    if ($request->filled('category')) {
        $query->where('category', $request->category);
    }

    if ($request->filled('location')) {
        $query->where('location', $request->location);
    }

    $inventories = $query->get();

    $callback = function() use ($inventories) {
        $file = fopen('php://output', 'w');

        fputcsv($file, [
            'Item Name',
            'Category',
            'Location',
            'Stock',
            'Minimum Stock',
            'Price',
            'Unit',
            'Condition',
            'Total Value'
        ]);

        foreach ($inventories as $item) {
            fputcsv($file, [
                $item->item_name,
                $item->category,
                $item->location,
                $item->stock,
                $item->minimum_stock,
                $item->price,
                $item->unit,
                $item->condition,
                $item->stock * $item->price
            ]);
        }

        fclose($file);
    };

    return response()->stream($callback, 200, $headers);
}

}
