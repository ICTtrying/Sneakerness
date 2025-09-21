<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

// Nu luistert de route op /
Route::get('/', [TicketController::class, 'index']);
Route::get('/tickets/{id}', [TicketController::class, 'Ticketkind']);
