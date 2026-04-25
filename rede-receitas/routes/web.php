<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\ReceitaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', SiteController::class . '@index')->name('home');
Route::get('/receitas', SiteController::class . '@lista_receitas')->name('lista_receitas');
Route::get('/receitas/{slug}', SiteController::class . '@details')->name('details');

Route::view('/login', 'login.form')->name('login');
Route::post('/auth', LoginController::class . '@auth')->name('login.auth');
