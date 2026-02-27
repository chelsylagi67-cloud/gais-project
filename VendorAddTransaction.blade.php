<!DOCTYPE html>
<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Vendor Details &amp; Transactions | Bosowa GAIS</title>
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
                        "background-light": "#f5f7f8",
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-display relative overflow-hidden">
<div class="fixed inset-0 z-50 flex items-center justify-center bg-slate-900/60 backdrop-blur-sm">
<div class="bg-white dark:bg-slate-900 w-full max-w-lg rounded-xl shadow-2xl border border-slate-200 dark:border-slate-800 overflow-hidden mx-4">
<div class="px-6 py-4 border-b border-slate-100 dark:border-slate-800 flex items-center justify-between">
<h3 class="text-lg font-bold text-slate-900 dark:text-white">Add Transaction for PT. Jaya Abadi</h3>
<button class="text-slate-400 hover:text-slate-600 dark:hover:text-slate-200">
<span class="material-symbols-outlined">close</span>
</button>
</div>
<form action="{{ route('vendor.storeTransaction', $vendor->id) }}" method="POST">
  @csrf

  <div class="p-6 space-y-5">
    <div class="grid grid-cols-2 gap-4">
      <div class="flex flex-col gap-1.5">
        <label class="text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-tight">Date</label>
        <input
          name="transaction_date"
          class="w-full border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 rounded-lg text-sm focus:ring-primary focus:border-primary"
          type="date"
          value="{{ now()->toDateString() }}"
        />
      </div>

      <div class="flex flex-col gap-1.5">
        <label class="text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-tight">Status</label>
        <select
          name="status"
          class="w-full border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 rounded-lg text-sm focus:ring-primary focus:border-primary"
        >
          <option value="Pending">Pending</option>
          <option value="Paid">Paid</option>
        </select>
      </div>
    </div>

    <div class="flex flex-col gap-1.5">
      <label class="text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-tight">Item / Service Name</label>
      <input
        name="description"
        class="w-full border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 rounded-lg text-sm focus:ring-primary focus:border-primary"
        placeholder="e.g. Office Supplies"
        type="text"
      />
    </div>

    <div class="flex flex-col gap-1.5">
      <label class="text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-tight">Amount (IDR)</label>
      <div class="relative">
        <span class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-sm font-medium">Rp</span>
        <input
          name="amount"
          class="w-full pl-10 border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 rounded-lg text-sm focus:ring-primary focus:border-primary"
          placeholder="0"
          type="number"
        />
      </div>
    </div>

    <div class="flex flex-col gap-1.5">
      <label class="text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-tight">Notes / Project Name</label>
      <textarea
        name="notes"
        class="w-full border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 rounded-lg text-sm focus:ring-primary focus:border-primary"
        placeholder="Describe the purpose of this transaction..."
        rows="3"
      ></textarea>
    </div>
  </div>

  <div class="px-6 py-4 bg-slate-50 dark:bg-slate-800/50 border-t border-slate-100 dark:border-slate-800 flex justify-end gap-3">
    <button type="button" class="px-4 py-2 text-sm font-semibold text-slate-600 dark:text-slate-300 hover:text-slate-800 dark:hover:text-white transition-colors">
      Cancel
    </button>

    <button type="submit" class="px-6 py-2 bg-primary text-white text-sm font-bold rounded-lg shadow-sm hover:opacity-90 transition-opacity">
      Record Transaction
    </button>
  </div>
</form>
</div>  <!-- tutup modal box -->
</div> 

