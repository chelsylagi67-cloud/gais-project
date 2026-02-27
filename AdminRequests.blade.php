<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Admin: Pending Item Requests Review - GAIS Bosowa</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
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
              borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
            },
          },
        }
      </script>
<style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="font-display bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen flex">
<!-- Sidebar -->

<aside class="w-64 bg-white dark:bg-slate-900 border-r border-slate-200 dark:border-slate-800 flex flex-col shrink-0">
<div class="p-6 flex items-center gap-3">
    <div class="bg-white p-1 rounded-lg shadow-sm overflow-hidden">
      <img
        src="{{ asset('images/bosowa.png') }}"
        alt="BOSOWA"
        class="h-7 w-auto max-w-[120px] object-contain"
      />
    </div>
    <h1 class="font-bold text-xl tracking-tight text-primary">GAIS Admin</h1>
  </div>
@php
    function navClass($route) {
        return request()->routeIs($route)
            ? 'bg-primary text-white'
            : 'text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800';
    }
@endphp
<nav class="flex-1 px-4 space-y-1 overflow-y-auto">

    {{-- Dashboard --}}
    <a href="{{ route('admin.dashboard') }}"
       class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition-all {{ navClass('admin.dashboard') }}">
        <span class="material-icons-round text-[20px]">dashboard</span>
        <span class="font-medium">Dashboard</span>
    </a>

    {{-- Inventory --}}
    <a href="{{ route('inventory.index') }}"
       class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition-all {{ navClass('inventory.*') }}">
        <span class="material-icons-round text-[20px]">inventory_2</span>
        <span class="font-medium">Inventory</span>
    </a>

 {{-- Requests --}}
    <a href="{{ route('admin.requests.index') }}"
class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition-all {{ navClass('inventory.*') }}">
        <span class="material-icons-round text-[20px]">assignment</span>
        <span class="font-medium">Requests</span>
    </a>

    {{-- Assets --}}
    <a href="{{ route('assets.index') }}"
       class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition-all {{ navClass('assets.*') }}">
        <span class="material-icons-round text-[20px]">apartment</span>
        <span class="font-medium">Assets</span>
    </a>


    {{-- Checklist --}}
    <a href="{{ route('checklist.index') }}"
       class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition-all {{ navClass('checklist.*') }}">
        <span class="material-icons-round text-[20px]">fact_check</span>
        <span class="font-medium">Checklist</span>
    </a>

    {{-- Room Booking --}}
    <a href="{{ route('room-booking.index') }}"
       class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition-all {{ navClass('room-booking.*') }}">
        <span class="material-icons-round text-[20px]">meeting_room</span>
        <span class="font-medium">Room Booking</span>
    </a>

    {{-- Vendors --}}
    <a href="{{ route('vendors.index') }}"
       class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition-all {{ navClass('vendors.*') }}">
        <span class="material-icons-round text-[20px]">store</span>
        <span class="font-medium">Vendors</span>
    </a>

    {{-- Reports --}}
    <a href="{{ route('reports.index') }}"
       class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition-all {{ navClass('reports.*') }}">
        <span class="material-icons-round text-[20px]">assessment</span>
        <span class="font-medium">Reports</span>
    </a>

