<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\ItemRequest;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // LOW STOCK ITEMS
        $lowStock = Inventory::whereColumn('stock', '<=', 'minimum_stock')->count();

        // PENDING REQUESTS
        $pendingRequest = ItemRequest::where('status', 'pending')->count();
         $recentRequests = ItemRequest::with(['inventory','user'])
        ->latest()
        ->take(5)
        ->get();
        return view('AdminDashboard', compact(
            'lowStock',
            'pendingRequest',
            'recentRequests'
        ));
    }

}
