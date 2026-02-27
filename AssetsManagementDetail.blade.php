<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Asset Detail &amp; Lifecycle Tracker | Bosowa GAIS</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                colors: {
                    "primary": "#137fec",
                    "background-light": "#f6f7f8",
                    "background-dark": "#101922",
                },
                fontFamily: {
                    "display": ["Inter"]
                },
                borderRadius: {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
                },
            },
        },
    }
</script>
<style>
    body { font-family: 'Inter', sans-serif; }
</style>
</head>

<body class="bg-background-light dark:bg-background-dark text-slate-800 dark:text-slate-200 min-h-screen font-display">
@php
    // helper aman buat asset tag
    $assetTagFull = trim(($asset->asset_tag_prefix ?? '') . ($asset->asset_tag ?? ''));
    $assetTagFull = $assetTagFull !== '' ? $assetTagFull : ('ASSET-' . ($asset->id ?? '-'));

    // photo url
    $photoUrl = $asset->photo_path ? asset('storage/' . $asset->photo_path) : null;

    // qr url
    $qrUrl = $asset->qr_path ? asset('storage/' . $asset->qr_path) : null;

    // status badge
    $status = strtolower($asset->lifecycle_status ?? 'available');
    $statusLabel = $asset->lifecycle_status ?? 'available';

    // warranty text
    $wExpiry = $asset->warranty_expiry ? \Carbon\Carbon::parse($asset->warranty_expiry) : null;
@endphp

<div class="flex">
<!-- Sidebar -->
<aside class="w-64 h-screen sticky top-0 bg-white dark:bg-slate-900 border-r border-primary/10 flex flex-col">
    <div class="p-6">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center text-white">
                <span class="material-icons">business</span>
            </div>
            <span class="font-bold text-xl tracking-tight text-primary">BOSOWA</span>
        </div>
        <p class="text-[10px] uppercase tracking-widest text-slate-400 mt-1 ml-1">GA Information System</p>
    </div>

    <nav class="flex-1 px-4 py-4 space-y-1">
        <a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:bg-primary/5 rounded-lg transition-colors"
           href="{{ route('assets.index') }}">
            <span class="material-icons text-[20px]">inventory_2</span>
            <span class="font-medium">Asset Management</span>
        </a>
    </nav>

    <div class="p-4 border-t border-primary/10">
        <div class="flex items-center gap-3 p-2 rounded-lg bg-primary/5">
            <div class="w-8 h-8 rounded-full bg-primary/20 flex items-center justify-center text-primary">
                <span class="material-icons text-sm">person</span>
            </div>
            <div class="flex-1 min-w-0">
                <p class="text-sm font-semibold truncate">{{ auth()->user()->name ?? 'Admin User' }}</p>
                <p class="text-[10px] text-slate-400 truncate">GA Department</p>
            </div>
        </div>
    </div>
</aside>