</nav>
<div class="p-4 border-t border-slate-200 dark:border-slate-800">
<div class="flex items-center gap-3 p-2 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
<img alt="Admin Profile" class="w-10 h-10 rounded-full object-cover" data-alt="Corporate admin portrait professional" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCnA0lWPPodnHJofI6G2u_Miii4JEGKtl15IW8CNyUQ0ICX6ScKvvaJw9Wo2zkylFFEGYZN1n4dfIpDOSf_U2O82t18gKtJhhueehnnEa1dMooUxX4pneV--Wy2uIShZvCN9cYhDjHav3fsv5DobxacVkbRJJS2wlORtpdmxlbmtIi34FaYaEk9txajlQiNzfYyApcj3ekwYgXK67D-hujlIuxrGoFFXcWz2KhfSuuXeAGjvbM3mCn9uBUH9jYqaZlSoiYzljr0z3o"/>
<div class="overflow-hidden">
<p class="text-sm font-bold truncate">Ahmad Fauzi</p>
<p class="text-[11px] text-slate-500 truncate">Senior GA Admin</p>
</div>
</div>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 p-8">
<!-- Header Section -->
<header class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
<div>
<nav class="flex text-sm text-slate-500 mb-2">
<span>Admin</span>
<span class="mx-2">/</span>
<span>GAIS</span>
<span class="mx-2">/</span>
<span class="text-primary font-medium">Pending Requests</span>
</nav>
<h2 class="text-2xl font-bold text-slate-900 dark:text-white">Pending Item Requests</h2>
</div>
<div class="flex items-center gap-3">
<a href="{{ route('admin.requests.export') }}"
   class="bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 px-4 py-2 rounded-lg text-sm font-semibold flex items-center gap-2">
    <span class="material-icons text-[18px]">file_download</span>
    Export CSV
</a>


<button class="bg-primary text-white px-4 py-2 rounded-lg text-sm font-semibold flex items-center gap-2 hover:opacity-90 transition-opacity shadow-sm">
<span class="material-icons text-[18px]">done_all</span>
                        Bulk Approve
                    </button>
</div>
</header>
<!-- Stats Bar -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
<div class="bg-white dark:bg-slate-900 p-5 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
<div class="flex items-center justify-between mb-2">
<p class="text-xs font-bold text-slate-500 uppercase tracking-wider">Total Pending</p>
<span class="material-icons text-primary">pending_actions</span>
</div>
<p class="text-2xl font-bold">{{ $totalPending }}</p>
</div>
<div class="bg-white dark:bg-slate-900 p-5 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
<div class="flex items-center justify-between mb-2">
<p class="text-xs font-bold text-slate-500 uppercase tracking-wider">High Urgency</p>
<span class="material-icons text-red-500">priority_high</span>
</div>
<p class="text-2xl font-bold">{{ $highUrgency }}</p>
<p class="text-[11px] text-slate-400 mt-1 font-medium">Requires immediate action</p>
</div>
<div class="bg-white dark:bg-slate-900 p-5 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
<div class="flex items-center justify-between mb-2">
<p class="text-xs font-bold text-slate-500 uppercase tracking-wider">Requests Today</p>
<span class="material-icons text-emerald-500">today</span>
</div>
<p class="text-2xl font-bold">{{ $requestsToday }}</p>
<p class="text-[11px] text-slate-400 mt-1 font-medium">Pending initial review</p>
</div>

