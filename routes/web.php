<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/signup', [AuthController::class, 'showSignUpForm'])->name('signup');
Route::post('/signup', [AuthController::class, 'signUp']);
Route::get('/dashboard', function () {
    return view('dashboard'); // Ensure this view exists
})->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
