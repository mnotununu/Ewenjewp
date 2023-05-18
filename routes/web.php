<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(
    function () {
        Route::get('/staysolid', [DashboardController::class, 'staysolid']);
});
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/about', [DashboardController::class, 'about']);
Route::get('/online', [DashboardController::class, 'online']);
Route::get('/contact', [DashboardController::class, 'contact']);
Route::get('/catalogue', [DashboardController::class, 'catalogue']);
Route::get('/buy', [DashboardController::class, 'buy']);
// Route::get('/staysolid', [DashboardController::class, 'staysolid']);
