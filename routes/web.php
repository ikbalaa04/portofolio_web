<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;



// routes/web.php
Route::get('/', [AppController::class, 'home'])->name('home');

Route::get('portfolio', [AppController::class, 'portfolio'])->name('portfolio');

Route::get('about', [AppController::class, 'about'])->name('about');

Route::get('contact', [AppController::class, 'contact'])->name('contact');




// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
