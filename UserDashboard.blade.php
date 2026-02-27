<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Bosowa Employee Portal Dashboard - GAIS</title>
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
                        "display": ["Inter", "sans-serif"]
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
        body {
            font-family: 'Inter', sans-serif;
        }
        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #137fec33;
            border-radius: 10px;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-800 dark:text-slate-200">
<div class="flex h-screen overflow-hidden">
<!-- Sidebar -->
<aside class="w-64 bg-white dark:bg-slate-900 border-r border-slate-200 dark:border-slate-800 flex flex-col shrink-0">
<div class="p-6">
  <div class="flex items-center gap-3">
    <div class="bg-white p-1 rounded-lg shadow-sm overflow-hidden">
      <img
        src="{{ asset('images/bosowa.png') }}"
        alt="BOSOWA"
        class="h-7 w-auto max-w-[120px] object-contain"
      />
    </div>

    <h1 class="font-bold text-xl tracking-tight text-primary">GAIS User</h1>
  </div>
</div>
<nav class="flex-1 px-4 py-4 space-y-1 overflow-y-auto custom-scrollbar">
<a class="flex items-center gap-3 px-4 py-3 text-primary bg-primary/10 rounded-lg font-medium transition-all" href="{{ route('user.dashboard') }}">
<span class="material-icons">dashboard</span>
<span>Dashboard</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-primary rounded-lg transition-all" href="{{ route('user.inventory') }}">
<span class="material-icons">inventory_2</span>
<span>Inventory</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-primary rounded-lg transition-all" href="{{ route('my.request') }}">
<span class="material-icons">assignment_turned_in</span>
<span>My Requests</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-primary rounded-lg transition-all" href="#">
<span class="material-icons">meeting_room</span>
<span>Room Booking</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-primary rounded-lg transition-all"  href="{{ route('user.checklist') }}">
<span class="material-icons">fact_check</span>
<span>Operational Checklist</span>
</a>
</nav>
<div class="p-4 border-t border-slate-200 dark:border-slate-800">
<div class="flex items-center gap-3 p-2 bg-slate-50 dark:bg-slate-800 rounded-xl">
<img alt="User Avatar" class="w-10 h-10 rounded-full object-cover" data-alt="Professional male employee portrait avatar photo" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCMBWAreEQm2D0rP6ZtA3bMohr4Tv8450csSRZmM230H5ljk4OYABu1ZH0RC2XdJb92mD1Ou5oU4hjjn_kDc_2BmV-ENAdclPiz-M5-OzgmC1b9G0i26xfP4sCEcqVrKYc23-fMZbaahSqEZLxYTJaP55thJwA4f6wXHFEHVaFDbIqeLsCzKooyjlPzYNm-esl1wkMIZnGuLZnKHC_Lh1_Ils7zUcgghtzm-4fZlztw9Xd4RfM1g3TjNwSoV_W9PMyCyPt2sUAy00w"/>
<div class="flex flex-col overflow-hidden">
<span class="text-sm font-semibold truncate">Andi Pratama</span>
<span class="text-xs text-slate-400 truncate">Senior Staff</span>
</div>
<button class="ml-auto text-slate-400 hover:text-primary">
<span class="material-icons text-lg">logout</span>
</button>
</div>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 flex flex-col overflow-hidden">
<!-- Top Bar -->
<header class="h-16 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 flex items-center justify-between px-8">
<h1 class="text-xl font-semibold text-slate-800 dark:text-white">Dashboard Overview</h1>
<div class="flex items-center gap-4">
<button class="p-2 text-slate-400 hover:text-primary relative transition-colors">
<span class="material-icons">notifications</span>
<span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full border-2 border-white dark:border-slate-900"></span>
</button>
<div class="h-8 w-[1px] bg-slate-200 dark:bg-slate-700 mx-2"></div>
<div class="text-sm text-slate-500 dark:text-slate-400 font-medium">
                        Thursday, 24 Oct 2024
                    </div>
