<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    /** @use HasFactory<\Database\Factories\TicketFactory> */
    use HasFactory;
    protected $fillable = [
        'event_name',
        'event_date',
        'price',
        'seat_number',
        'buyer_name',
        'buyer_email',
    ];
}
