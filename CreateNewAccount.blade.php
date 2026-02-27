<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Admin: Create New User Account - Bosowa GAIS</title>
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100">
<div class="flex h-screen overflow-hidden">
<!-- Side Navigation -->
<aside class="w-72 flex flex-col bg-white dark:bg-slate-900 border-r border-slate-200 dark:border-slate-800">
<div class="p-6 flex flex-col h-full">
<!-- Brand -->
<div class="flex items-center gap-3 mb-10">
<div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-white">
<span class="material-symbols-outlined">corporate_fare</span>
</div>
<div class="flex flex-col">
<h1 class="text-slate-900 dark:text-white text-base font-bold leading-none">Bosowa GAIS</h1>
<p class="text-slate-500 dark:text-slate-400 text-xs font-medium">General Affair System</p>
</div>
</div>
<!-- Nav Links -->
<nav class="flex-1 space-y-1">
<a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined">dashboard</span>
<span class="text-sm font-medium">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 bg-primary/10 text-primary rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined">group</span>
<span class="text-sm font-medium">User Management</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined">content_copy</span>
<span class="text-sm font-medium">Asset Requests</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined">inventory_2</span>
<span class="text-sm font-medium">Inventory</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined">bar_chart</span>
<span class="text-sm font-medium">Reports</span>
</a>
</nav><form action="#" class="p-8 space-y-6">
<!-- Logout -->
<div class="pt-6 border-t border-slate-200 dark:border-slate-800">
<button class="w-full flex items-center justify-center gap-2 px-4 py-2.5 bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 rounded-lg text-sm font-bold hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">
<span class="material-symbols-outlined text-lg">logout</span>
<span>Logout</span>
</button>
</div>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 flex flex-col overflow-y-auto">
<!-- Header -->
<header class="h-16 flex items-center justify-between px-8 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 sticky top-0 z-10">
<div class="flex items-center gap-4">
<h2 class="text-lg font-bold text-slate-900 dark:text-white">Admin Portal</h2>
</div>
<div class="flex items-center gap-6">
<div class="flex items-center gap-6 mr-2">
<a class="text-sm font-medium text-slate-600 dark:text-slate-400 hover:text-primary" href="#">Settings</a>
<a class="text-sm font-medium text-slate-600 dark:text-slate-400 hover:text-primary" href="#">Profile</a>
</div>
<div class="h-8 w-[1px] bg-slate-200 dark:bg-slate-700"></div>
<div class="flex items-center gap-3">
<div class="text-right">
<p class="text-xs font-bold text-slate-900 dark:text-white">System Admin</p>
<p class="text-[10px] text-slate-500">Super Administrator</p>
</div>
<img alt="Admin Profile" class="w-10 h-10 rounded-full object-cover border-2 border-primary/20" data-alt="Professional profile headshot of a system administrator" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA8ryk5jrUPY6OEmbDOj43qEvlsqa9pclBQR7gfrxsPbI-ql0CXJ7TVm7TEYyW0CDtE5VZmXFK5p3CVPM2LGGV5FJcgXO5zTzdBGnEz5k8pFfvoImu_i326APPtNJumHDBJaIO3oaMgsfMzWz7CW13EO6W49w8wGu2mhHYessRLSPegRvzM34LB2t6YA1CAnJtcjIRhxu3cHVwh5ZovJpz9dBM_omo116k4-AT-Ef0DUp2x4HDMCRzMwFIyK6n8BD_jjGwTWuFkymY"/>
</div>
</div>
</header>
<!-- Page Content -->
<div class="p-8 max-w-4xl mx-auto w-full">
<!-- Breadcrumbs -->
<nav aria-label="Breadcrumb" class="flex mb-6 text-sm font-medium text-slate-500">
<ol class="flex items-center space-x-2">
<li><a class="hover:text-primary" href="#">User Management</a></li>
<li class="flex items-center space-x-2">
<span class="material-symbols-outlined text-sm">chevron_right</span>
<span class="text-slate-900 dark:text-slate-100">Add New Account</span>
</li>
</ol>
</nav>
<!-- Page Title -->
<div class="mb-8">
<h1 class="text-3xl font-black text-slate-900 dark:text-white tracking-tight">Create New User Account</h1>
<p class="text-slate-500 dark:text-slate-400 mt-2">Set up a new identity and assign specific access roles for the Bosowa GAIS platform.</p>
</div>
<!-- Form Card -->
<div class="bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 overflow-hidden">
<div class="p-1.5 bg-primary/5 dark:bg-primary/10 border-b border-slate-200 dark:border-slate-800">
<div class="flex items-center gap-2 px-4 py-2 text-primary">
<span class="material-symbols-outlined text-xl">person_add</span>
<span class="text-sm font-bold uppercase tracking-wider">Account Information</span>
</div>
</div>
<form method="POST" action="{{ route('account-management.store') }}" class="p-8 space-y-6">
    @csrf
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<!-- Full Name -->
<div class="flex flex-col gap-2">
<label class="text-sm font-bold text-slate-700 dark:text-slate-300" for="fullname">Full Name</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-lg">person</span>
<input class="w-full pl-10 pr-4 py-3 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all outline-none text-slate-900 dark:text-white" id="fullname" placeholder="e.g. Ahmad Bosowa" type="text"/>
</div>
</div>
<!-- Email Address -->
<div class="flex flex-col gap-2">
<label class="text-sm font-bold text-slate-700 dark:text-slate-300" for="email">Email Address</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-lg">mail</span>
<input class="w-full pl-10 pr-4 py-3 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all outline-none text-slate-900 dark:text-white" id="email" placeholder="ahmad@bosowa.co.id" type="email"/>
</div>
</div>
<!-- Password -->
<div class="flex flex-col gap-2">
<label class="text-sm font-bold text-slate-700 dark:text-slate-300" for="password">Default Password</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-lg">lock</span>
<input class="w-full pl-10 pr-12 py-3 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all outline-none text-slate-900 dark:text-white" id="password" placeholder="••••••••" type="password"/>
<button class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600 dark:hover:text-slate-300" type="button">
<span class="material-symbols-outlined text-lg">visibility</span>
</button>
</div>
<p class="text-[10px] text-slate-500 mt-1">Min. 8 characters with a mix of letters and numbers.</p>
</div>
<!-- Role Selection -->
<div class="flex flex-col gap-2">
<label class="text-sm font-bold text-slate-700 dark:text-slate-300" for="role">Access Role</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-lg">admin_panel_settings</span>
<select class="w-full pl-10 pr-4 py-3 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all outline-none appearance-none text-slate-900 dark:text-white" id="role">
<option disabled="" selected="" value="">Select a role</option>
<option value="admin">Admin GA</option>
<option value="user">Employee/User</option>
</select>
<span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none">expand_more</span>
</div>
</div>
</div>
<!-- Info Alert -->
<div class="bg-blue-50 dark:bg-primary/5 border-l-4 border-primary p-4 rounded flex gap-3 mt-4">
<span class="material-symbols-outlined text-primary">info</span>
<div class="text-sm text-slate-700 dark:text-slate-300">
<p class="font-bold">Security Tip</p>
<p>The new user will be prompted to change their password upon their first successful login.</p>
</div>
</div>
<!-- Action Buttons -->
<div class="flex items-center justify-end gap-4 pt-8 border-t border-slate-100 dark:border-slate-800">
<button class="px-6 py-2.5 rounded-lg text-sm font-bold text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" type="button">
                                Cancel
                            </button>
