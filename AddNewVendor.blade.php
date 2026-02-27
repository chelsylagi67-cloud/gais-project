<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#0d7ff2",
                        "background-light": "#f1f5f9",
                        "background-dark": "#0f172a",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
<title>Add New Vendor - Bosowa GAIS</title>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 min-h-screen flex items-center justify-center p-4 md:p-8">
<div class="w-full max-w-2xl">
<div class="mb-6">
<button class="flex items-center gap-2 text-slate-500 hover:text-primary transition-colors font-medium text-sm group">
<span class="material-symbols-outlined text-lg group-hover:-translate-x-1 transition-transform">arrow_back</span>
                Back to Dashboard
            </button>
</div>
<div class="bg-white dark:bg-slate-900 rounded-2xl shadow-xl border border-slate-200 dark:border-slate-800 overflow-hidden">
<div class="px-8 pt-8 pb-6 text-center border-b border-slate-100 dark:border-slate-800">
<div class="flex flex-col items-center gap-4">
<div class="bg-primary flex items-center justify-center rounded-xl size-14 text-white shadow-lg shadow-primary/20">
<span class="material-symbols-outlined text-3xl">corporate_fare</span>
</div>
<div>
<h1 class="text-2xl font-bold text-slate-900 dark:text-slate-50">Add New Vendor</h1>
<p class="text-slate-500 dark:text-slate-400 text-sm mt-1">Bosowa General Affair Information System</p>
</div>
</div>
</div>
<div class="p-8">
  <form class="space-y-6" method="POST" action="{{ route('vendors.store') }}">
    @csrf

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <div class="md:col-span-2">
        <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">
          Vendor Name <span class="text-red-500">*</span>
        </label>
        <input name="name"
          class="w-full rounded-lg border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:ring-primary focus:border-primary text-sm p-3.5"
          placeholder="e.g., PT Bosowa Corporation" type="text" required />
      </div>

      <div>
        <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">Vendor Type</label>
        <select name="vendor_type"
          class="w-full rounded-lg border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:ring-primary focus:border-primary text-sm p-3.5">
          <option value="">Select Category</option>
          <option value="it_hardware">IT Hardware</option>
          <option value="office_supplies">Office Supplies</option>
          <option value="maintenance">Maintenance &amp; Repair</option>
          <option value="logistics">Logistics</option>
          <option value="catering">Catering</option>
        </select>
      </div>

      <div>
        <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">Contact Person</label>
        <input name="contact_person"
          class="w-full rounded-lg border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:ring-primary focus:border-primary text-sm p-3.5"
          placeholder="Full Name" type="text" />
      </div>

      <div>
        <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">Phone Number</label>
        <div class="relative">
          <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
            <span class="material-symbols-outlined text-slate-400 text-lg">call</span>
          </div>
          <input name="phone"
            class="w-full rounded-lg border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:ring-primary focus:border-primary text-sm pl-11 p-3.5"
            placeholder="+62..." type="tel" />
        </div>
      </div>

      <div>
        <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">Email Address</label>
        <div class="relative">
          <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
            <span class="material-symbols-outlined text-slate-400 text-lg">mail</span>
          </div>
          <input name="email"
            class="w-full rounded-lg border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:ring-primary focus:border-primary text-sm pl-11 p-3.5"
            placeholder="vendor@email.com" type="email" />
        </div>
      </div>

      <div class="md:col-span-2">
        <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">Notes / Catatan</label>
        <textarea name="notes"
          class="w-full rounded-lg border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:ring-primary focus:border-primary text-sm p-3.5 resize-none"
          placeholder="Additional details, contract terms, or special requirements..." rows="4"></textarea>
      </div>
    </div>

    <div class="flex flex-col-reverse sm:flex-row items-center gap-4 mt-8 pt-6 border-t border-slate-100 dark:border-slate-800">
      <a href="{{ route('vendors.index') }}"
        class="w-full sm:flex-1 px-6 py-3.5 rounded-xl text-sm font-semibold text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors border border-slate-200 dark:border-slate-700 text-center">
        Cancel
      </a>

      <button class="w-full sm:flex-[2] px-6 py-3.5 rounded-xl text-sm font-bold bg-primary text-white hover:bg-primary/90 shadow-lg shadow-primary/20 transition-all flex items-center justify-center gap-2" type="submit">
        <span class="material-symbols-outlined text-xl">check_circle</span>
        Save Vendor
      </button>
    </div>
  </form>
</div>
<div class="bg-slate-50 dark:bg-slate-800/50 px-8 py-4 flex justify-center border-t border-slate-100 dark:border-slate-800">
<p class="text-[10px] uppercase tracking-widest text-slate-400 font-bold">Official Bosowa Corporate System</p>
</div>
</div>
<p class="text-center mt-8 text-slate-500 text-xs">
            © 2024 Bosowa Group. All rights reserved. 
            <br class="sm:hidden"/>
<span class="hidden sm:inline">|</span> 
            Support: it.gais@bosowa.com
        </p>
</div>

</body></html>