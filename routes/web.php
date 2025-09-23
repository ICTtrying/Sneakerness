<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

// Nu luistert de route op /
Route::get('/Tickets', [TicketController::class, 'index']);

Route::get('/Tickets/{EventTicket}', [TicketController::class, 'Ticketskinds']);
Route::post('/add-to-cart', [TicketController::class, 'addToCart']);