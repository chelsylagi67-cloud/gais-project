<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Bosowa GAIS - Asset Management Dashboard</title>
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
                        "secondary": "#e11d48", // Bosowa Red accent
                        "background-light": "#f6f7f8",
                        "background-dark": "#101922",
                    },
                    fontFamily: {
                        "display": ["Inter"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
</head>
<body class="font-display bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen flex">
<!-- Sidebar -->
<aside class="w-64 bg-white dark:bg-slate-900 border-r border-slate-200 dark:border-slate-800 flex flex-col fixed h-full z-50">
<div class="p-6 flex items-center gap-3">
<div class="w-10 h-10 bg-primary rounded flex items-center justify-center text-white font-bold text-xl">B</div>
<div>
<h1 class="font-bold text-lg leading-tight tracking-tight text-slate-800 dark:text-white">BOSOWA</h1>
<p class="text-[10px] uppercase tracking-widest text-slate-500 font-semibold">General Affairs</p>
</div>
</div>
<nav class="flex-1 px-4 space-y-1 mt-4">
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-lg transition-colors group" href="#">
<span class="material-icons text-xl group-hover:text-primary">dashboard</span>
<span class="font-medium">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 bg-primary/10 text-primary rounded-lg transition-colors border-r-4 border-primary" href="#">
<span class="material-icons text-xl">inventory_2</span>
<span class="font-medium">Asset Management</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-lg transition-colors group" href="#">
<span class="material-icons text-xl group-hover:text-primary">shopping_cart</span>
<span class="font-medium">Procurement</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-lg transition-colors group" href="#">
<span class="material-icons text-xl group-hover:text-primary">build_circle</span>
<span class="font-medium">Maintenance</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-lg transition-colors group" href="#">
<span class="material-icons text-xl group-hover:text-primary">bar_chart</span>
<span class="font-medium">Reports</span>
</a>
</nav>
<div class="p-4 border-t border-slate-200 dark:border-slate-800">
<div class="flex items-center gap-3 p-2 bg-slate-50 dark:bg-slate-800/50 rounded-lg">
<img alt="Admin" class="w-10 h-10 rounded-full border border-white dark:border-slate-700 object-cover" data-alt="User profile picture of a male administrator" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB6m3-mTLHoZ0cUOdFq0makdYoTg_zuSeGPqZzni4rs6XILoUMylJEmVIcV2FTNRO7MLxXOoFMD-8WiQs-DS_8-K1iWh4KOV9vrSHqMsvEted5I3gR6ViQJZtVKTV7hm88peudtgVHvMHQnZ28hybOEpabjl2QIlS0tlB2pdu-8oa4-ayBrK2WA9-07OFvqFHHpELN-ENLfNcgvNDwrlBpyloJ-8vGc544AD_2snBzrNXHIC661xtBw50ixP9GSyJnTx-J53TQMLdE"/>
<div class="overflow-hidden">
<p class="text-sm font-semibold truncate">Andi Pratama</p>
<p class="text-[10px] text-slate-500 uppercase">Super Admin</p>
</div>
</div>
</div>
</aside>
<!-- Main Content -->
<main class="ml-64 flex-1 flex flex-col min-h-screen">
<!-- Header Bar -->
<header class="h-16 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 flex items-center justify-between px-8 sticky top-0 z-40">
<div class="flex items-center gap-2 text-sm text-slate-500">
<span>Home</span>
<span class="material-icons text-xs leading-none">chevron_right</span>
<span class="text-slate-900 dark:text-white font-medium">Asset Management</span>
</div>
<div class="flex items-center gap-4">
<button class="p-2 text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-full relative">
<span class="material-icons">notifications</span>
<span class="absolute top-2 right-2 w-2 h-2 bg-secondary rounded-full border-2 border-white dark:border-slate-900"></span>
</button>
<div class="h-8 w-[1px] bg-slate-200 dark:bg-slate-800 mx-2"></div>
<button class="flex items-center gap-2 text-slate-600 dark:text-slate-400 font-medium hover:text-primary transition-colors">
<span class="material-icons text-xl">settings</span>
</button>
</div>
</header>
<!-- Content Area -->
<div class="p-8 space-y-8">
<!-- Stats Overview -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
<div class="flex items-center justify-between">
<div>
<p class="text-sm text-slate-500 font-medium">Total Assets</p>
{{ \App\Models\Asset::count() }}
</div>
<div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center text-primary">
<span class="material-icons">inventory_2</span>
</div>
</div>
<p class="mt-4 text-xs text-green-500 font-medium flex items-center gap-1">
<span class="material-icons text-[14px]">trending_up</span>
<span>+12 this month</span>
</p>
</div>
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
<div class="flex items-center justify-between">
<div>
<p class="text-sm text-slate-500 font-medium">In Use</p>
{{ \App\Models\Asset::where('lifecycle_status','in_use')->count() }}
</div>
<div class="w-12 h-12 bg-blue-500/10 rounded-lg flex items-center justify-center text-blue-500">
<span class="material-icons">person_outline</span>
</div>
</div>
<p class="mt-4 text-xs text-slate-400 font-medium uppercase tracking-wider">67% Utilization</p>
</div>
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
<div class="flex items-center justify-between">
<div>
<p class="text-sm text-slate-500 font-medium">Available</p>
{{ \App\Models\Asset::where('lifecycle_status','available')->count() }}
</div>
<div class="w-12 h-12 bg-green-500/10 rounded-lg flex items-center justify-center text-green-500">
<span class="material-icons">check_circle_outline</span>
</div>
</div>
<p class="mt-4 text-xs text-slate-400 font-medium uppercase tracking-wider">Ready for deployment</p>
</div>
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm border-l-4 border-l-amber-500">
<div class="flex items-center justify-between">
<div>
<p class="text-sm text-slate-500 font-medium">Under Maintenance</p>
{{ \App\Models\Asset::where('lifecycle_status','maintenance')->count() }}
</div>
<div class="w-12 h-12 bg-amber-500/10 rounded-lg flex items-center justify-center text-amber-500">
<span class="material-icons">engineering</span>
</div>
</div>
<p class="mt-4 text-xs text-amber-500 font-medium flex items-center gap-1">
<span class="material-icons text-[14px]">priority_high</span>
<span>3 items overdue</span>
</p>
</div>
</div>
<!-- Table Section -->
<div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
<!-- Toolbar -->
<div class="p-6 border-b border-slate-200 dark:border-slate-800 flex flex-col lg:flex-row lg:items-center justify-between gap-4">
<div class="flex flex-col sm:flex-row gap-4 items-center flex-1 max-w-3xl">
<div class="relative w-full">
<span class="material-icons absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-lg">search</span>
<input class="w-full pl-10 pr-4 py-2 bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 rounded-lg focus:ring-primary focus:border-primary text-sm" placeholder="Search by Asset ID, name, or serial..." type="text"/>
</div>
<div class="flex gap-2 w-full sm:w-auto">
<select class="bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 rounded-lg text-sm px-3 py-2 focus:ring-primary">
<option>All Locations</option>
<option>Head Office</option>
<option>Makassar Plant</option>
<option>Maros Site</option>
</select>
<select class="bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 rounded-lg text-sm px-3 py-2 focus:ring-primary">
<option>All Categories</option>
<option>Vehicles</option>
<option>IT Hardware</option>
<option>Office Furniture</option>
<option>Heavy Equipment</option>
</select>
</div>
</div>
<a href="{{ route('assets.create') }}"
   class="bg-primary hover:bg-primary/90 text-white px-6 py-2 rounded-lg font-medium text-sm flex items-center justify-center gap-2 transition-all shadow-lg shadow-primary/20">
    <span class="material-icons text-lg">add</span>
    <span>Add New Asset</span>
</a>

</div>
<!-- Data Table -->
<div class="overflow-x-auto">
<table class="w-full text-left">
<thead>
<tr class="bg-slate-50 dark:bg-slate-800/50 text-slate-500 text-xs uppercase tracking-wider">
<th class="px-6 py-4 font-semibold">Asset ID</th>
<th class="px-6 py-4 font-semibold">Asset Name</th>
<th class="px-6 py-4 font-semibold">Category</th>
<th class="px-6 py-4 font-semibold text-center">Status</th>
<th class="px-6 py-4 font-semibold">Warranty Expiry</th>
<th class="px-6 py-4 font-semibold text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-800">
@forelse($assets as $asset)
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors group">
    
    {{-- Asset ID --}}
    <td class="px-6 py-4 text-sm font-mono text-slate-600 dark:text-slate-400">
        {{ $asset->asset_tag_prefix }}{{ $asset->asset_tag }}
    </td>

    {{-- Asset Name --}}
    <td class="px-6 py-4">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-400">
                <span class="material-icons">inventory_2</span>
            </div>
            <span class="font-semibold text-slate-800 dark:text-slate-200">
                {{ $asset->asset_name }}
            </span>
        </div>
    </td>

    {{-- Category --}}
    <td class="px-6 py-4 text-sm text-slate-500">
        {{ $asset->category->name ?? 'IT Hardware' }}
    </td>

    {{-- Status --}}
    <td class="px-6 py-4 text-center">
        @if($asset->lifecycle_status == 'available')
            <span class="px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wide bg-green-100 text-green-700">
                Available
            </span>
        @elseif($asset->lifecycle_status == 'in_use')
            <span class="px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wide bg-blue-100 text-blue-700">
                In Use
            </span>
        @else
            <span class="px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wide bg-amber-100 text-amber-700">
                Maintenance
            </span>
        @endif
    </td>

    {{-- Warranty --}}
    <td class="px-6 py-4 text-sm text-slate-500">
        {{ $asset->warranty_expiry 
            ? \Carbon\Carbon::parse($asset->warranty_expiry)->format('d M Y') 
            : '-' }}
    </td>

    {{-- Actions --}}
    <td class="px-6 py-4 text-right">
        <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">

            {{-- View Detail --}}
            <a href="{{ route('assets.scan', $asset->qr_code_uuid) }}"
               class="p-2 text-slate-400 hover:text-primary hover:bg-primary/10 rounded-lg">
                <span class="material-icons text-xl">visibility</span>
            </a>

            {{-- QR Preview --}}
            <a href="{{ asset('storage/'.$asset->qr_path) }}"
               target="_blank"
               class="p-2 text-slate-400 hover:text-secondary hover:bg-secondary/10 rounded-lg">
                <span class="material-icons text-xl">qr_code_2</span>
            </a>

        </div>
    </td>

</tr>
@empty
<tr>
    <td colspan="6" class="text-center py-6 text-slate-400">
        Belum ada data asset.
    </td>
</tr>
@endforelse
</tbody>
</table>
</div>
<!-- Pagination -->
<div class="px-6 py-4 border-t border-slate-200 dark:border-slate-800">
    {{ $assets->links() }}
</div>
<!-- Floating Footer for Quick System Actions -->
<footer class="mt-auto p-8 border-t border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900/50">
<div class="flex flex-col md:flex-row justify-between items-center gap-4">
<div class="flex items-center gap-4">
<div class="text-[10px] bg-green-500/10 text-green-600 px-2 py-1 rounded-full font-bold uppercase tracking-widest flex items-center gap-1">
<span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span>
                        System Online
                    </div>
<p class="text-xs text-slate-400">© 2024 Bosowa Group. All rights reserved.</p>
</div>
<div class="flex items-center gap-4 text-xs font-medium text-slate-500">
<a class="hover:text-primary transition-colors" href="#">Documentation</a>
<a class="hover:text-primary transition-colors" href="#">Support Center</a>
<a class="hover:text-primary transition-colors" href="#">Privacy Policy</a>
</div>
</div>
</footer>
</main>
<!-- Map Context Hint (For Data Consistency) -->
<div class="hidden" data-location="Makassar, Indonesia" style=""></div>
</body></html>