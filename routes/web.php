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
    return redirect()->route('customer.home');
})->name('/');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// For Admin
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/produk', ProdukController::class)->names([
        'index' => 'produk.index'
    ]);
    
    Route::resource('/kriteria', KriteriaController::class)->names([
        'index' => 'kriteria.index'
    ]);

    Route::resource('/alternatif', AlternatifController::class)->names([
        'index' => 'alternatif.index'
    ]);

});

// customer Customer
Route::controller(CustomerController::class)->group(function () {
    Route::get('/', 'home')->name('customer.home');
    Route::get('/produk', 'produk')->name('customer.produk');
    Route::get('/about', 'about')->name('customer.about');
    Route::get('/catalog', 'catalog')->name('customer.catalog');
    Route::get('/contact', 'contact')->name('customer.contact');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/profile', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/admin/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/admin/profile', [ProfileController::class, 'destroy'])->name('admin.profile.destroy');
});

require __DIR__ . '/auth.php';