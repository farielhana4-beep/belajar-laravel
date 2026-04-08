<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return redirect('/login');
});

/* redirect lama -> baru */
Route::redirect('/produk', '/products');
Route::redirect('/produk/create', '/products/create');

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return redirect('/products');
    })->name('dashboard');

    Route::resource('products', ProductController::class);

});

require __DIR__.'/auth.php';