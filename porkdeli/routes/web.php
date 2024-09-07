<?php

use App\Http\Controllers\InsertProduct;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Home route
Route::get('/', function () {
    return view('welcome');
});

// Route for the product form (GET)
Route::get('/add', [InsertProduct::class, 'create'])
    ->middleware(['auth', 'verified'])
    ->name('addProducts');

// Route to handle the product form submission (POST)
Route::post('/addproducts', [InsertProduct::class, 'storage'])
    ->middleware(['auth', 'verified'])
    ->name('productStore');

// Resource route for CRUD operations
Route::resource('/products', InsertProduct::class)
    ->middleware(['auth', 'verified']);

// Route for search page
Route::get('/search', function () {
    return view('search');
});

// Route for dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
