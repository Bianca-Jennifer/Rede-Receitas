<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\ReceitaController;
use Illuminate\Support\Facades\Route;

Route::get('/', SiteController::class . '@index')->name('home');
Route::get('/receitas', SiteController::class . '@lista_receitas')->name('lista_receitas');
Route::get('/receitas/{slug}', SiteController::class . '@details')->name('details');
