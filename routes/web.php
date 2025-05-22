<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/chi-siamo', [PageController::class, 'about'])->name('about');
Route::get('/menù', [PageController::class, 'menu'])->name('menu');
Route::get('/contatti', [PageController::class, 'contact'])->name('contact');
