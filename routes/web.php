<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {

        Route::get('/restaurant', [AdminRestaurantController::class, 'index'])->name('restaurant');
        Route::get('/restaurants/create',[AdminRestaurantController::class, 'create']) ->name('admin.restaurant.create');

    //     Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    //     Route::get('/projects/deleted', [AdminProjectController::class, 'deletedIndex'])->name('projects.deleted.index');
    //     Route::get('/projects/deleted/{project}', [AdminProjectController::class, 'deletedShow'])->name('projects.deleted.show');
    //     Route::patch('/projects/deleted/{project}', [AdminProjectController::class, 'deletedRestore'])->name('projects.deleted.restore');
    //     Route::delete('/projects/deleted/{project}', [AdminProjectController::class, 'deletedDestroy'])->name('projects.deleted.destroy');
    //     Route::resource('/projects', AdminProjectController::class);
    });
