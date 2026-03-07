<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', SiteController::class . '@index')->name('home');
Route::get('/receitas', SiteController::class . '@lista_receitas')->name('lista_receitas');