<div class="flex min-h-screen">
<aside class="w-64 border-r border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 flex flex-col fixed h-full">
<div class="p-6 flex flex-col gap-4">
<div class="flex items-center gap-3">
<div class="bg-primary size-10 rounded-lg flex items-center justify-center text-white">
<span class="material-symbols-outlined">corporate_fare</span>
</div>
<div class="flex flex-col">
<h1 class="text-slate-900 dark:text-white text-base font-bold leading-none">Bosowa GAIS</h1>
<p class="text-slate-500 dark:text-slate-400 text-xs mt-1">General Affairs System</p>
</div>
</div>
<nav class="flex flex-col gap-1 mt-6">
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">dashboard</span>
<span class="text-sm font-medium">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-primary/10 text-primary" href="#">
<span class="material-symbols-outlined text-[20px]">storefront</span>
<span class="text-sm font-medium">Vendors</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">receipt_long</span>
<span class="text-sm font-medium">Transactions</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">shopping_cart</span>
<span class="text-sm font-medium">Procurement</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors mt-auto" href="#">
<span class="material-symbols-outlined text-[20px]">settings</span>
<span class="text-sm font-medium">Settings</span>
</a>
</nav>
</div>
</aside>
<main class="flex-1 ml-64 p-8">
<div class="flex items-center gap-2 mb-6 text-sm">
<a class="text-slate-500 hover:text-primary transition-colors" href="#">Vendors</a>
<span class="text-slate-400 material-symbols-outlined text-xs">chevron_right</span>
<span class="text-slate-900 dark:text-white font-medium">Vendor Details</span>
</div>
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
<div class="flex items-center gap-5">
<div class="size-20 bg-slate-200 dark:bg-slate-800 rounded-xl overflow-hidden flex items-center justify-center">
<img alt="Company Logo" class="object-cover size-full" data-alt="Corporate building logo of PT Jaya Abadi" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBQgaTOJl5R2cwrdnNsYe2YAKw6yV3seJHcC2ds0RoL7b-n8eSGvAB_cN0jGMYNRjqPjzDqcn5IrJfRDi8feT2z7keYcbk-5_lPmdabdInB1VThl8l4Sc4RWj0_hocVJGfYA7UbHjimKI_EaC5QP2Dv7ZQPDGp-qRbSGhFCIGxToc2-ZXCk8j25AFcD2CwSrvUUKaLYcVCs1IKrKPxOfJuUO-ZwzNS1BcKhkUfdgiB6ZuBA889RHco_PcKsLPaUP81Dz4ozMvOOIWk"/>
</div>
<div>
<div class="flex items-center gap-3">
<h2 class="text-3xl font-bold text-slate-900 dark:text-white">PT. Jaya Abadi</h2>
<span class="px-2 py-1 rounded bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 text-xs font-bold uppercase tracking-wider">Active</span>
</div>
<p class="text-slate-500 dark:text-slate-400 mt-1 flex items-center gap-2">
<span class="material-symbols-outlined text-sm">category</span>
                        General Supplier &amp; Logistics
                        <span class="mx-2 text-slate-300">•</span>
                        Partner since 2021
                    </p>
</div>
</div>
<div class="flex gap-3">
<button class="flex items-center gap-2 px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-lg text-slate-700 dark:text-slate-300 font-medium hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
<span class="material-symbols-outlined text-lg">edit</span>
                    Edit Profile
                </button>
<button class="flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-lg font-medium hover:opacity-90 transition-opacity shadow-sm">
<span class="material-symbols-outlined text-lg">add</span>
                    Add Transaction
                </button>