<!-- Main Content -->
<main class="flex-1 p-8">
    <!-- Header -->
    <header class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
        <div>
            <nav class="flex text-sm text-slate-400 mb-2 items-center gap-2">
                <a class="hover:text-primary transition-colors" href="{{ route('assets.index') }}">Assets</a>
                <span class="material-icons text-xs">chevron_right</span>
                <span class="text-slate-600 dark:text-slate-300">{{ $asset->model_brand ?? 'Detail' }}</span>
            </nav>

            <div class="flex items-center gap-4">
                <h1 class="text-2xl font-bold">Asset Detail</h1>

                @php
                    $badgeClass = "bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400";
                    if ($status === 'maintenance' || $status === 'under_maintenance') $badgeClass = "bg-amber-100 text-amber-700 dark:bg-amber-900/30 dark:text-amber-400";
                    if ($status === 'retired' || $status === 'disposed') $badgeClass = "bg-slate-200 text-slate-700 dark:bg-slate-800 dark:text-slate-200";
                    if ($status === 'in_use') $badgeClass = "bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-400";
                @endphp

                <span class="px-3 py-1 {{ $badgeClass }} text-xs font-bold rounded-full uppercase tracking-wider">
                    {{ strtoupper($statusLabel) }}
                </span>
            </div>
        </div>

        <div class="flex items-center gap-3">
            {{-- Print QR: buka gambar QR di tab baru --}}
            @if($qrUrl)
                <a target="_blank" href="{{ $qrUrl }}"
                   class="flex items-center gap-2 px-5 py-2.5 bg-primary text-white font-semibold rounded-lg hover:bg-blue-600 shadow-lg shadow-primary/20 transition-all">
                    <span class="material-icons text-[20px]">qr_code_2</span>
                    Print QR Code
                </a>
            @else
                <button disabled
                        class="flex items-center gap-2 px-5 py-2.5 bg-slate-300 text-white font-semibold rounded-lg cursor-not-allowed">
                    <span class="material-icons text-[20px]">qr_code_2</span>
                    QR Not Available
                </button>
            @endif

            <a href="{{ route('assets.index') }}"
               class="p-2.5 border border-primary/20 text-primary rounded-lg hover:bg-primary/5 transition-colors"
               title="Back">
                <span class="material-icons text-[20px]">arrow_back</span>
            </a>
        </div>
    </header>

    <!-- Quick Stats Bar -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white dark:bg-slate-900 p-4 rounded-xl border border-primary/10 flex items-center gap-4">
            <div class="p-3 bg-primary/10 text-primary rounded-lg">
                <span class="material-icons">history</span>
            </div>
            <div>
                <p class="text-xs text-slate-400 font-medium uppercase tracking-tight">Created At</p>
                <p class="text-lg font-bold">
                    {{ $asset->created_at ? $asset->created_at->format('M d, Y') : '-' }}
                </p>
            </div>
        </div>

        <div class="bg-white dark:bg-slate-900 p-4 rounded-xl border border-primary/10 flex items-center gap-4">
            <div class="p-3 bg-orange-100 text-orange-600 dark:bg-orange-900/30 dark:text-orange-400 rounded-lg">
                <span class="material-icons">verified</span>
            </div>
            <div>
                <p class="text-xs text-slate-400 font-medium uppercase tracking-tight">Warranty Status</p>
                <p class="text-lg font-bold">
                    @if($wExpiry)
                        @if(isset($warrantyDaysLeft) && $warrantyDaysLeft !== null)
                            @if($warrantyDaysLeft >= 0)
                                {{ $warrantyDaysLeft }} Days Left
                            @else
                                Expired ({{ abs($warrantyDaysLeft) }} days ago)
                            @endif
                        @else
                            {{ $wExpiry->format('M d, Y') }}
                        @endif
                    @else
                        -
                    @endif
                </p>
            </div>
        </div>

        <div class="bg-white dark:bg-slate-900 p-4 rounded-xl border border-primary/10 flex items-center gap-4">
            <div class="p-3 bg-green-100 text-green-600 dark:bg-green-900/30 dark:text-green-400 rounded-lg">
                <span class="material-icons">person</span>
            </div>
            <div>
                <p class="text-xs text-slate-400 font-medium uppercase tracking-tight">PIC / Custodian</p>
                <p class="text-lg font-bold truncate">
                    {{ $asset->assigned_user_id ?? '-' }}
                </p>
                <p class="text-[10px] text-slate-400">(*sementara tampil ID karena relasi user belum dipakai)</p>
            </div>
        </div>

        <div class="bg-white dark:bg-slate-900 p-4 rounded-xl border border-primary/10 flex items-center gap-4">
            <div class="p-3 bg-purple-100 text-purple-600 dark:bg-purple-900/30 dark:text-purple-400 rounded-lg">
                <span class="material-icons">room</span>
            </div>
            <div>
                <p class="text-xs text-slate-400 font-medium uppercase tracking-tight">Location</p>
                <p class="text-lg font-bold">
                    {{ $asset->location_id ?? '-' }}
                </p>
                <p class="text-[10px] text-slate-400">(*sementara tampil ID karena relasi location belum dipakai)</p>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
        <!-- Left Column: Asset Profile -->
        <div class="lg:col-span-4 space-y-6">
            <div class="bg-white dark:bg-slate-900 rounded-xl border border-primary/10 overflow-hidden shadow-sm">
                <div class="aspect-video relative overflow-hidden bg-slate-100 dark:bg-slate-800">
                    @if($photoUrl)
                        <img alt="Asset Photo" class="w-full h-full object-cover" src="{{ $photoUrl }}"/>
                    @else
                        <div class="w-full h-full flex items-center justify-center text-slate-400">
                            <span class="material-icons text-5xl">image_not_supported</span>
                        </div>
                    @endif

                    <div class="absolute bottom-4 left-4">
                        <span class="bg-black/60 backdrop-blur-md text-white px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-widest">
                            {{ $assetTagFull }}
                        </span>
                    </div>
                </div>

                <div class="p-6">
                    <h2 class="text-xl font-bold mb-4">Core Specifications</h2>

                    <div class="space-y-4">
                        <div class="flex justify-between items-center border-b border-slate-100 dark:border-slate-800 pb-3">
                            <span class="text-slate-400 text-sm">Model / Brand</span>
                            <span class="font-semibold text-sm">{{ $asset->model_brand ?? '-' }}</span>
                        </div>

                        <div class="flex justify-between items-center border-b border-slate-100 dark:border-slate-800 pb-3">
                            <span class="text-slate-400 text-sm">Serial Number</span>
                            <span class="font-mono font-medium text-xs">{{ $asset->serial_number ?? '-' }}</span>
                        </div>

                        <div class="flex justify-between items-center border-b border-slate-100 dark:border-slate-800 pb-3">
                            <span class="text-slate-400 text-sm">Purchase Date</span>
                            <span class="font-semibold text-sm">
                                {{ $asset->purchase_date ? \Carbon\Carbon::parse($asset->purchase_date)->format('M d, Y') : '-' }}
                            </span>
                        </div>

                        <div class="flex justify-between items-center border-b border-slate-100 dark:border-slate-800 pb-3">
                            <span class="text-slate-400 text-sm">Purchase Price</span>
                            <span class="font-semibold text-sm">
                                {{ $asset->purchase_price ? 'IDR ' . number_format($asset->purchase_price, 0, ',', '.') : '-' }}
                            </span>
                        </div>

                        <div class="flex justify-between items-center border-b border-slate-100 dark:border-slate-800 pb-3">
                            <span class="text-slate-400 text-sm">Specifications</span>
                            <span class="font-semibold text-sm text-right">{{ $asset->specifications ?? '-' }}</span>
                        </div>
                    </div>

                    <div class="mt-8">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-sm font-bold text-slate-500 uppercase tracking-wider">Warranty</h3>
                            <span class="text-xs font-semibold text-primary">
                                {{ $wExpiry ? $wExpiry->format('M d, Y') : '-' }}
                            </span>
                        </div>

                        <div class="w-full bg-primary/10 rounded-full h-2">
                            @php
                                // simple progress: 100% kalau masih valid, 0% kalau expired
                                $progress = 0;
                                if ($wExpiry) {
                                    $progress = (isset($warrantyDaysLeft) && $warrantyDaysLeft !== null && $warrantyDaysLeft > 0) ? 100 : 0;
                                }
                            @endphp
                            <div class="bg-primary h-2 rounded-full" style="width: {{ $progress }}%"></div>
                        </div>

                        @if($wExpiry)
                            <p class="text-xs text-slate-400 mt-2 italic">
                                @if(isset($warrantyDaysLeft) && $warrantyDaysLeft !== null)
                                    @if($warrantyDaysLeft >= 0)
                                        Warranty expires on {{ $wExpiry->format('M d, Y') }}
                                    @else
                                        Warranty expired on {{ $wExpiry->format('M d, Y') }}
                                    @endif
                                @else
                                    Warranty expiry: {{ $wExpiry->format('M d, Y') }}
                                @endif
                            </p>
                        @endif
                    </div>

                    {{-- Notes --}}
                    <div class="mt-6 p-4 bg-slate-50 dark:bg-slate-800/50 rounded-xl border border-slate-100 dark:border-slate-800">
                        <p class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-2">Notes</p>
                        <p class="text-sm whitespace-pre-line">{{ $asset->notes ?? '-' }}</p>
                    </div>

                    {{-- QR Preview --}}
                    <div class="mt-6 text-center">
                        <p class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-3">QR Code</p>
                        @if($qrUrl)
                            <img src="{{ $qrUrl }}" class="mx-auto w-40 bg-white p-2 rounded-lg border">
                            <p class="text-[10px] text-slate-400 mt-2 break-all">{{ $asset->qr_code_uuid }}</p>
                        @else
                            <p class="text-sm text-slate-400">QR belum tersedia</p>
                        @endif
                    </div>

                </div>
            </div>

            <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-primary/10">
                <h3 class="font-bold mb-4 flex items-center gap-2">
                    <span class="material-icons text-primary text-sm">assignment_ind</span>
                    Current Custodian
                </h3>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full border-2 border-primary/20 bg-primary/10 flex items-center justify-center text-primary">
                        <span class="material-icons">person</span>
                    </div>
                    <div>
                        <p class="font-bold text-sm">
                            {{ $asset->assigned_user_id ? 'User ID: '.$asset->assigned_user_id : '-' }}
                        </p>
                        <p class="text-xs text-slate-400">Relasi user belum dipakai (sementara tampil ID)</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column -->
        <div class="lg:col-span-8">
            <div class="bg-white dark:bg-slate-900 rounded-xl border border-primary/10 shadow-sm overflow-hidden h-full flex flex-col">
                <div class="flex border-b border-slate-100 dark:border-slate-800">
                    <button class="px-8 py-4 text-sm font-bold text-primary border-b-2 border-primary">
                        Info
                    </button>
                </div>

                <div class="flex-1 p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="p-4 rounded-xl bg-slate-50 dark:bg-slate-800/50 border border-slate-100 dark:border-slate-800">
                            <p class="text-xs text-slate-400 font-bold uppercase tracking-widest">Asset Name</p>
                            <p class="text-lg font-bold mt-1">{{ $asset->asset_name }}</p>
                        </div>

                        <div class="p-4 rounded-xl bg-slate-50 dark:bg-slate-800/50 border border-slate-100 dark:border-slate-800">
                            <p class="text-xs text-slate-400 font-bold uppercase tracking-widest">Asset Tag</p>
                            <p class="text-lg font-bold mt-1">{{ $assetTagFull }}</p>
                        </div>

                        <div class="p-4 rounded-xl bg-slate-50 dark:bg-slate-800/50 border border-slate-100 dark:border-slate-800">
                            <p class="text-xs text-slate-400 font-bold uppercase tracking-widest">Condition</p>
                            <p class="text-lg font-bold mt-1 capitalize">{{ $asset->condition_status ?? '-' }}</p>
                        </div>

                        <div class="p-4 rounded-xl bg-slate-50 dark:bg-slate-800/50 border border-slate-100 dark:border-slate-800">
                            <p class="text-xs text-slate-400 font-bold uppercase tracking-widest">Lifecycle Status</p>
                            <p class="text-lg font-bold mt-1 capitalize">{{ $asset->lifecycle_status ?? '-' }}</p>
                        </div>
                    </div>

                    <div class="mt-8">
                        <p class="text-xs text-slate-400 font-bold uppercase tracking-widest mb-3">Raw IDs (sementara)</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="p-4 rounded-xl bg-slate-50 dark:bg-slate-800/50 border border-slate-100 dark:border-slate-800">
                                <p class="text-xs text-slate-400">category_id</p>
                                <p class="font-mono text-sm">{{ $asset->category_id ?? 'null' }}</p>
                            </div>
                            <div class="p-4 rounded-xl bg-slate-50 dark:bg-slate-800/50 border border-slate-100 dark:border-slate-800">
                                <p class="text-xs text-slate-400">vendor_id</p>
                                <p class="font-mono text-sm">{{ $asset->vendor_id ?? 'null' }}</p>
                            </div>
                            <div class="p-4 rounded-xl bg-slate-50 dark:bg-slate-800/50 border border-slate-100 dark:border-slate-800">
                                <p class="text-xs text-slate-400">location_id</p>
                                <p class="font-mono text-sm">{{ $asset->location_id ?? 'null' }}</p>
                            </div>
                            <div class="p-4 rounded-xl bg-slate-50 dark:bg-slate-800/50 border border-slate-100 dark:border-slate-800">
                                <p class="text-xs text-slate-400">assigned_user_id</p>
                                <p class="font-mono text-sm">{{ $asset->assigned_user_id ?? 'null' }}</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="p-6 bg-slate-50 dark:bg-slate-800/50 border-t border-slate-100 dark:border-slate-800 flex justify-end">
                    <a href="{{ route('assets.index') }}"
                       class="flex items-center gap-2 px-4 py-2 text-sm font-bold text-primary hover:bg-primary/10 rounded-lg transition-colors">
                        <span class="material-icons text-[18px]">arrow_back</span>
                        Back to Assets
                    </a>
                </div>
            </div>
        </div>

    </div>
</main>
</div>
</body>
</html>