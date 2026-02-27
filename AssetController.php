<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AssetController extends Controller
{
    public function index()
    {
        $assets = Asset::orderByDesc('created_at')->paginate(10);
        return view('AssetsManagement', compact('assets'));
    }

    public function create()
    {
        return view('assets.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'              => 'required|string|max:255',
            'serial_number'     => 'nullable|string|max:255',
            'warranty_expiry'   => 'nullable|date',
            'photo'             => 'nullable|image|max:2048',
            'condition'         => 'required|in:good,fair,broken',
        ]);

        // Generate asset tag
        $assetTag = 'IT-' . date('Y') . '-' . strtoupper(Str::random(5));

        // Upload photo
        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('assets/photos', 'public');
        }

        // Generate UUID untuk QR
        $qrUuid = (string) Str::uuid();

        // Isi QR berupa link scan
        $qrData = url('/assets/scan/' . $qrUuid);

        // Simpan QR sebagai SVG (INI KUNCI AGAR TIDAK BUTUH IMAGICK)
        $qrPath = 'assets/qrcodes/' . $qrUuid . '.svg';

        Storage::disk('public')->put(
            $qrPath,
            QrCode::format('svg')
                ->size(300)
                ->generate($qrData)
        );

        Asset::create([
            'asset_name'       => $request->name,
            'asset_tag_prefix' => 'BSW-',
            'asset_tag'        => $assetTag,
            'serial_number'    => $request->serial_number,
            'condition_status' => $request->condition,
            'lifecycle_status' => 'available',
            'photo_path'       => $photoPath,

            'qr_code_uuid'     => $qrUuid,
            'qr_path'          => $qrPath,
            'qr_generated_at'  => now(),
        ]);

        return redirect()->route('assets.index')
            ->with('success', 'Asset berhasil disimpan!');
    }

    public function scan($uuid)
    {
        $asset = Asset::where('qr_code_uuid', $uuid)->firstOrFail();
        return view('AssetsManagementDetail', compact('asset'));
    }
}