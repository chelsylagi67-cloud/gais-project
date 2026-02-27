<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Browse Inventory | Bosowa GAIS</title>
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
                        "display": ["Inter"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
</head>
<script>
document.addEventListener("DOMContentLoaded", function() {

    const modal = document.getElementById('requestModal');

function openRequestModal(id, title, category, stock, image) {
    document.getElementById('modalItemId').value = id;
    document.getElementById('modalTitle').innerText = title;
    document.getElementById('modalCategory').innerText = category;
    document.getElementById('modalStock').innerText = "Available Stock: " + stock;
    document.getElementById('modalImage').src = image;
document.getElementById('requestForm').action = "/inventory/" + id + "/request";
    modal.classList.remove('hidden');
    modal.classList.add('flex');
}


    function closeRequestModal() {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }

    function increaseQty() {
        let input = document.getElementById('qtyInput');
        input.value = parseInt(input.value) + 1;
    }

    function decreaseQty() {
        let input = document.getElementById('qtyInput');
        if (input.value > 1) {
            input.value = parseInt(input.value) - 1;
        }
    }

    window.openRequestModal = openRequestModal;
    window.closeRequestModal = closeRequestModal;
    window.increaseQty = increaseQty;
    window.decreaseQty = decreaseQty;

    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeRequestModal();
        }
    });

});
</script>

<body class="font-display bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen flex">
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

  {{-- Dashboard --}}
  <a href="{{ route('user.dashboard') }}"
     class="flex items-center gap-3 px-4 py-3 rounded-lg font-medium transition-all
     {{ request()->routeIs('user.dashboard') 
          ? 'text-primary bg-primary/10' 
          : 'text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-primary' }}">
    <span class="material-icons">dashboard</span>
    <span>Dashboard</span>
  </a>

  {{-- Inventory --}}
  <a href="{{ route('user.inventory') }}"
     class="flex items-center gap-3 px-4 py-3 rounded-lg font-medium transition-all
     {{ request()->routeIs('user.inventory*') 
          ? 'text-primary bg-primary/10' 
          : 'text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-primary' }}">
    <span class="material-icons">inventory_2</span>
    <span>Inventory</span>
  </a>

  {{-- My Requests --}}
  <a href="{{ route('my.request') }}"
     class="flex items-center gap-3 px-4 py-3 rounded-lg font-medium transition-all
     {{ request()->routeIs('my.request*') 
          ? 'text-primary bg-primary/10' 
          : 'text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-primary' }}">
    <span class="material-icons">assignment_turned_in</span>
    <span>My Requests</span>
  </a>

  {{-- Room Booking --}}
  <a href="#"
     class="flex items-center gap-3 px-4 py-3 rounded-lg font-medium transition-all
     {{ request()->is('room-booking*') 
          ? 'text-primary bg-primary/10' 
          : 'text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-primary' }}">
    <span class="material-icons">meeting_room</span>
    <span>Room Booking</span>
  </a>

  {{-- Operational Checklist --}}
  <a href="#"
     class="flex items-center gap-3 px-4 py-3 rounded-lg font-medium transition-all
     {{ request()->is('operational-checklist*') 
          ? 'text-primary bg-primary/10' 
          : 'text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-primary' }}">
    <span class="material-icons">fact_check</span>
    <span>Operational Checklist</span>
  </a>

</nav>
<div class="p-4 border-t border-slate-200 dark:border-slate-800">
<div class="flex items-center gap-3 p-2 rounded-xl bg-slate-50 dark:bg-slate-800/50">
<img alt="User Profile" class="w-10 h-10 rounded-full object-cover" data-alt="Corporate employee professional portrait" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC7NPx0UUMu6w-0ZeslzITVymS936AxH42FdAeOwThSS_3_jEKFoNRdpHEiK5Pd_z7fYeUE5wzVfnMLzhWisfi_rZS-6vtnaOtATZb6BrJT_sVmd5RNimcC3upAVL7-J2b0Zx04BHQz5f04gFsvogqyIXQ3rCrQKvrPakQ-AEuCA-1IIWdxVEkX5SkrzJHjNZQfKMGnqUNJ0MtDMfCNGZG6BJ8jYsjaDqg-saMjDpNC2DWqdur8HO7BRkqtnrkhFyMmw84oBgIJn4U"/>
<div class="overflow-hidden">
<p class="text-sm font-semibold truncate">Andi Pratama</p>
<p class="text-xs text-slate-500 truncate">Finance Dept.</p>
</div>
</div>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 p-8">
<!-- Header -->
<header class="mb-8 flex flex-col md:flex-row md:items-end justify-between gap-4">
<div>
<h2 class="text-3xl font-bold tracking-tight">Browse Inventory</h2>
<p class="text-slate-500 dark:text-slate-400 mt-1">Select office supplies you need for your department operations.</p>
</div>
<div class="flex gap-3">
<button class="bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 px-4 py-2 rounded-lg flex items-center gap-2 text-sm font-medium shadow-sm hover:bg-slate-50 transition-all">
<span class="material-icons text-sm">shopping_cart</span>
                    Cart (0)
                </button>
