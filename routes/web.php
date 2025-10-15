<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Blade;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\VerkoperController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StandController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use App\Models\Stand;
use App\Models\Verkoper;

// Nu luistert de route op /
Route::get('/Tickets', [TicketController::class, 'index']);
Route::post('/add-to-cart', [TicketController::class, 'addToCart']);



Blade::component('layouts.app', 'layouts.app');


Route::get('/contact', [ContactController::class, 'index']);

Route::get('/vendors', [VerkoperController::class, 'index'])->name('vendors.index');

Route::get('/', [HomeController::class, 'index']);

Route::Post('/', [HomeController::class, 'index']);

Route::get('/Stands', [StandController::class,'index'])->name('stands.index');

Route::get('/Stands/create', [StandController::class,'create'])->name('stands.create');

Route::post('/stands', [StandController::class, 'store'])->name('stands.store');

Route::controller(RegisterUserController::class)->group(function () {
    Route::get('/register', 'create');
    Route::post('/register', 'store');
});

// login
Route::controller(SessionController::class)->group(function () {
    Route::get('/login', 'create');
    Route::post('/login', 'store');
});

// logout route
Route::post('/logout', [SessionController::class, 'destroy']);
