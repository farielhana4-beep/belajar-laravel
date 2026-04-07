<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('produk', ProdukController::class);

    Route::get('/dashboard', function () {
        return redirect('/produk');
    })->name('dashboard');
});

require __DIR__.'/auth.php';