</div>
</header>
<!-- Filters & Search -->
<div class="bg-white dark:bg-slate-900 p-4 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm flex flex-col lg:flex-row gap-4 mb-8">
<div class="relative flex-1">
<span class="material-icons absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
<input class="w-full pl-10 pr-4 py-2 bg-slate-50 dark:bg-slate-800 border-none rounded-lg focus:ring-2 focus:ring-primary/50 transition-all text-sm" placeholder="Search item name, SKU, or keyword..." type="text"/>
</div>
<div class="flex gap-2 flex-wrap">
<button class="px-4 py-2 bg-primary text-white text-sm font-medium rounded-lg">All Items</button>
<button class="px-4 py-2 bg-slate-50 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-sm font-medium rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700 transition-colors">Stationery</button>
<button class="px-4 py-2 bg-slate-50 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-sm font-medium rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700 transition-colors">Electronics</button>
<button class="px-4 py-2 bg-slate-50 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-sm font-medium rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700 transition-colors">Pantry</button>
<button class="px-4 py-2 bg-slate-50 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-sm font-medium rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700 transition-colors">Maintenance</button>
</div>
</div>
<!-- Inventory Grid -->
<!-- Inventory Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

@foreach($items as $item)

<div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 overflow-hidden flex flex-col shadow-sm hover:shadow-md transition-shadow">

    <div class="relative aspect-square">
        <img class="w-full h-full object-cover"
             src="https://via.placeholder.com/300"
             alt="{{ $item->item_name }}">

        @if($item->stock == 0)
            <span class="absolute top-3 left-3 px-2 py-1 bg-slate-500 text-white text-[10px] font-bold uppercase rounded">
                Out of Stock
            </span>
        @elseif($item->stock <= $item->minimum_stock)
            <span class="absolute top-3 left-3 px-2 py-1 bg-orange-500 text-white text-[10px] font-bold uppercase rounded">
                Low Stock
            </span>
        @else
            <span class="absolute top-3 left-3 px-2 py-1 bg-green-500 text-white text-[10px] font-bold uppercase rounded">
                Available
            </span>
        @endif
    </div>

    <div class="p-4 flex-1 flex flex-col">
        <div class="mb-2">
            <span class="text-[10px] text-primary font-bold uppercase tracking-wider">
                {{ $item->category }}
            </span>

            <h3 class="font-bold text-slate-900 dark:text-white leading-tight mt-1">
                {{ $item->item_name }}
            </h3>
        </div>

        <div class="mt-auto pt-4 flex items-center justify-between border-t border-slate-100 dark:border-slate-800">
            <div>
                <p class="text-xs text-slate-500">Stock</p>
                <p class="font-bold text-sm">
                    {{ $item->stock }} {{ $item->unit }}
                </p>
            </div>

<button 
onclick="openRequestModal(
    '{{ $item->id }}',
    '{{ $item->item_name }}',
    '{{ $item->category }}',
    '{{ $item->stock }} {{ $item->unit }}',
    'https://via.placeholder.com/300'
)"

    class="bg-primary hover:bg-primary/90 text-white px-4 py-2 rounded-lg text-sm font-semibold transition-colors">
    Request
</button>


        </div>
    </div>

</div>

@endforeach


</main>
<!-- Floating Request Confirmation (Conceptual Overlay) -->
<!-- This is hidden by default but shown here as a drawer concept -->
<div class="hidden fixed inset-0 bg-black/40 backdrop-blur-sm z-[60]">
    <div class="flex justify-end h-full">


