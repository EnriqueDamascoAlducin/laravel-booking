<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //
    public function index() {
        
        $users = User::where('role', 'user')->count();
        return view('admin.dashboard.index', ["registeredUsers" => $users]);
    }
}
