<?php

namespace App\Http\Controllers;

use App\Models\Utm;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $stats = Utm::with('user')->paginate(50);
        $totalBalance = Utm::sum('balance');
        $totalRating = Utm::sum('rating');
        $totalAccount = Utm::sum('account');
        $totalQuery = Utm::sum('query');
        return view('admin', compact('stats', 'totalBalance', 'totalRating', 'totalAccount', 'totalQuery'));
    }
}
