<?php

use App\Http\Controllers\Admin\dashboardController;
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

Route::get('/', function () {
    return view('components.layout.app');
});
// Route::prefix('admin')->group(function () {
//     Route::get('/dashboard', [dashboardController::class, 'index'])->name('admin.dashboard');
// });
Route::get('/admin/dashboard', function () {
    return view('admin.index');
})->name('admin.dashboard');

Route::prefix('admin')->group(function () {
    Route::view('/dashboard', 'admin.index')->name('admin.dashboard');
    Route::view('/produk', 'admin.product')->name('admin.products');
    Route::view('/kriteria', 'admin.kriteria')->name('admin.kriteria');
});
