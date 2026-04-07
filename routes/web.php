<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('products', ProductController::class);

    Route::get('/dashboard', function () {
        return redirect('/products');
    })->name('dashboard');
});

require __DIR__.'/auth.php';