<!DOCTYPE html>
<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Admin: GA Operational Checklist Management</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#137fec",
                        "accent-red": "#e73908",
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
        body { font-family: 'Inter', sans-serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .active-tab {
            border-bottom: 3px solid #137fec;
            color: #137fec;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 antialiased">
<div class="flex min-h-screen">
<aside class="w-64 bg-white dark:bg-slate-900 border-r border-slate-200 dark:border-slate-800 flex flex-col shrink-0 sticky top-0 h-screen">
<div class="p-6 flex items-center gap-3">
<img alt="Bosowa Logo" class="h-10 w-auto object-contain" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCGvlLHuRvbCptJsb2g_gG87uZWk-L3-h4Notg24YScj8T453lkSZ367GNQADlBjZUIjbEyCRcU7u_8ApVVlmwGsxUFUAlBnw8PpKH0cMjY16dn9Mr79bIqRX9H9ZWIsUhRC_3QitKGYAT9FNCWqmBms8EwLtDXRphuwlcLA3fE4h-gdWIIW4js8vFjDreIQyegZ2ijrmBM2S_6j-Y1d_BTzpZn2gxxmET_khSZixSeceGGLFo862-0dQSIasllxuBCGJGUpPajsxE"/>
<div>
<h1 class="text-slate-900 dark:text-white text-base font-bold leading-tight uppercase tracking-tight">Bosowa GAIS</h1>
<p class="text-slate-500 dark:text-slate-400 text-xs font-medium">General Affair System</p>
</div>
</div>
<nav class="flex-1 px-4 py-4 space-y-1">
<a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined">dashboard</span>
<span class="text-sm font-medium">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined">inventory_2</span>
<span class="text-sm font-medium">Assets</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 bg-primary/10 text-primary rounded-lg font-semibold" href="#">
<span class="material-symbols-outlined">fact_check</span>
<span class="text-sm">Checklists</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined">bar_chart</span>
<span class="text-sm font-medium">Reports</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined">build</span>
<span class="text-sm font-medium">Maintenance</span>
</a>
<div class="pt-4 pb-2 px-3 text-[10px] font-bold uppercase tracking-wider text-slate-400">Administration</div>
<a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined">group</span>
<span class="text-sm font-medium">User Access</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined">settings</span>
<span class="text-sm font-medium">Settings</span>
</a>
</nav>
<div class="p-4 border-t border-slate-200 dark:border-slate-800">
<button class="flex w-full items-center justify-center gap-2 px-4 py-2 bg-slate-100 dark:bg-slate-800 hover:bg-accent-red hover:text-white text-slate-700 dark:text-slate-300 text-sm font-bold rounded-lg transition-all">
<span class="material-symbols-outlined text-sm">logout</span>
<span>Logout</span>
</button>
</div>
</aside>
<main class="flex-1 flex flex-col overflow-x-hidden">
<header class="px-8 pt-8">
<nav class="flex text-sm text-slate-500 dark:text-slate-400 gap-2 mb-4">
<a class="hover:text-primary" href="#">Home</a>
<span>/</span>
<a class="hover:text-primary" href="#">GAIS</a>
<span>/</span>
<span class="text-slate-900 dark:text-slate-100 font-medium">Checklists</span>
</nav>
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
<div>
<h2 class="text-3xl font-black text-slate-900 dark:text-white tracking-tight uppercase">GA Operational Checklist Management</h2>
<p class="text-slate-500 dark:text-slate-400 mt-1">Monitor and execute routine operational tasks for Bosowa facilities.</p>
</div>
<div class="flex items-center gap-3">
<button class="flex items-center gap-2 px-4 py-2.5 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-200 font-bold text-sm rounded-lg hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors">
<span class="material-symbols-outlined text-lg">history</span>
                        History Log
                    </button>
<a href="{{ route('checklist.create') }}"
   class="flex items-center gap-2 px-5 py-2.5 bg-slate-100 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-900 dark:text-slate-100 font-bold text-sm rounded-lg hover:bg-slate-200 dark:hover:bg-slate-700 transition-all">
    <span class="material-symbols-outlined text-lg">add_circle</span>
    Add New Activity
</a>
<button class="flex items-center gap-2 px-6 py-2.5 bg-primary text-white font-bold text-sm rounded-lg hover:bg-blue-600 shadow-lg shadow-primary/20 transition-all">
<span class="material-symbols-outlined text-lg">save</span>
                        Save All Changes
                    </button>
</div>
</div>
</header>
<section class="px-8 py-6 grid grid-cols-1 md:grid-cols-3 gap-6">

  {{-- DAILY --}}
  <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
    <div class="flex justify-between items-start mb-4">
      <span class="text-slate-500 dark:text-slate-400 text-sm font-bold uppercase tracking-wider">
        Daily Progress
      </span>
    </div>

    <div class="flex items-baseline gap-3">
      <span class="text-5xl font-black text-slate-900 dark:text-white">
        {{ $dailyDone }}
      </span>
      <span class="text-sm font-semibold text-slate-400">
        sudah selesai
      </span>
    </div>

    <p class="text-xs text-slate-400 mt-3 flex items-center gap-1">
      <span class="material-symbols-outlined text-sm">check_circle</span>
      Checklist Daily selesai
    </p>
  </div>

  {{-- WEEKLY --}}
  <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
    <div class="flex justify-between items-start mb-4">
      <span class="text-slate-500 dark:text-slate-400 text-sm font-bold uppercase tracking-wider">
        Weekly Progress
      </span>
    </div>

    <div class="flex items-baseline gap-3">
      <span class="text-5xl font-black text-slate-900 dark:text-white">
        {{ $weeklyDone }}
      </span>
      <span class="text-sm font-semibold text-slate-400">
        sudah selesai
      </span>
    </div>

    <p class="text-xs text-slate-400 mt-3 flex items-center gap-1">
      <span class="material-symbols-outlined text-sm">check_circle</span>
      Checklist Weekly selesai
    </p>
  </div>

  {{-- MONTHLY --}}
  <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
    <div class="flex justify-between items-start mb-4">
      <span class="text-slate-500 dark:text-slate-400 text-sm font-bold uppercase tracking-wider">
        Monthly Progress
      </span>
    </div>

    <div class="flex items-baseline gap-3">
      <span class="text-5xl font-black text-slate-900 dark:text-white">
        {{ $monthlyDone }}
      </span>
      <span class="text-sm font-semibold text-slate-400">
        sudah selesai
      </span>
    </div>

    <p class="text-xs text-slate-400 mt-3 flex items-center gap-1">
      <span class="material-symbols-outlined text-sm">check_circle</span>
      Checklist Monthly selesai
    </p>
  </div>

</section>
<section class="px-8 pb-4">
<div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
<div class="flex border-b border-slate-200 dark:border-slate-800 px-6">

    <a href="{{ route('checklist.index', ['type' => 'Daily']) }}"
       class="px-6 py-4 text-sm font-bold flex items-center gap-2 {{ ($type ?? 'Daily') === 'Daily' ? 'active-tab' : 'text-slate-500 dark:text-slate-400 hover:text-primary' }}">
        <span class="material-symbols-outlined text-lg">today</span>
        Daily
    </a>

    <a href="{{ route('checklist.index', ['type' => 'Weekly']) }}"
       class="px-6 py-4 text-sm font-bold flex items-center gap-2 {{ ($type ?? 'Daily') === 'Weekly' ? 'active-tab' : 'text-slate-500 dark:text-slate-400 hover:text-primary' }}">
        <span class="material-symbols-outlined text-lg">calendar_view_week</span>
        Weekly
    </a>

    <a href="{{ route('checklist.index', ['type' => 'Monthly']) }}"
       class="px-6 py-4 text-sm font-bold flex items-center gap-2 {{ ($type ?? 'Daily') === 'Monthly' ? 'active-tab' : 'text-slate-500 dark:text-slate-400 hover:text-primary' }}">
        <span class="material-symbols-outlined text-lg">calendar_month</span>
        Monthly
    </a>

</div>
<div class="p-6 bg-slate-50/50 dark:bg-slate-800/20 border-b border-slate-200 dark:border-slate-800 flex flex-wrap gap-4 items-center justify-between">
<div class="flex gap-4 items-center">
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-lg">calendar_today</span>
<input class="pl-10 pr-4 py-2 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-lg text-sm font-medium focus:ring-2 focus:ring-primary/20 outline-none transition-all" type="date" value="2023-10-24"/>
</div>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-lg">filter_list</span>
<select class="pl-10 pr-8 py-2 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-lg text-sm font-medium focus:ring-2 focus:ring-primary/20 outline-none appearance-none cursor-pointer">
<option>All Locations</option>
<option>Headquarters</option>
<option>Branch Office Makassar</option>
<option>Plant Maros</option>
</select>
</div>
</div>
<div class="relative w-full max-w-xs">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-lg">search</span>
<input class="w-full pl-10 pr-4 py-2 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-lg text-sm focus:ring-2 focus:ring-primary/20 outline-none transition-all" placeholder="Search tasks..." type="text"/>
</div>
</div>
@if (session('success'))
    <div class="m-6 p-3 rounded-lg bg-green-50 text-green-700 border border-green-200">
        {{ session('success') }}
    </div>
@endif
<form id="bulkChecklistForm" action="{{ route('checklist.bulkUpdate') }}" method="POST">
    @csrf
    <input type="hidden" name="type" value="{{ $type ?? 'Daily' }}">

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
<thead>
<tr class="bg-slate-50 dark:bg-slate-800/50 text-slate-600 dark:text-slate-300 text-xs font-bold uppercase tracking-wider">
<th class="px-6 py-4 border-b border-slate-200 dark:border-slate-800">Status</th>
<th class="px-6 py-4 border-b border-slate-200 dark:border-slate-800">Task Name (Activity)</th>
<th class="px-6 py-4 border-b border-slate-200 dark:border-slate-800">Frequency</th>
<th class="px-6 py-4 border-b border-slate-200 dark:border-slate-800">Pic / Assigned</th>
<th class="px-6 py-4 border-b border-slate-200 dark:border-slate-800">Date/Time</th>
<th class="px-6 py-4 border-b border-slate-200 dark:border-slate-800 w-1/3">Notes / Catatan</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-800">
@forelse ($checklists as $item)
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
    {{-- STATUS --}}
<td class="px-6 py-4">
  <input
    type="checkbox"
    name="checked[]"
    value="{{ $item->id }}"
    class="size-5 rounded border-slate-300 text-primary focus:ring-primary cursor-pointer"
    {{ strtolower($item->status) === 'done' ? 'checked' : '' }}
>
</td>

    {{-- TASK NAME (ACTIVITY) --}}
    <td class="px-6 py-4">
        @php
            // Ambil "Activity: xxx" dari notes jika ada
            $task = $item->notes;
            if (is_string($task) && str_contains($task, 'Activity:')) {
                $lines = preg_split("/\r\n|\n|\r/", $task);
                $taskLine = collect($lines)->first(fn($l) => str_starts_with(trim($l), 'Activity:'));
                $task = $taskLine ? trim(str_replace('Activity:', '', $taskLine)) : $item->notes;
            }
        @endphp

        <p class="text-sm font-semibold text-slate-900 dark:text-white">
            {{ $task }}
        </p>
        <p class="text-xs text-slate-500">
            ID #{{ $item->id }}
        </p>
    </td>

    {{-- FREQUENCY --}}
    <td class="px-6 py-4">
        <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-bold uppercase
            {{ $item->type === 'Daily' ? 'bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-400' : '' }}
            {{ $item->type === 'Weekly' ? 'bg-purple-100 text-purple-700 dark:bg-purple-900/30 dark:text-purple-400' : '' }}
            {{ $item->type === 'Monthly' ? 'bg-orange-100 text-orange-700 dark:bg-orange-900/30 dark:text-orange-400' : '' }}
        ">
            {{ $item->type }}
        </span>
    </td>

    {{-- PIC / ASSIGNED (sementara pakai created_by) --}}
    <td class="px-6 py-4 text-xs font-medium text-slate-500">
        User #{{ $item->created_by }}
    </td>

    {{-- DATE/TIME --}}
    <td class="px-6 py-4 text-xs font-medium text-slate-500">
        {{ \Carbon\Carbon::parse($item->activity_time)->format('h:i A') }}
        <div class="text-[10px] text-slate-400">{{ $item->date }}</div>
    </td>

    {{-- NOTES --}}
<td class="px-6 py-4">
    <input
        class="w-full text-sm py-1.5 px-3 bg-transparent border border-transparent hover:border-slate-200 dark:hover:border-slate-700 focus:bg-white dark:focus:bg-slate-900 focus:border-primary rounded transition-all outline-none"
        type="text"
        name="items[{{ $item->id }}][notes]"
        value="{{ $item->notes }}"
    />
</td>
</tr>
@empty
<tr>
    <td colspan="6" class="px-6 py-8 text-center text-slate-500">
        Belum ada data checklist.
    </td>
</tr>
@endforelse
</tbody>
        </table>
        
    </div>

<div class="p-6 border-t border-slate-200 dark:border-slate-800 flex items-center justify-between">
<p class="text-sm text-slate-500 dark:text-slate-400 font-medium">Showing 6 operational tasks</p>
<div class="flex items-center gap-2">
<button class="size-8 flex items-center justify-center rounded border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800 disabled:opacity-50" disabled="">
<span class="material-symbols-outlined text-sm">chevron_left</span>
</button>
<span class="text-sm font-bold text-primary px-2">1</span>
<button class="size-8 flex items-center justify-center rounded border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800">
<span class="material-symbols-outlined text-sm">chevron_right</span>
</button>
</div>
</div>
</div>
</form>
</section>
<footer class="px-8 py-6 mt-auto">
<div class="bg-primary/5 dark:bg-primary/10 rounded-xl p-4 border border-primary/20 flex flex-col sm:flex-row items-center justify-between gap-4">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-2xl">info</span>
<p class="text-sm font-medium text-slate-700 dark:text-slate-300">
                        You have <span class="font-bold text-primary">3 unsaved changes</span> in the current view.
                    </p>
</div>
<div class="flex gap-3">
<button class="px-4 py-2 text-sm font-bold text-slate-500 hover:text-slate-700 dark:hover:text-slate-200">Discard</button>
<a href="{{ route('checklist.create') }}"
   class="flex items-center gap-2 px-5 py-2.5 bg-slate-100 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-900 dark:text-slate-100 font-bold text-sm rounded-lg hover:bg-slate-200 dark:hover:bg-slate-700 transition-all">
    <span class="material-symbols-outlined text-lg">add_circle</span>
    Add New Activity
</a>
<button
    type="submit"
    form="bulkChecklistForm"
    class="px-6 py-2 bg-primary text-white font-bold text-sm rounded-lg hover:bg-blue-600 transition-colors shadow-lg shadow-primary/20">
    Commit Changes
</button>
</div>
</div>
</footer>
</main>
</div>

</body></html>