</div>
</div>
<div class="grid grid-cols-12 gap-8">
<div class="col-span-12 lg:col-span-8 space-y-8">
<div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 overflow-hidden shadow-sm">
<div class="px-6 py-5 border-b border-slate-200 dark:border-slate-800 flex justify-between items-center">
<h3 class="text-lg font-bold text-slate-900 dark:text-white">Manual Transactions</h3>
<div class="relative">
<span class="absolute left-3 top-1/2 -translate-y-1/2 material-symbols-outlined text-slate-400 text-sm">search</span>
<input class="pl-9 pr-4 py-1.5 text-sm bg-slate-50 dark:bg-slate-800 border-none rounded-lg w-64 focus:ring-2 focus:ring-primary/50" placeholder="Search transactions..." type="text"/>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left">
<thead class="bg-slate-50 dark:bg-slate-800/50 text-slate-500 dark:text-slate-400 text-xs font-semibold uppercase tracking-wider">
<tr>
<th class="px-6 py-4">Date</th>
<th class="px-6 py-4">Item / Service</th>
<th class="px-6 py-4">Amount</th>
<th class="px-6 py-4">Status</th>
<th class="px-6 py-4">Notes</th>
<th class="px-6 py-4"></th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-800 text-sm">
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4 whitespace-nowrap text-slate-600 dark:text-slate-400">Oct 24, 2023</td>
<td class="px-6 py-4 font-medium text-slate-900 dark:text-white">Office Stationery Pack</td>
<td class="px-6 py-4 font-semibold text-slate-900 dark:text-white">Rp 2.450.000</td>
<td class="px-6 py-4">
<span class="px-2 py-1 rounded-full bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-400 text-[11px] font-bold uppercase">Paid</span>
</td>
<td class="px-6 py-4 text-slate-500 dark:text-slate-400 max-w-xs truncate">Monthly restock for HQ South Wing</td>
<td class="px-6 py-4 text-right">
<button class="text-slate-400 hover:text-primary transition-colors"><span class="material-symbols-outlined text-lg">more_vert</span></button>
</td>
</tr>
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4 whitespace-nowrap text-slate-600 dark:text-slate-400">Oct 18, 2023</td>
<td class="px-6 py-4 font-medium text-slate-900 dark:text-white">AC Maintenance Unit 4B</td>
<td class="px-6 py-4 font-semibold text-slate-900 dark:text-white">Rp 850.000</td>
<td class="px-6 py-4">
<span class="px-2 py-1 rounded-full bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-400 text-[11px] font-bold uppercase">Pending</span>
</td>
<td class="px-6 py-4 text-slate-500 dark:text-slate-400 max-w-xs truncate">Urgent repair requested by Finance dept</td>
<td class="px-6 py-4 text-right">
<button class="text-slate-400 hover:text-primary transition-colors"><span class="material-symbols-outlined text-lg">more_vert</span></button>
</td>
</tr>
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4 whitespace-nowrap text-slate-600 dark:text-slate-400">Oct 05, 2023</td>
<td class="px-6 py-4 font-medium text-slate-900 dark:text-white">Drinking Water Refill (50 Gal)</td>
<td class="px-6 py-4 font-semibold text-slate-900 dark:text-white">Rp 1.100.000</td>
<td class="px-6 py-4">
<span class="px-2 py-1 rounded-full bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-400 text-[11px] font-bold uppercase">Paid</span>
</td>
<td class="px-6 py-4 text-slate-500 dark:text-slate-400 max-w-xs truncate">Recurring supply for lobby dispensers</td>
<td class="px-6 py-4 text-right">
<button class="text-slate-400 hover:text-primary transition-colors"><span class="material-symbols-outlined text-lg">more_vert</span></button>
</td>
</tr>
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4 whitespace-nowrap text-slate-600 dark:text-slate-400">Sep 28, 2023</td>
<td class="px-6 py-4 font-medium text-slate-900 dark:text-white">Printer Toner Cartridge (Black)</td>
<td class="px-6 py-4 font-semibold text-slate-900 dark:text-white">Rp 1.400.000</td>
<td class="px-6 py-4">
<span class="px-2 py-1 rounded-full bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-400 text-[11px] font-bold uppercase">Paid</span>
</td>
<td class="px-6 py-4 text-slate-500 dark:text-slate-400 max-w-xs truncate">HP LaserJet 400 series</td>
<td class="px-6 py-4 text-right">
<button class="text-slate-400 hover:text-primary transition-colors"><span class="material-symbols-outlined text-lg">more_vert</span></button>
</td>
</tr>
</tbody>
</table>
</div>
<div class="px-6 py-4 border-t border-slate-100 dark:border-slate-800 flex items-center justify-between text-xs text-slate-500 dark:text-slate-400">
<p>Showing 1 to 4 of 24 records</p>
<div class="flex gap-2">
<button class="px-3 py-1 border border-slate-200 dark:border-slate-700 rounded hover:bg-slate-50 dark:hover:bg-slate-800 disabled:opacity-50">Previous</button>
<button class="px-3 py-1 border border-slate-200 dark:border-slate-700 rounded bg-primary text-white">1</button>
<button class="px-3 py-1 border border-slate-200 dark:border-slate-700 rounded hover:bg-slate-50 dark:hover:bg-slate-800">2</button>
<button class="px-3 py-1 border border-slate-200 dark:border-slate-700 rounded hover:bg-slate-50 dark:hover:bg-slate-800">Next</button>
</div>
</div>
</div>
</div>
<div class="col-span-12 lg:col-span-4 space-y-6">
<div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 p-6 shadow-sm">
<h3 class="text-lg font-bold text-slate-900 dark:text-white mb-6">Contact Information</h3>
<div class="space-y-6">
<div class="flex items-start gap-4">
<div class="bg-primary/10 text-primary p-2 rounded-lg">
<span class="material-symbols-outlined">person</span>
</div>
<div class="flex flex-col">
<p class="text-slate-400 text-xs font-medium uppercase tracking-wider">Contact Person</p>
<p class="text-slate-900 dark:text-white font-semibold">Budi Santoso</p>
<p class="text-slate-500 text-sm">Operation Manager</p>
</div>
</div>
<div class="flex items-start gap-4">
<div class="bg-primary/10 text-primary p-2 rounded-lg">
<span class="material-symbols-outlined">mail</span>
</div>
<div class="flex flex-col">
<p class="text-slate-400 text-xs font-medium uppercase tracking-wider">Email Address</p>
<p class="text-slate-900 dark:text-white font-semibold">contact@jayaabadi.com</p>
</div>
</div>
<div class="flex items-start gap-4">
<div class="bg-primary/10 text-primary p-2 rounded-lg">
<span class="material-symbols-outlined">call</span>
</div>
<div class="flex flex-col">
<p class="text-slate-400 text-xs font-medium uppercase tracking-wider">Phone Number</p>
<p class="text-slate-900 dark:text-white font-semibold">+62 811-2233-4455</p>
</div>
</div>
<div class="flex items-start gap-4">
<div class="bg-primary/10 text-primary p-2 rounded-lg">
<span class="material-symbols-outlined">location_on</span>
</div>
<div class="flex flex-col">
<p class="text-slate-400 text-xs font-medium uppercase tracking-wider">Office Address</p>
<p class="text-slate-900 dark:text-white font-semibold leading-relaxed">Jl. Jendral Sudirman No. 45, Lantai 3, Makassar, South Sulawesi 90111</p>
</div>
</div>
</div>
<div class="mt-8 pt-6 border-t border-slate-100 dark:border-slate-800">
<h4 class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-4">Location Map</h4>
<div class="aspect-video rounded-lg overflow-hidden bg-slate-100 dark:bg-slate-800">
<img alt="Map Location" class="object-cover size-full opacity-80 grayscale" data-alt="Aerial map view of central Makassar" data-location="Makassar, Indonesia" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBF_3vuOyQ97AGcEY0VPFMwLRtiKs-dEHE623PaXGyRSorMznQP1SZ-LzfdRVUlTMmQG1UmTi41dR9eyPWnY1nyIGf9yPu835RsCj8fzaU4mCaoLUQTq0w45U5xVkU38dVOLg5YBrZydLBrdFKgPlVZcK0PbGkwYEY6Nvq3SlAPbgj2QhxuEL_CxafDz1FeRDRQDnNTysumz2vPvCxtgADvZKtLRRUlcgDxXvpJcIAcuJA_PuhEV4QEolwX3U6VzVURXLrVVK_iF8U"/>
</div>
</div>
</div>
<div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 p-6 shadow-sm">
<h3 class="text-lg font-bold text-slate-900 dark:text-white mb-4">Vendor Metrics</h3>
<div class="grid grid-cols-2 gap-4">
<div class="p-3 bg-slate-50 dark:bg-slate-800/50 rounded-lg">
<p class="text-slate-500 text-xs mb-1">Total Spent</p>
<p class="text-slate-900 dark:text-white font-bold text-sm">Rp 124.5M</p>
</div>
<div class="p-3 bg-slate-50 dark:bg-slate-800/50 rounded-lg">
<p class="text-slate-500 text-xs mb-1">Orders</p>
<p class="text-slate-900 dark:text-white font-bold text-sm">48</p>
</div>
</div>
</div>
</div>
</div>
</main>
</div>

</body></html>