</div>
</header>
<!-- Scrollable Content -->
<div class="flex-1 overflow-y-auto p-8 custom-scrollbar">
<div class="max-w-7xl mx-auto space-y-8">
<!-- Welcome & Quick Actions -->
<section>
<div class="mb-6">
<h2 class="text-2xl font-bold text-slate-800 dark:text-white">Welcome back, Andi!</h2>
<p class="text-slate-500 dark:text-slate-400">Manage your workplace requests and facilities efficiently.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<!-- Quick Action: Request Item -->
<button class="group flex flex-col p-6 bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 hover:border-primary/50 hover:shadow-md transition-all text-left">
<div class="w-12 h-12 bg-primary/10 text-primary rounded-lg flex items-center justify-center mb-4 group-hover:bg-primary group-hover:text-white transition-colors">
<span class="material-icons">add_shopping_cart</span>
</div>
<h3 class="font-bold text-lg mb-1">Request Item</h3>
<p class="text-sm text-slate-500 dark:text-slate-400">Order stationery or equipment</p>
</button>
<!-- Quick Action: Book a Room -->
<button class="group flex flex-col p-6 bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 hover:border-primary/50 hover:shadow-md transition-all text-left">
<div class="w-12 h-12 bg-primary/10 text-primary rounded-lg flex items-center justify-center mb-4 group-hover:bg-primary group-hover:text-white transition-colors">
<span class="material-icons">event_available</span>
</div>
<h3 class="font-bold text-lg mb-1">Book a Room</h3>
<p class="text-sm text-slate-500 dark:text-slate-400">Reserve a meeting space</p>
</button>
<!-- Stat Card: Pending Requests -->
<div class="p-6 bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 flex items-center justify-between">
<div>
<p class="text-sm text-slate-500 dark:text-slate-400 font-medium">Pending Requests</p>
<h3 class="text-3xl font-bold mt-1 text-slate-800 dark:text-white">
    {{ $pendingCount ?? 0 }}
</h3>
</div>
<div class="w-12 h-12 bg-amber-500/10 text-amber-500 rounded-full flex items-center justify-center">
<span class="material-icons">pending_actions</span>
</div>
</div>
<!-- Stat Card: Today's Bookings -->
<div class="p-6 bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 flex items-center justify-between">
<div>
<p class="text-sm text-slate-500 dark:text-slate-400 font-medium">Today's Bookings</p>
<h3 class="text-3xl font-bold mt-1 text-slate-800 dark:text-white">02</h3>
</div>
<div class="w-12 h-12 bg-emerald-500/10 text-emerald-500 rounded-full flex items-center justify-center">
<span class="material-icons">calendar_today</span>
</div>
</div>
</div>
</section>
<!-- Main Grid Content -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
<!-- Recent Requests Table -->
<div class="lg:col-span-8 bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 overflow-hidden">
<div class="p-6 border-b border-slate-100 dark:border-slate-800 flex items-center justify-between">
<h3 class="font-bold text-lg">My Recent Requests</h3>
<a href="{{ route('my.request') }}" class="text-primary text-sm font-medium hover:underline">
    View All
</a>

</div>
<div class="overflow-x-auto">
<table class="w-full text-left">
<thead>
<tr class="bg-slate-50 dark:bg-slate-800/50 text-slate-500 dark:text-slate-400 text-xs uppercase tracking-wider">
<th class="px-6 py-4 font-semibold">Item Name</th>
<th class="px-6 py-4 font-semibold">Request Date</th>
<th class="px-6 py-4 font-semibold">Status</th>
<th class="px-6 py-4 font-semibold text-right">Action</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-800">
@forelse($recentRequests as $r)
<tr>
    <td class="px-6 py-4 font-medium">
        {{ $r->inventory->item_name ?? '-' }}
    </td>

    <td class="px-6 py-4 text-sm text-slate-500">
        {{ $r->request_datetime ? \Carbon\Carbon::parse($r->request_datetime)->format('d M Y') : ($r->created_at?->format('d M Y') ?? '-') }}
    </td>

    <td class="px-6 py-4">
        @php
            $status = $r->status ?? 'pending';
            $badge = match($status) {
                'approved' => 'bg-emerald-100 text-emerald-800 dark:bg-emerald-900/30 dark:text-emerald-400',
                'rejected' => 'bg-red-100 text-red-800 dark:bg-red-900/30 dark:text-red-400',
                'fulfilled' => 'bg-primary/20 text-primary dark:bg-primary/10 dark:text-primary',
                default => 'bg-amber-100 text-amber-800 dark:bg-amber-900/30 dark:text-amber-400',
            };
        @endphp

        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $badge }}">
            {{ ucfirst($status) }}
        </span>
    </td>

    <td class="px-6 py-4 text-right">
        <a href="{{ route('my.request', ['timeline' => $r->id]) }}"
           class="text-primary hover:text-primary/80 transition-colors">
            <span class="material-icons text-lg">visibility</span>
        </a>
    </td>
