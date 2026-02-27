<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Admin: Vendor Management List - Bosowa GAIS</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#0d7ff2",
                        "background-light": "#f5f7f8",
                        "background-dark": "#101922",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
<style>
        body { font-family: 'Inter', sans-serif; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100">
<div class="flex h-screen overflow-hidden">
<!-- Sidebar -->
<aside class="w-72 flex-shrink-0 bg-white dark:bg-slate-900 border-r border-slate-200 dark:border-slate-800 flex flex-col">
<div class="p-6">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-primary flex items-center justify-center text-white shadow-lg shadow-primary/20">
<span class="material-symbols-outlined text-2xl">business_center</span>
</div>
<div>
<h1 class="font-bold text-lg tracking-tight text-slate-900 dark:text-white">Bosowa GAIS</h1>
<p class="text-xs text-slate-500 dark:text-slate-400 font-medium">General Affair System</p>
</div>
</div>
</div>
<nav class="flex-1 px-4 space-y-1 overflow-y-auto">
<a class="flex items-center gap-3 px-3 py-2.5 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-lg transition-colors group" href="#">
<span class="material-symbols-outlined text-xl group-hover:text-primary">dashboard</span>
<span class="text-sm font-medium">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 bg-primary/10 text-primary rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined text-xl">storefront</span>
<span class="text-sm font-semibold">Vendor Management</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-lg transition-colors group" href="#">
<span class="material-symbols-outlined text-xl group-hover:text-primary">inventory_2</span>
<span class="text-sm font-medium">Assets</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-lg transition-colors group" href="#">
<span class="material-symbols-outlined text-xl group-hover:text-primary">shopping_cart</span>
<span class="text-sm font-medium">Procurement</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-lg transition-colors group" href="#">
<span class="material-symbols-outlined text-xl group-hover:text-primary">description</span>
<span class="text-sm font-medium">Reports</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-lg transition-colors group" href="#">
<span class="material-symbols-outlined text-xl group-hover:text-primary">settings</span>
<span class="text-sm font-medium">Settings</span>
</a>
</nav>
<div class="p-4 mt-auto border-t border-slate-200 dark:border-slate-800">
<div class="flex items-center gap-3 mb-4 px-2">
<div class="w-9 h-9 rounded-full bg-slate-200 dark:bg-slate-700 overflow-hidden">
<img alt="Admin Profile" data-alt="Portrait of a male corporate administrator" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC8k7wDS7Drt4Z5EXXMx0znZTJJDsYFYGzA9p0XqKdhbcyTymF4Eo5s-JhQagMhTuM-twDVeYYnXrZMW6EdoeNy7WQyQtcjXQpMBeBpZLn1p0vJG0GCFyQoRQHK4l-Tp1V4WU_uRb2VYKvZ-XEgRYgA9Hd9Yj6p860Z2UptrXmBLZnRXKOm1ZJzAv0c868ZRKHh0t348raevSMlkyToYpcPuXwXNuoV-9jTzZPFeqcpxrT1ami3IopFPahlo0Z7x-se89HmudKSYQg"/>
</div>
<div class="flex-1 overflow-hidden">
<p class="text-sm font-semibold truncate">Andi Pratama</p>
<p class="text-xs text-slate-500 truncate">Super Admin</p>
</div>
</div>
<button class="w-full flex items-center justify-center gap-2 px-4 py-2 text-sm font-semibold text-red-600 bg-red-50 dark:bg-red-900/20 hover:bg-red-100 dark:hover:bg-red-900/30 rounded-lg transition-colors">
<span class="material-symbols-outlined text-lg">logout</span>
                    Logout
                </button>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 flex flex-col overflow-hidden">
<!-- Header -->
<header class="h-16 flex items-center justify-between px-8 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 z-10">
<div class="flex items-center gap-4">
<h2 class="text-xl font-bold text-slate-800 dark:text-white">External Vendors</h2>
<span class="px-2.5 py-0.5 rounded-full bg-slate-100 dark:bg-slate-800 text-xs font-semibold text-slate-600 dark:text-slate-400"> {{ $vendors->total() }} Total</span>
</div>
<div class="flex items-center gap-4">
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xl">search</span>
<input class="pl-10 pr-4 py-2 w-72 bg-slate-50 dark:bg-slate-800 border-none rounded-lg text-sm focus:ring-2 focus:ring-primary/50 transition-all" placeholder="Search vendor name, category..." type="text"/>
</div>
<button class="p-2 text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-full transition-colors relative">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-1.5 right-1.5 w-2 h-2 bg-red-500 rounded-full border-2 border-white dark:border-slate-900"></span>
</button>
<a href="{{ route('vendors.create') }}"
   class="flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-lg text-sm font-bold shadow-md shadow-primary/25 hover:bg-primary/90 transition-all">
    <span class="material-symbols-outlined text-lg">add</span>
    Add New Vendor
</a>
</div>
</header>
<!-- Table Content Area -->
<div class="flex-1 overflow-auto p-8">
<!-- Filters -->
<div class="flex flex-wrap items-center gap-3 mb-6">
<button class="flex items-center gap-2 px-3 py-1.5 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg text-sm font-medium hover:bg-slate-50 transition-colors">
<span class="material-symbols-outlined text-lg">filter_list</span>
                        All Categories
                        <span class="material-symbols-outlined text-lg">expand_more</span>
</button>
<button class="flex items-center gap-2 px-3 py-1.5 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg text-sm font-medium hover:bg-slate-50 transition-colors">
                        Status: Active
                        <span class="material-symbols-outlined text-lg">expand_more</span>
</button>
<div class="h-6 w-px bg-slate-200 dark:bg-slate-700 mx-1"></div>
<span class="text-sm text-slate-500 font-medium">Filtered by:</span>
<div class="flex items-center gap-2 px-2 py-1 bg-primary/10 text-primary text-xs font-bold rounded">
                        ATK Supplier
                        <span class="material-symbols-outlined text-sm cursor-pointer">close</span>
</div>
</div>
<!-- Table Container -->
<div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-slate-50 dark:bg-slate-800/50 border-b border-slate-200 dark:border-slate-800">
<th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Vendor Name</th>
<th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Vendor Type</th>
<th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Contact Info</th>
<th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Catatan/Notes</th>
<th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider text-right">Actions</th>
</tr>
</thead>
<tbody>
@foreach ($vendors as $vendor)
<tr class="border-b border-slate-100 dark:border-slate-800">
    <td class="px-6 py-4">
        <div class="flex items-center gap-3">
            <div class="size-9 rounded-lg flex items-center justify-center font-bold text-xs bg-slate-100 text-slate-700">
                {{ strtoupper(substr($vendor->name,0,1)) }}{{ strtoupper(substr(str_replace(' ', '', $vendor->name),1,1)) }}
            </div>
            <div class="font-semibold text-slate-800 dark:text-slate-100">
                {{ $vendor->name }}
            </div>
        </div>
    </td>

    <td class="px-6 py-4">
        <span class="px-3 py-1 rounded-full text-xs font-semibold bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-200">
            {{ strtoupper(str_replace('_',' ', $vendor->vendor_type ?? '-')) }}
        </span>
    </td>

<td class="px-6 py-4 text-sm text-slate-600">
  <div class="flex flex-col">
    <span class="font-semibold">{{ $vendor->phone ?? '—' }}</span>
    <span class="text-xs text-slate-400">{{ $vendor->email ?? '' }}</span>
  </div>
</td>

    <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-300">
        {{ $vendor->notes ?? '—' }}
    </td>

    <td class="px-6 py-4">
        <div class="flex items-center justify-end gap-3">
            <a href="{{ route('vendors.show', $vendor->id) }}" 
   class="text-slate-500 hover:text-primary">
    <span class="material-symbols-outlined">visibility</span>
</a>
            <a href="#" class="text-slate-500 hover:text-primary">
                <span class="material-symbols-outlined">edit</span>
            </a>
          <form action="{{ route('vendors.destroy', $vendor->id) }}" method="POST"
      onsubmit="return confirm('Hapus vendor ini?')">
    @csrf
    @method('DELETE')
    <button type="submit" class="text-slate-500 hover:text-red-500">
        <span class="material-symbols-outlined">delete</span>
    </button>
</form>
        </div>
    </td>
</tr>
@endforeach
</tbody>
</table>

<div class="px-6 py-4 border-t border-slate-200 dark:border-slate-800">
    {{ $vendors->links() }}
</div>
</div>
</div>
</div>
</main>
</div>
</body></html>