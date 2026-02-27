<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>My Requests | Bosowa GAIS</title>
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
<style type="text/tailwindcss">
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .status-pending { @apply bg-amber-100 text-amber-700 dark:bg-amber-900/30 dark:text-amber-400; }
        .status-approved { @apply bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-400; }
        .status-rejected { @apply bg-red-100 text-red-700 dark:bg-red-900/30 dark:text-red-400; }
        .status-fulfilled { @apply bg-emerald-100 text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400; }
    </style>
</head>
<body class="font-display bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen flex">
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
<main class="flex-1 p-8">
<header class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
<div>
<h2 class="text-2xl font-bold text-slate-900 dark:text-white">My Requests</h2>
<p class="text-slate-500 dark:text-slate-400">Track and manage your item requisitions.</p>
</div>
<div class="flex items-center gap-3">
<div class="relative">
<span class="material-icons absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-lg">search</span>
<input class="pl-10 pr-4 py-2 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-lg w-64 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" placeholder="Search Request ID or Item..." type="text"/>
</div>
<select class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary/20 outline-none">
<option value="">All Statuses</option>
<option value="pending">Pending</option>
<option value="approved">Approved</option>
<option value="rejected">Rejected</option>
<option value="fulfilled">Fulfilled</option>
</select>
</div>
</header>
<div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl overflow-hidden shadow-sm">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-slate-50 dark:bg-slate-800/50 border-b border-slate-200 dark:border-slate-800">
<th class="px-6 py-4 font-semibold text-slate-600 dark:text-slate-400">Request ID</th>
<th class="px-6 py-4 font-semibold text-slate-600 dark:text-slate-400">Item Name</th>
<th class="px-6 py-4 font-semibold text-slate-600 dark:text-slate-400">Date</th>
<th class="px-6 py-4 font-semibold text-slate-600 dark:text-slate-400">Quantity</th>
<th class="px-6 py-4 font-semibold text-slate-600 dark:text-slate-400">Status</th>
<th class="px-6 py-4 font-semibold text-slate-600 dark:text-slate-400 text-right">Action</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-800">
@foreach($requests as $request)
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
    <td class="px-6 py-4 font-medium text-primary">
        #REQ-{{ $request->id }}
    </td>

    <td class="px-6 py-4">
        <div class="flex items-center gap-3">
           
<span>{{ $request->inventory?->item_name }}</span>

        </div>
    </td>

    <td class="px-6 py-4 text-slate-500">
        {{ $request->created_at->format('M d, Y') }}
    </td>

    <td class="px-6 py-4">
        {{ $request->quantity }}
    </td>

    <td class="px-6 py-4">
        <span class="px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider
            @if($request->status == 'pending') status-pending
            @elseif($request->status == 'approved') status-approved
            @elseif($request->status == 'rejected') status-rejected
            @elseif($request->status == 'fulfilled') status-fulfilled
            @endif">
            {{ ucfirst($request->status) }}
        </span>
    </td>

    <td class="px-6 py-4 text-right">
        <button 
            onclick="openTimeline({{ $request->id }})"
            class="text-primary hover:underline font-semibold flex items-center gap-1 ml-auto">
            <span class="material-symbols-outlined text-sm">visibility</span>
            View Timeline
        </button>
    </td>
</tr>
@endforeach
</tbody>

</table>
<div class="px-6 py-4 border-t border-slate-200 dark:border-slate-800 flex items-center justify-between text-xs text-slate-500">
{{ $requests->links() }}
</div>
</div>
</div>
</main>
@if($selected)

<div class="fixed inset-y-0 right-0 w-[400px] bg-white shadow-2xl z-[60] border-l">

    <!-- HEADER -->
    <div class="p-6 border-b flex justify-between">
        <div>
            <h3 class="font-bold text-lg">Request Timeline</h3>
            <p class="text-xs text-slate-500">
                #REQ-{{ $selected->id }}
            </p>
        </div>
        <a href="{{ route('my.request') }}">
            ✕
        </a>
    </div>

    <div class="p-8 space-y-8 relative">

        <!-- Submitted -->
        <div class="flex gap-4">
            <div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center text-white">
                ✓
            </div>
            <div>
                <h4 class="font-bold">Submitted</h4>
                <p class="text-xs text-slate-500">
                    {{ $selected->request_datetime->format('M d, Y • h:i A') }}
                </p>
                <p class="text-sm mt-1">
                    Request submitted by {{ $selected->user->name }}.
                </p>
            </div>
        </div>

        <!-- Admin Review -->
        <div class="flex gap-4">
            <div class="w-8 h-8 
                {{ $selected->status != 'pending' ? 'bg-primary text-white' : 'bg-slate-200 text-slate-400' }}
                rounded-full flex items-center justify-center">
                👁
            </div>
            <div>
                <h4 class="font-bold">Admin Review</h4>

                @if($selected->status != 'pending')
                    <p class="text-xs text-slate-500">
                        {{ $selected->updated_at->format('M d, Y • h:i A') }}
                    </p>
                    <p class="text-sm mt-1">
                        Reviewed by {{ $selected->approver?->name ?? 'Admin' }}.
                    </p>
                @else
                    <p class="text-sm text-slate-400 italic">
                        Waiting for admin review...
                    </p>
                @endif
            </div>
        </div>

        <!-- Decision -->
        <div class="flex gap-4">
            <div class="w-8 h-8 
                {{ in_array($selected->status, ['approved','rejected']) ? 'bg-primary text-white' : 'bg-slate-200 text-slate-400' }}
                rounded-full flex items-center justify-center">
                ⚖
            </div>
            <div>
                <h4 class="font-bold">Decision</h4>

                @if($selected->status == 'approved')
                    <p class="text-sm text-green-600">
                        Request Approved
                    </p>
                @elseif($selected->status == 'rejected')
                    <p class="text-sm text-red-600">
                        Request Rejected
                    </p>
                @else
                    <p class="text-sm text-slate-400 italic">
                        Awaiting decision...
                    </p>
                @endif
            </div>
        </div>

        <!-- Ready for Pickup -->
        <div class="flex gap-4">
            <div class="w-8 h-8 
                {{ $selected->status == 'fulfilled' ? 'bg-primary text-white' : 'bg-slate-200 text-slate-400' }}
                rounded-full flex items-center justify-center">
                📦
            </div>
            <div>
                <h4 class="font-bold">Ready for Pickup</h4>

                @if($selected->status == 'fulfilled')
                    <p class="text-sm text-green-600">
                        Item is ready to collect.
                    </p>
                @else
                    <p class="text-sm text-slate-400 italic">
                        Not ready yet.
                    </p>
                @endif
            </div>
        </div>

    </div>
<div class="absolute bottom-0 left-0 right-0 p-6 bg-slate-50 dark:bg-slate-800/50 border-t border-slate-200 dark:border-slate-800">
<a href="{{ route('request.pdf', $selected->id) }}"
   class="w-full bg-primary text-white py-3 rounded-xl font-bold hover:bg-primary/90 transition-colors block text-center">
    Download Request PDF
</a>

</div>
</div>

@endif


</div>
<script>
function openTimeline(id) {
    window.location.href = "{{ route('my.request') }}?timeline=" + id;
}

</script>

</body></html>