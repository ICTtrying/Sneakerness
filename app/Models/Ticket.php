<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    /** @use HasFactory<\Database\Factories\TicketFactory> */
    use HasFactory;
    protected $table = 'Ticket';

    protected $primaryKey = 'Id';

    public $timestamps = false;

    protected $fillable = [
        'Bezoeker_id',
        'Evenement_id',
        'Prijs_id',
        'AantalTickets',
        'Datum',
        'Isactief',
        'Opmerking',
        'Datumaangemaakt',
        'Datumgewijzigd',
    ];

    public function bezoeker()
    {
        return $this->belongsTo(Bezoeker::class, 'Bezoeker_id');
    }

    public function evenement()
    {
        return $this->belongsTo(Evenement::class, 'Evenement_id');
    }

    public function prijs()
    {
        return $this->belongsTo(Prijs::class, 'Prijs_id');
    }

}
