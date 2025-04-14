<?php

use App\Http\Controllers\companyController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\marketController;
use App\Http\Controllers\roleController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', [homeController::class, 'home']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/products', [userController::class, 'index']);
Route::get('/products/form', [userController::class, 'store'],)->name('store');
Route::post('/products', [userController::class, 'create'],)->name('create');
Route::get('/products/edit/{id}', [userController::class, 'edit'])->name('product-edit');
Route::put('/products/edit/{id}', [userController::class, 'update'])->name('product-update');
Route::delete('/products/{id}', [userController::class, 'destroy'])->name('destroy');




Route::get('/company', [companyController::class, 'index'])->name('company');
Route::get('/company/from', [companyController::class, 'create'])->name('create-company');
Route::post('/company', [companyController::class, 'store'])->name('store-company');
Route::get('/company/edit/{id}', [companyController::class, 'edit'])->name('edit-company');
Route::put('/company/edit/{id}', [companyController::class, 'update'])->name('update-company');


Route::get('/market', [marketController::class, 'index']);
Route::get('/market/from-market', [marketController::class, 'create'])->name('create_market');
Route::post('/market', [marketController::class, 'store'])->name('store_market');
Route::get('/market/edit/{id}', [marketController::class, 'edit'])->name('edit-market');
Route::put('/market/edit/{id}', [marketController::class, 'update'])->name('update-market');
