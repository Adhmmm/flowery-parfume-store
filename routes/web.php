<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\KriteriaController;
use App\Http\Controllers\Customer\CustomerController;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AlternatifController;

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
    return view('customer.home');
})->name('customer.home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');
    
    Route::resource('/produk', ProdukController::class)->names([
        'index' => 'produk.index',
        'create' => 'produk.create',
        'store' => 'produk.store',
        'show' => 'produk.show',
        'edit' => 'produk.edit',
        'update' => 'produk.update',
        'destroy' => 'produk.destroy'
    ]);

    Route::resource('/kriteria', KriteriaController::class)->names([
        'index' => 'kriteria.index',
        'create' => 'kriteria.create',
        'store' => 'kriteria.store',
        'edit' => 'kriteria.edit',
        'update' => 'kriteria.update',
        'destroy' => 'kriteria.destroy'
    ]);

    Route::resource('/alternatif', AlternatifController::class)->names([
        'index' => 'alternatif.index'
    ]);
});

Route::middleware(['auth', 'role:customer'])->group(function () {
    Route::get('/customer', [CustomerController::class, 'home'])->name('customer.home');
    Route::get('/customer/produk', [CustomerController::class, 'produk'])->name('customer.produk');
    Route::get('/customer/about', [CustomerController::class, 'about'])->name('customer.about');
    Route::get('/customer/catalog', [CustomerController::class, 'catalog'])->name('customer.catalog');
    Route::get('/customer/contact', [CustomerController::class, 'contact'])->name('customer.contact');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/profile', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/admin/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/admin/profile', [ProfileController::class, 'destroy'])->name('admin.profile.destroy');
});

require __DIR__ . '/auth.php';
