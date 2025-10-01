<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Blade;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\VerkoperController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StandController;

// Nu luistert de route op /
Route::get('/Tickets', [TicketController::class, 'index']);
Route::post('/add-to-cart', [TicketController::class, 'addToCart']);



Blade::component('layouts.app', 'layouts.app');


Route::get('/contact', [ContactController::class, 'index']);

Route::get('/verkoper', [VerkoperController::class, 'index']);

Route::get('/', [HomeController::class, 'index']);

Route::Post('/', [HomeController::class, 'index']);
Route::get('/Stands', [StandController::class,'index']);