<button class="px-8 py-2.5 bg-primary text-white rounded-lg text-sm font-bold hover:bg-primary/90 shadow-lg shadow-primary/20 transition-all flex items-center gap-2" type="submit">
<span class="material-symbols-outlined text-sm">check_circle</span>
                                Create Account
                            </button>
</div>
</form>
</div>
<!-- Secondary Graphics / Summary Info -->
<div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 flex items-center gap-4">
<div class="w-12 h-12 rounded-lg bg-green-100 dark:bg-green-900/30 text-green-600 flex items-center justify-center">
<span class="material-symbols-outlined">how_to_reg</span>
</div>
<div>
<p class="text-xs text-slate-500 font-medium">Active Users</p>
<p class="text-xl font-bold text-slate-900 dark:text-white">1,248</p>
</div>
</div>
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 flex items-center gap-4">
<div class="w-12 h-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center">
<span class="material-symbols-outlined">security</span>
</div>
<div>
<p class="text-xs text-slate-500 font-medium">Total Admins</p>
<p class="text-xl font-bold text-slate-900 dark:text-white">12</p>
</div>
</div>
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 flex items-center gap-4">
<div class="w-12 h-12 rounded-lg bg-amber-100 dark:bg-amber-900/30 text-amber-600 flex items-center justify-center">
<span class="material-symbols-outlined">history</span>
</div>
<div>
<p class="text-xs text-slate-500 font-medium">Last Login</p>
<p class="text-sm font-bold text-slate-900 dark:text-white">2 mins ago</p>
</div>
</div>
</div>
</div>
<!-- Footer -->
<footer class="mt-auto py-6 px-8 border-t border-slate-200 dark:border-slate-800 text-center">
<p class="text-xs text-slate-500">© 2024 Bosowa GAIS. All rights reserved. Secured General Affair Information System.</p>
</footer>
</main>
</div>
</body></html>