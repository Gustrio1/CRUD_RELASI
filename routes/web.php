<?php

use App\Http\Controllers\companyController;
use App\Http\Controllers\marketController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/products', [userController::class, 'index']);

Route::get('/products/form', [userController::class, 'store'],)->name('store');

Route::post('/products', [userController::class, 'create'],)->name('create');

Route::delete('/products/{id}', [userController::class, 'destroy'])->name('destroy');



Route::get('/company', [companyController::class, 'index'])->name('company');

Route::get('/company/from', [companyController::class, 'create'])->name('create-company');

Route::post('/company', [companyController::class, 'store'])->name('store-company');



Route::get('/market', [marketController::class, 'index']);

Route::get('/market/from-market', [marketController::class, 'create'])->name('create_market');

Route::post('/market', [marketController::class, 'store'])->name('store_market');
