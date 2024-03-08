<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $restaurant = Restaurant::where('user_id', Auth::id())->first();
        return view('admin.dashboard', compact('restaurant'));
    }
}
