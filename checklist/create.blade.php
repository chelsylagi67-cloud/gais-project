<!DOCTYPE html>
<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Admin: Add New Checklist Activity | Bosowa GAIS</title>
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
<style type="text/tailwindcss">
        body { font-family: 'Inter', sans-serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        @layer base {
            input[type="text"], input[type="date"], select, textarea {
                @apply bg-white dark:bg-slate-900 border-slate-200 dark:border-slate-700 rounded-lg text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all;
            }
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 antialiased">
<div class="flex min-h-screen">
<aside class="w-64 bg-white dark:bg-slate-900 border-r border-slate-200 dark:border-slate-800 flex flex-col shrink-0 sticky top-0 h-screen">
<div class="p-6 flex items-center gap-3">
<div class="size-10 bg-primary rounded-lg flex items-center justify-center text-white font-bold text-xl">B</div>
<div>
<h1 class="text-slate-900 dark:text-white text-base font-bold leading-tight">Bosowa GAIS</h1>
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
<header class="px-8 pt-8 pb-4">
<nav class="flex text-sm text-slate-500 dark:text-slate-400 gap-2 mb-4">
<a class="hover:text-primary" href="#">Home</a>
<span>/</span>
<a class="hover:text-primary" href="#">GAIS</a>
<span>/</span>
<a class="hover:text-primary" href="#">Checklists</a>
<span>/</span>
<span class="text-slate-900 dark:text-slate-100 font-medium">Add New Activity</span>
</nav>
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
<div>
<h2 class="text-3xl font-black text-slate-900 dark:text-white tracking-tight">Add New Checklist Activity</h2>
<p class="text-slate-500 dark:text-slate-400 mt-1">Populate the master list of tasks for operational management.</p>
</div>
</div>
</header>
<section class="px-8 py-4 flex justify-center">
<div class="w-full max-w-4xl bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
<div class="p-6 border-b border-slate-100 dark:border-slate-800 flex items-center gap-3 bg-slate-50/50 dark:bg-slate-800/20">
<span class="material-symbols-outlined text-primary">add_task</span>
<h3 class="font-bold text-slate-800 dark:text-slate-200">Activity Configuration</h3>
</div>
<form class="p-8" action="{{ route('checklist.store') }}" method="POST">
    @csrf

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="space-y-6">
            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400 mb-2" for="activity-name">
                    Activity Name
                </label>
               <input class="w-full px-4 py-2.5" id="activity-name" name="activity_name" placeholder="e.g. AC Service" type="text"/>
            </div>

            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400 mb-2" for="frequency">
                    Frequency Type
                </label>
                <select class="w-full px-4 py-2.5" id="frequency" name="type">
                    <option disabled selected value="">Select Frequency</option>
                    <option value="Daily">Daily</option>
                    <option value="Weekly">Weekly</option>
                    <option value="Monthly">Monthly</option>
                </select>
            </div>

            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400 mb-2" for="category">
                    Category
                </label>
                <select class="w-full px-4 py-2.5" id="category" name="category">
                    <option disabled selected value="">Select Category</option>
                    <option value="HVAC">HVAC</option>
                    <option value="Security">Security</option>
                    <option value="Janitorial">Janitorial</option>
                    <option value="IT & Infrastructure">IT &amp; Infrastructure</option>
                    <option value="Safety & Compliance">Safety &amp; Compliance</option>
                </select>
            </div>
        </div>

        <div class="space-y-6">
            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400 mb-2" for="location">
                    Target Location
                </label>
                <select class="w-full px-4 py-2.5" id="location" name="location">
                    <option disabled selected value="">Select Location</option>
                    <option value="Headquarters">Headquarters</option>
                    <option value="Branch Office Makassar">Branch Office Makassar</option>
                    <option value="Plant Maros">Plant Maros</option>
                    <option value="Warehouse">Warehouse</option>
                </select>
            </div>

            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400 mb-2" for="description">
                    Detailed Description / SOP
                </label>
               <textarea class="w-full px-4 py-2.5 h-[132px] resize-none" id="description" name="description"
          placeholder="Specify steps or standard operating procedure for this task..."></textarea>
            </div>
        </div>
    </div>

    <div class="mt-10 pt-8 border-t border-slate-100 dark:border-slate-800 flex items-center justify-end gap-4">
        <a href="{{ route('checklist.index') }}"
           class="px-6 py-2.5 text-sm font-bold text-slate-500 hover:text-slate-700 dark:text-slate-400 dark:hover:text-slate-200 transition-colors">
            Cancel
        </a>

        <button class="flex items-center gap-2 px-8 py-2.5 bg-primary text-white font-bold text-sm rounded-lg hover:bg-blue-600 shadow-lg shadow-primary/20 transition-all"
                type="submit">
            <span class="material-symbols-outlined text-lg">save</span>
            Save Activity
        </button>
    </div>
</form>
</div>
</section>
<section class="px-8 py-4">
<div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="flex items-start gap-4 p-4 bg-blue-50/50 dark:bg-blue-900/10 border border-blue-100 dark:border-blue-900/30 rounded-lg">
<span class="material-symbols-outlined text-primary">info</span>
<div>
<h4 class="text-xs font-bold uppercase tracking-tight text-primary mb-1">Frequency Rule</h4>
<p class="text-[11px] text-slate-500 dark:text-slate-400 leading-relaxed">Daily tasks reset every midnight. Monthly tasks trigger on the 1st of each month.</p>
</div>
</div>
<div class="flex items-start gap-4 p-4 bg-orange-50/50 dark:bg-orange-900/10 border border-orange-100 dark:border-orange-900/30 rounded-lg">
<span class="material-symbols-outlined text-orange-500">assignment_late</span>
<div>
<h4 class="text-xs font-bold uppercase tracking-tight text-orange-600 mb-1">Validation</h4>
<p class="text-[11px] text-slate-500 dark:text-slate-400 leading-relaxed">Ensure the location is correctly mapped to allow onsite staff to see the activity.</p>
</div>
</div>
<div class="flex items-start gap-4 p-4 bg-green-50/50 dark:bg-green-900/10 border border-green-100 dark:border-green-900/30 rounded-lg">
<span class="material-symbols-outlined text-green-500">inventory</span>
<div>
<h4 class="text-xs font-bold uppercase tracking-tight text-green-600 mb-1">Master Data</h4>
<p class="text-[11px] text-slate-500 dark:text-slate-400 leading-relaxed">This activity will be added to the active operational checklists immediately.</p>
</div>
</div>
</div>
</section>
<footer class="mt-auto px-8 py-6 text-center">
<p class="text-xs text-slate-400">© 2023 Bosowa General Affair Information System (GAIS). All rights reserved.</p>
</footer>
</main>
</div>

</body></html>