<div class="flex items-center gap-4 mb-8 p-4 bg-slate-50 dark:bg-slate-800 rounded-xl">
<img alt="Selection" class="w-16 h-16 rounded-lg object-cover" data-alt="Paper ream selection preview" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6UeDmX7jC4XuQMtpS1iM_QRAXcWfE-Ve0JdyP3_EpyVqv2KO4YKfDksZkZzMii1xazM3iJELKoTkZJDSzHEOKIWlYPibuHMDmFd87M2ZFhXuw5kUptQ6sJ9KeSOdRz7t7QGvJL5BIXH233B6SvKx9_AvrqZtM-72GU1UhPz314HXShw65ELmdJfS_6jS-pTCfi6x5oNL7csU1VkRVo8NUXxbFNbulnnwIQyM09KEMYzYzvm9bi6Zq84AQ9B3ngxPcniw34koEXio"/>
<div>
<h4 class="font-bold text-sm">Paper A4 80gr - Sinar Dunia</h4>
<p class="text-xs text-slate-500">Category: Stationery</p>
</div>
</div>
<form class="space-y-6">
<div>
<label class="block text-sm font-semibold mb-2">Quantity Needed</label>
<div class="flex items-center gap-4">
<button class="w-10 h-10 rounded-lg border border-slate-200 dark:border-slate-700 flex items-center justify-center" type="button">-</button>
<input class="w-20 text-center border-slate-200 dark:border-slate-700 rounded-lg dark:bg-slate-800" type="number" value="1"/>
<button class="w-10 h-10 rounded-lg border border-slate-200 dark:border-slate-700 flex items-center justify-center" type="button">+</button>
</div>
</div>
<div>
<label class="block text-sm font-semibold mb-2">Purpose of Request</label>
<textarea class="w-full border-slate-200 dark:border-slate-700 rounded-lg dark:bg-slate-800 text-sm" placeholder="Briefly describe why you need this item..." rows="4"></textarea>
</div>
<div class="pt-6 border-t border-slate-200 dark:border-slate-800">
<button class="w-full bg-primary py-3 rounded-lg text-white font-bold hover:shadow-lg transition-all" type="button">Submit Request</button>
<button class="w-full mt-3 py-3 rounded-lg text-slate-500 font-semibold hover:bg-slate-50 dark:hover:bg-slate-800 transition-all" type="button">Cancel</button>
</div>
</form>
</div>
</div>
<!-- REQUEST MODAL -->
<div id="requestModal"
class="hidden fixed inset-0 z-[70] items-center justify-center p-4 bg-slate-900/60 backdrop-blur-sm">

<div class="bg-white dark:bg-slate-900 w-full max-w-xl rounded-2xl shadow-2xl overflow-hidden">

<!-- HEADER -->
<div class="px-6 py-4 border-b border-slate-100 dark:border-slate-800 flex items-center justify-between">
<h3 class="text-xl font-bold">Request Item</h3>
<button type="button" onclick="closeRequestModal()" class="text-slate-400 hover:text-slate-600">
<span class="material-icons">close</span>
</button>
</div>

<!-- BODY -->
<div class="p-6">

<div class="flex items-center gap-4 mb-8 p-4 bg-slate-50 dark:bg-slate-800/50 rounded-xl border border-slate-100 dark:border-slate-800">
<img id="modalImage" class="w-20 h-20 rounded-lg object-cover shadow-sm">
<div>
<span id="modalCategory" class="text-[10px] text-primary font-bold uppercase tracking-wider"></span>
<h4 id="modalTitle" class="font-bold text-lg"></h4>
<p id="modalStock" class="text-sm text-slate-500"></p>
</div>
</div>

<form id="requestForm" method="POST">
@csrf

<input type="hidden" name="item_id" id="modalItemId">


<div class="grid grid-cols-2 gap-5">


<div class="grid grid-cols-2 gap-5">

<!-- Quantity -->
<div class="space-y-2">
<label class="block text-sm font-semibold">Quantity</label>
<div class="flex items-center">
<button type="button" onclick="decreaseQty()" 
class="w-11 h-11 border border-slate-200 rounded-l-lg hover:bg-slate-50">
<span class="material-icons text-sm">remove</span>
</button>

<input id="qtyInput"
name="quantity"
class="w-full h-11 text-center border-y border-x-0 border-slate-200 text-sm font-medium"
type="number" value="1" min="1">


<button type="button" onclick="increaseQty()"
class="w-11 h-11 border border-slate-200 rounded-r-lg hover:bg-slate-50">
<span class="material-icons text-sm">add</span>
</button>
</div>
</div>

<!-- Urgency -->
<div class="space-y-2">
<label class="block text-sm font-semibold">Urgency Level</label>
<select name="urgency"
class="w-full h-11 border border-slate-200 rounded-lg text-sm">
<option value="Normal">Normal</option>
<option value="Urgent">Urgent</option>
</select>

</div>

</div>

<!-- Date -->
<div class="space-y-2">
<label class="block text-sm font-semibold">Date Needed</label>
<input type="date"
name="date_needed"
class="w-full h-11 border border-slate-200 rounded-lg text-sm px-3">
</div>

<!-- Reason -->
<div class="space-y-2">
<label class="block text-sm font-semibold">Purpose / Reason (Alasan)</label>
<textarea name="reason"
rows="3"
class="w-full p-4 border border-slate-200 rounded-lg text-sm"></textarea>
</div>


</div>

<!-- FOOTER -->
<button type="button" onclick="closeRequestModal()"
  class="px-6 py-2.5 rounded-lg text-slate-600 font-semibold hover:bg-slate-100 text-sm">
  Cancel
</button>

<button type="submit"
  class="px-8 py-2.5 bg-primary hover:bg-primary/90 text-white font-bold rounded-lg text-sm">
  Submit Request
</button>


</div>
</form>


</div>
</div>

</body></html>