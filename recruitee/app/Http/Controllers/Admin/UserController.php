<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();

        return view('admin.users.index')->with('users', $users);
    }

    public function employer()
    {
        $employers = DB::table('employer')->get();

        return view('admin.employer.index', compact('employers'));
    }

    public function dashboard()
    {
        $totalUsers = User::count();
        $totalEmployers = DB::table('employer')->count();
    
        // Daily user registrations - last 7 days
        $userStats = User::select(DB::raw('DATE(created_at) as date'), DB::raw('COUNT(*) as total'))
            ->groupBy('date')
            ->orderBy('date', 'DESC')
            ->limit(7)
            ->get();
    
        // Daily employer registrations - last 7 days
        $employerStats = DB::table('employer')
            ->select(DB::raw('DATE(created_at) as date'), DB::raw('COUNT(*) as total'))
            ->groupBy('date')
            ->orderBy('date', 'DESC')
            ->limit(7)
            ->get();
    
        return view('admin.dashboard.index', compact(
            'totalUsers',
            'totalEmployers',
            'userStats',
            'employerStats'
        ));
    }
    
    
}
