<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\UserController;
// use App\Http\Controllers\SettingController;
use App\Http\Controllers\ServiceController;
// use App\Http\Controllers\ContactController;
// use App\Http\Controllers\AboutController;
use App\http\Controllers\UserTypeController;
use App\Http\Controllers\ServiceTypeController;
// use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('homes.home');
})->name('homepage');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('/register', RegisterController::class);
Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::resource('/login', LoginController::class);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/logout', [LoginController::class, 'destroy'])->name('logout'); 
// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login'])->name('login.post');
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('/user_types', UserTypeController::class);

Route::resource('/service_types', ServiceTypeController::class);

Route::resource('/services', ServiceController::class);

Route::resource('/users', UserController::class);

// Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::resource('/quotes', QuoteController::class);
// Route::put('/quotes/{quote}/download', [QuoteController::class, 'download'])->name('quotes.download');

// Route::get('/settings', [SettingController::class, 'index'])->name('settings');

// Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Route::get('/about', [AboutController::class, 'index'])->name('about');
