<?php
use App\Http\Controllers\authController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\profileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/',[HomeController::class,'home'])->name('home');

Route::get('/login',[AuthController::class,'showLogin'])->name('login');
Route::post('/login',[AuthController::class,'login']);

Route::get('/register',[AuthController::class,'showRegister'])->name('register');
Route::post('/register',[AuthController::class,'register']);

Route::get('/logout',[AuthController::class,'logout'])->name('logout');

Route::prefix('/contact')->name('contact.')->group(function(){
    Route::get('/',[ContactController::class,'index'])->name('index');
    Route::get('/create',[ContactController::class,'create'])->name('create');
    Route::post('/store',[ContactController::class,'store'])->name('store');
});

Route::get('/profile',[ProfileController::class,'profile'])->name('profile');

