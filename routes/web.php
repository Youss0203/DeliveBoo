<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;   
// use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\DishesController as AdminDishesController;
use App\Http\Controllers\Admin\RestaurantController as AdminRestaurantController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {




        Route::resource('/restaurants', AdminRestaurantController::class);
        Route::resource('/dishes', AdminDishesController::class);
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
        

    });
