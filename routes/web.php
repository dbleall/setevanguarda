<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SupliersController;
use App\Http\Controllers\InfosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('principal', function () {
    return view('home');
});

Route::get('home', function () {
    return view('home');
});

Route::get('sobre', function () {
    return view('about-us');
}); 

Route::get('contato', function () {
    return view('contact');
}); 

Route::get('clients_register', function () {
    return view('clients_register');
}); 

Route::get('product-grids', function () {
    return view('product-grids');
}); 
Route::get('product-details', function () {
    return view('product-details');
}); 
Route::get('product-list', function () {
    return view('product-list');
}); 
Route::get('blog-single-sidebar', function () {
    return view('blog-single-sidebar');
}); 
Route::get('cart', function () {
    return view('cart');
}); 
Route::get('faq', function () {
    return view('faq');
}); 





Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/clients', function () {
        return view('clients');
    })->name('clients');
});


Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'])->group(function () {
     Route::resource('categories', CategoryController::class);
     Route::resource('products', ProductsController::class);
     Route::resource('supliers', SupliersController::class);
     Route::resource('infos', InfosController::class);
});
