<?php

namespace App\Http\Controllers;

use App\Models\ItemRequest;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index()
    {
        $userId = auth()->id();

        // Pending requests milik user
        $pendingCount = ItemRequest::where('user_id', $userId)
            ->where('status', 'pending')
            ->count();

        // Recent requests milik user (ambil 5 terbaru)
        $recentRequests = ItemRequest::with('inventory')
            ->where('user_id', $userId)
            ->latest()
            ->take(5)
            ->get();

        return view('UserDashboard', compact('pendingCount', 'recentRequests'));
    }
}