</div>
</div>
<!-- Filters and Table Card -->
<div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
<div class="p-4 border-b border-slate-200 dark:border-slate-800 flex flex-wrap items-center gap-4">
<div class="relative flex-1 min-w-[300px]">
<span class="material-icons absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-[20px]">search</span>
<input class="w-full pl-10 pr-4 py-2 bg-slate-50 dark:bg-slate-800 border-none rounded-lg text-sm focus:ring-2 focus:ring-primary/20 placeholder:text-slate-400" placeholder="Search by requester or item name..." type="text"/>
</div>
<div class="flex items-center gap-3">
<select class="bg-slate-50 dark:bg-slate-800 border-none rounded-lg text-sm px-4 py-2 focus:ring-2 focus:ring-primary/20 text-slate-600 dark:text-slate-300">
<option>All Departments</option>
<option>Logistics</option>
<option>Mining</option>
<option>Finance</option>
<option>HR &amp; Admin</option>
</select>
<select class="bg-slate-50 dark:bg-slate-800 border-none rounded-lg text-sm px-4 py-2 focus:ring-2 focus:ring-primary/20 text-slate-600 dark:text-slate-300">
<option>All Urgency</option>
<option>High</option>
<option>Normal</option>
<option>Low</option>
</select>
</div>
</div>
<!-- Data Table -->
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-slate-50 dark:bg-slate-800/50 text-[11px] font-bold text-slate-500 uppercase tracking-widest border-b border-slate-200 dark:border-slate-800">
<th class="px-6 py-4 w-10 text-center">
<input class="rounded text-primary border-slate-300 focus:ring-primary" type="checkbox"/>
</th>
<th class="px-6 py-4">Date &amp; Urgency</th>
<th class="px-6 py-4">Requester</th>
<th class="px-6 py-4">Department</th>
<th class="px-6 py-4">Item &amp; Qty</th>
<th class="px-6 py-4">Reason</th>
<th class="px-6 py-4 text-center">Action</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-200 dark:divide-slate-800">
@forelse($requests as $request)
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors {{ ($request->urgency ?? 'Normal') == 'Urgent' ? 'bg-red-50/20 dark:bg-red-900/10' : '' }}">
    <td class="px-6 py-4 text-center">
        <input class="rounded text-primary border-slate-300 focus:ring-primary" type="checkbox"/>
    </td>

    <td class="px-6 py-4">
        <div class="flex flex-col">
            <span class="text-sm font-medium">
                {{ $request->created_at?->format('M d, Y') }}
            </span>

            @php
                $urg = $request->urgency ?? 'Normal';
                $urgClass = $urg === 'Urgent'
                    ? 'bg-red-100 text-red-600 dark:bg-red-900/30 dark:text-red-400'
                    : 'bg-blue-100 text-blue-600 dark:bg-blue-900/30 dark:text-blue-400';
            @endphp

            <span class="text-[10px] font-bold px-1.5 py-0.5 rounded-full {{ $urgClass }} self-start mt-1 uppercase">
                {{ $urg }}
            </span>
        </div>
    </td>

    <td class="px-6 py-4">
        <div class="flex items-center gap-3">
            <div class="w-8 h-8 rounded-full bg-slate-200 dark:bg-slate-700 flex items-center justify-center text-xs font-bold text-slate-600 dark:text-slate-300">
                {{ strtoupper(substr($request->user->name ?? 'U', 0, 2)) }}
            </div>
            <span class="text-sm font-semibold">{{ $request->user->name ?? '-' }}</span>
        </div>
    </td>

    <td class="px-6 py-4">
        <span class="text-sm text-slate-600 dark:text-slate-400">
            {{ $request->user->department ?? '-' }}
        </span>
    </td>

    <td class="px-6 py-4">
        <div class="flex flex-col">
            <span class="text-sm font-semibold">
                {{ $request->inventory->item_name ?? '(Item tidak ditemukan)' }}
            </span>
            <span class="text-xs text-slate-500">
                Qty: {{ $request->quantity }} {{ $request->inventory->unit ?? '' }}
            </span>
        </div>
    </td>

    <td class="px-6 py-4">
        <p class="text-sm text-slate-600 dark:text-slate-400 line-clamp-1 max-w-[200px]">
            {{ $request->reason ?? '-' }}
        </p>
    </td>

    <td class="px-6 py-4">
        <div class="flex items-center justify-center gap-2">
<form method="POST" action="{{ route('admin.requests.approve', $request->id) }}">

                @csrf
                <button class="w-8 h-8 rounded-full bg-emerald-500 text-white flex items-center justify-center hover:bg-emerald-600 transition-colors shadow-sm" title="Approve">
                    <span class="material-icons text-[18px]">check</span>
                </button>
            </form>

<form method="POST" action="{{ route('admin.requests.reject', $request->id) }}">

                @csrf
                <button class="w-8 h-8 rounded-full bg-red-500 text-white flex items-center justify-center hover:bg-red-600 transition-colors shadow-sm" title="Reject">
                    <span class="material-icons text-[18px]">close</span>
                </button>
            </form>
        </div>
    </td>
</tr>
@empty
<tr>
    <td colspan="7" class="px-6 py-8 text-center text-slate-500">
        Tidak ada pending request.
    </td>
</tr>
@endforelse
</tbody>

</table>
</div>
<!-- Pagination -->
<div class="px-6 py-4 border-t border-slate-200 dark:border-slate-800">
    {{ $requests->links() }}
</div>

</div>
<!-- Toast / Notification Placeholder (Visual only) -->
<div class="fixed bottom-8 right-8 flex flex-col gap-3 pointer-events-none">

</div>
</main>
</div>
</body></html>