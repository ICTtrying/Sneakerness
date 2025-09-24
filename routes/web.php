<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Blade;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\VerkoperController;

// Nu luistert de route op /
Route::get('/Tickets', [TicketController::class, 'index']);

Route::get('/Tickets/{EventTicket}', [TicketController::class, 'Ticketskinds']);
Route::post('/add-to-cart', [TicketController::class, 'addToCart']);



Blade::component('layouts.app', 'layouts.app');


Route::get('/contact', [ContactController::class, 'index']);

Route::get('/verkoper', [VerkoperController::class, 'index']);
