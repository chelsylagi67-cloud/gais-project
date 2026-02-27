<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\VendorTransaction;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index()
{
    $vendors = Vendor::latest()->paginate(10); // bisa ubah 10 sesuai kebutuhan
    return view('vendors', compact('vendors'));
}
    /**
     * Show the form for creating a new resource.
     */
   public function create()
{
    return view('AddNewVendor');
}

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
$validated = $request->validate([
    'name' => ['required','string','max:255'],
    'vendor_type' => ['nullable','string','max:100'],
    'contact_person' => ['nullable','string','max:255'],
    'phone' => ['nullable','string','max:50'],
    'email' => ['nullable','email','max:255'],
    'notes' => ['nullable','string'],
]);
    Vendor::create($validated);

    return redirect()->route('vendors.index')
        ->with('success', 'Vendor berhasil ditambahkan!');
}
    /**
     * Display the specified resource.
     */
public function show(Vendor $vendor)
{
    $transactions = $vendor->transactions()
        ->orderBy('transaction_date', 'desc')
        ->get();

    return view('VendorDetailsTransaction', compact('vendor', 'transactions'));
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
public function destroy(Vendor $vendor)
{
    $vendor->delete();

    return redirect()->route('vendors.index')
        ->with('success', 'Vendor berhasil dihapus!');
}
public function addTransaction(Vendor $vendor)
{
    return view('VendorAddTransaction', compact('vendor'));
}

public function storeTransaction(Request $request, Vendor $vendor)
{
    $data = $request->validate([
        'transaction_date' => 'required|date',
        'status'           => 'required|string|max:50',
        'description'      => 'required|string|max:255',
        'amount'           => 'required|numeric|min:0',
        'notes'            => 'nullable|string',
    ]);

    $data['vendor_id'] = $vendor->id;

    VendorTransaction::create($data);

    return redirect()
        ->route('vendors.show', $vendor->id)
        ->with('success', 'Transaction berhasil disimpan!');
}


}
