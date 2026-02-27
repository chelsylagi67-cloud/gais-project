<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>User: GA Operational Checklist Status - Bosowa GAIS</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .active-nav {
            background-color: rgba(19, 127, 236, 0.1);
            color: #137fec;
            border-right: 4px solid #137fec;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-display">
<div class="flex min-h-screen">
<!-- Sidebar -->
<aside class="w-64 bg-white dark:bg-slate-900 border-r border-slate-200 dark:border-slate-800 flex flex-col fixed h-full">
<div class="p-6 flex items-center gap-3">
<div class="h-10 w-10 rounded-lg bg-primary flex items-center justify-center text-white">
<span class="material-symbols-outlined">corporate_fare</span>
</div>
<div>
<h1 class="text-lg font-bold leading-none">Bosowa</h1>
<p class="text-xs text-slate-500 font-medium tracking-wider uppercase mt-1">GAIS Portal</p>
</div>
</div>
<nav class="flex-1 mt-4">
<div class="px-4 mb-2 text-[10px] font-bold text-slate-400 uppercase tracking-widest">Main Menu</div>
<a class="flex items-center gap-3 px-6 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors" href="#">
<span class="material-symbols-outlined">dashboard</span>
<span class="text-sm font-medium">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-6 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors" href="#">
<span class="material-symbols-outlined">description</span>
<span class="text-sm font-medium">My Requests</span>
</a>
<a class="flex items-center gap-3 px-6 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors" href="#">
<span class="material-symbols-outlined">meeting_room</span>
<span class="text-sm font-medium">Room Booking</span>
</a>
<a class="flex items-center gap-3 px-6 py-3 active-nav transition-colors" href="#">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">fact_check</span>
<span class="text-sm font-semibold">GA Checklist</span>
</a>
</nav>
<div class="p-4 border-t border-slate-200 dark:border-slate-800">
<div class="flex items-center gap-3 p-2 rounded-lg bg-slate-50 dark:bg-slate-800">
<img alt="User profile" class="h-8 w-8 rounded-full bg-primary/10" data-alt="Corporate employee profile avatar circle" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDgUYqiWVO5AZRFn6zArap-Z1_VxfRGnYy6BqhTM1JHzki1w1AWWE7mqeEfuUEVEl5zyH3GfMbCQLIcHcqVs3hq0ysxYEsSvI70zxTV7Ih5-t6ESXSyRMdkjLBHt78NrKe5amE3yMaj0cHU5SIyNou4bI8bJdGnVU5MKZVsFadJQza4djpT7-i4l6i7MooThu7ztFcj-PBiJRQ7uuKlScYdw0DCkyOQK19-QLs30Jk4qDXbD9fyhckCQnM_2qMmCtXlnsTfy_uNDSw"/>
<div class="overflow-hidden">
<p class="text-xs font-bold truncate text-slate-900 dark:text-slate-100">Budi Santoso</p>
<p class="text-[10px] text-slate-500 truncate">Operation Staff</p>
</div>
</div>
</div>
</aside>
<!-- Main Content Area -->
<main class="flex-1 ml-64 p-8">
<!-- Header Section -->
<div class="flex flex-col gap-1 mb-8">
<div class="flex items-center gap-2 text-sm text-slate-500 mb-2">
<span>GAIS</span>
<span class="material-symbols-outlined text-xs">chevron_right</span>
<span class="text-primary font-medium">GA Checklist</span>
</div>
<h2 class="text-3xl font-black text-slate-900 dark:text-white tracking-tight">GA Operational Checklist Status</h2>
<p class="text-slate-500 mt-1">Monitoring facility management activities and operational readiness in real-time.</p>
</div>
<!-- Progress Card Section -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
<div class="lg:col-span-2 bg-white dark:bg-slate-900 rounded-xl p-6 shadow-sm border border-slate-200 dark:border-slate-800 flex items-center justify-between">
<div class="flex flex-col gap-2">
<h3 class="text-lg font-bold text-slate-900 dark:text-white">Today's GA Operational Progress</h3>
<p class="text-sm text-slate-500">Facility team has completed 17 of 20 scheduled tasks for today.</p>
<div class="mt-4 flex items-center gap-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400">
<span class="w-1.5 h-1.5 rounded-full bg-green-500 mr-1.5"></span> On Track
                            </span>
<span class="text-xs text-slate-400">Last updated: Today, 11:30 AM</span>
</div>
</div>
<div class="relative flex items-center justify-center">
<svg class="w-32 h-32 transform -rotate-90">
<circle class="text-slate-100 dark:text-slate-800" cx="64" cy="64" fill="transparent" r="58" stroke="currentColor" stroke-width="8"></circle>
<circle class="text-primary" cx="64" cy="64" fill="transparent" r="58" stroke="currentColor" stroke-dasharray="364.4" stroke-dashoffset="54.66" stroke-width="8"></circle>
</svg>
<div class="absolute flex flex-col items-center">
<span class="text-2xl font-black text-slate-900 dark:text-white">85%</span>
</div>
</div>
</div>
<div class="bg-primary rounded-xl p-6 shadow-lg shadow-primary/20 flex flex-col justify-between text-white relative overflow-hidden">
<div class="relative z-10">
<h3 class="text-lg font-bold opacity-90">Quick Summary</h3>
<div class="mt-4 space-y-3">
<div class="flex justify-between text-sm">
<span>Completed Tasks</span>
<span class="font-bold">17</span>
</div>
<div class="flex justify-between text-sm">
<span>Pending Tasks</span>
<span class="font-bold">3</span>
</div>
<div class="w-full bg-white/20 rounded-full h-1 mt-2">
<div class="bg-white h-1 rounded-full w-[85%]"></div>
</div>
</div>
</div>
<span class="material-symbols-outlined absolute -bottom-4 -right-4 text-9xl opacity-10">fact_check</span>
</div>
</div>
<!-- Main Table Section -->
<div class="bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 overflow-hidden">
<!-- Tabs -->
<div class="flex border-b border-slate-200 dark:border-slate-800 px-6">
<button class="px-6 py-4 border-b-2 border-primary text-primary font-bold text-sm">Daily</button>
<button class="px-6 py-4 border-b-2 border-transparent text-slate-500 font-medium text-sm hover:text-slate-700 dark:hover:text-slate-300">Weekly</button>
<button class="px-6 py-4 border-b-2 border-transparent text-slate-500 font-medium text-sm hover:text-slate-700 dark:hover:text-slate-300">Monthly</button>
</div>
<!-- Table -->

<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-slate-50 dark:bg-slate-800/50">
<th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Activity Name</th>
<th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Frequency</th>
<th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Status</th>
<th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Completion Date</th>
<th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">GA Team Notes</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-800">
@forelse($checklists as $item)
    @php
        $activity = '-';
        $category = '-';
        $location = '-';
        $sop = '-';

        if (is_string($item->notes)) {
            $lines = preg_split("/\r\n|\n|\r/", $item->notes);

            foreach ($lines as $line) {
                $line = trim($line);
                if (str_starts_with($line, 'Activity:')) $activity = trim(str_replace('Activity:', '', $line));
                if (str_starts_with($line, 'Category:')) $category = trim(str_replace('Category:', '', $line));
                if (str_starts_with($line, 'Location:')) $location = trim(str_replace('Location:', '', $line));
                if (str_starts_with($line, 'SOP:')) $sop = trim(str_replace('SOP:', '', $line));
            }
        }

        $isDone = strtolower($item->status) === 'done';
    @endphp

    <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
        <td class="px-6 py-5">
            <p class="font-semibold text-slate-900 dark:text-slate-100">{{ $activity }}</p>
            <p class="text-xs text-slate-400 mt-0.5">
                Category: {{ $category }} • Location: {{ $location }}
            </p>
        </td>

        <td class="px-6 py-5">
            <span class="text-sm text-slate-600 dark:text-slate-400 font-medium">{{ $item->type }}</span>
        </td>

        <td class="px-6 py-5">
            @if($isDone)
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-green-100 text-green-700 dark:bg-green-900/40 dark:text-green-400">
                    Selesai
                </span>
            @else
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-amber-100 text-amber-700 dark:bg-amber-900/40 dark:text-amber-400">
                    Pending
                </span>
            @endif
        </td>

        <td class="px-6 py-5">
            @if($isDone)
                <p class="text-sm text-slate-600 dark:text-slate-400">
                    {{ \Carbon\Carbon::parse($item->updated_at)->format('d M Y') }}
                </p>
                <p class="text-xs text-slate-400">
                    {{ \Carbon\Carbon::parse($item->updated_at)->format('H:i') }}
                </p>
            @else
                <span class="text-slate-400 text-sm">—</span>
            @endif
        </td>

        <td class="px-6 py-5">
            <p class="text-sm text-slate-500 italic">{{ $sop }}</p>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="5" class="text-center py-8 text-slate-500">
            Tidak ada data checklist.
        </td>
    </tr>
@endforelse
</tbody>
</table>
</div>
<!-- Footer / Pagination placeholder -->
<div class="px-6 py-4 bg-slate-50 dark:bg-slate-800/50 flex justify-between items-center">
<p class="text-xs text-slate-500 font-medium">Showing 5 of 20 daily activities</p>
<div class="flex gap-2">
<button class="p-1.5 rounded bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-slate-400 hover:text-primary transition-colors disabled:opacity-50" disabled="">
<span class="material-symbols-outlined text-sm">chevron_left</span>
</button>
<button class="p-1.5 rounded bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-slate-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined text-sm">chevron_right</span>
</button>
</div>
</div>
</div>
<!-- Footer Note -->
<div class="mt-6 flex items-start gap-3 p-4 bg-primary/5 rounded-lg border border-primary/10">
<span class="material-symbols-outlined text-primary text-xl">info</span>
<p class="text-sm text-slate-600 dark:text-slate-400">
<strong>Note:</strong> This dashboard is for monitoring purposes only. If you notice any operational issues that are marked as "Selesai" but require attention, please submit a service request via the <a class="text-primary hover:underline font-semibold" href="#">My Requests</a> module.
                </p>
</div>
</main>
</div>
</body></html>