</tr>
@empty
<tr>
    <td colspan="4" class="px-6 py-6 text-center text-slate-500">
        Belum ada request.
    </td>
</tr>
@endforelse
</tbody>

</table>
</div>
</div>
<!-- Right Column: Bookings & Progress -->
<div class="lg:col-span-4 space-y-8">
<!-- GA Checklist Status Widget -->
<div class="bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 p-6">
<div class="flex items-center justify-between mb-6">
<h3 class="font-bold text-lg">GA Progress</h3>
<span class="text-xs font-bold text-primary px-2 py-1 bg-primary/10 rounded">Today</span>
</div>
<div class="flex items-center gap-6">
<div class="relative w-20 h-20">
<svg class="w-20 h-20 transform -rotate-90">
<circle class="text-slate-100 dark:text-slate-800" cx="40" cy="40" fill="transparent" r="34" stroke="currentColor" stroke-width="8"></circle>
<circle class="text-primary" cx="40" cy="40" fill="transparent" r="34" stroke="currentColor" stroke-dasharray="213.6" stroke-dashoffset="53.4" stroke-width="8"></circle>
</svg>
<div class="absolute inset-0 flex items-center justify-center font-bold text-lg">75%</div>
</div>
<div class="flex-1">
<p class="text-sm font-semibold mb-1">Operational Checklist</p>
<p class="text-xs text-slate-500 dark:text-slate-400">15 of 20 tasks completed for today's facility maintenance.</p>
</div>
</div>
</div>
<!-- My Room Bookings Section -->
<div class="bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 overflow-hidden">
<div class="p-6 border-b border-slate-100 dark:border-slate-800 flex items-center justify-between">
<h3 class="font-bold text-lg">My Bookings</h3>
<span class="material-icons text-slate-400">more_horiz</span>
</div>
<div class="p-6 space-y-4">
<!-- Booking Card 1 -->
<div class="flex gap-4 p-4 rounded-xl border border-slate-100 dark:border-slate-800 hover:border-primary/30 transition-colors">
<div class="flex flex-col items-center justify-center bg-slate-50 dark:bg-slate-800 rounded-lg px-3 py-1 min-w-[60px]">
<span class="text-xs font-bold text-primary uppercase">Oct</span>
<span class="text-xl font-black">24</span>
</div>
<div class="flex-1 min-w-0">
<p class="font-bold text-sm truncate">Weekly Sync GA Team</p>
<div class="flex items-center gap-2 mt-1 text-slate-500 dark:text-slate-400 text-xs">
<span class="material-icons text-xs">schedule</span>
<span>10:00 AM - 11:30 AM</span>
</div>
<div class="flex items-center gap-2 mt-1 text-slate-500 dark:text-slate-400 text-xs">
<span class="material-icons text-xs">room</span>
<span class="truncate">Phinisi Meeting Room, Lt. 2</span>
</div>
</div>
</div>
<!-- Booking Card 2 -->
<div class="flex gap-4 p-4 rounded-xl border border-slate-100 dark:border-slate-800 hover:border-primary/30 transition-colors">
<div class="flex flex-col items-center justify-center bg-slate-50 dark:bg-slate-800 rounded-lg px-3 py-1 min-w-[60px]">
<span class="text-xs font-bold text-primary uppercase">Oct</span>
<span class="text-xl font-black">25</span>
</div>
<div class="flex-1 min-w-0">
<p class="font-bold text-sm truncate">Project Kick-off 2025</p>
<div class="flex items-center gap-2 mt-1 text-slate-500 dark:text-slate-400 text-xs">
<span class="material-icons text-xs">schedule</span>
<span>02:00 PM - 03:00 PM</span>
</div>
<div class="flex items-center gap-2 mt-1 text-slate-500 dark:text-slate-400 text-xs">
<span class="material-icons text-xs">room</span>
<span class="truncate">Bosowa Hall A</span>
</div>
</div>
</div>
<button class="w-full py-2 px-4 border-2 border-dashed border-slate-200 dark:border-slate-800 rounded-xl text-sm font-medium text-slate-400 hover:text-primary hover:border-primary/50 transition-all flex items-center justify-center gap-2">
<span class="material-icons text-sm">add</span>
                                        Book New Room
                                    </button>
</div>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
</body></html>