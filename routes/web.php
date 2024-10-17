<?php
use App\Http\Controllers\authController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\profileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/',[homeController::class,'home'])->name('home');

Route::get('/login',[authController::class,'showLogin'])->name('login');
Route::post('/login',[authController::class,'login']);

Route::get('/register',[authController::class,'showRegister'])->name('register');
Route::post('/register',[authController::class,'register']);

Route::get('/logout',[authController::class,'logout'])->name('logout');

Route::get('/contacts',[contactController::class,'contacts'])->name('contacts');

Route::get('/profile',[profileController::class,'profile'])->name('profile');
