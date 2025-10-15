<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prijs extends Model
{
    use HasFactory;

    protected $table = 'Prijs';
    protected $primaryKey = 'Id';
    public $timestamps = false;

    protected $fillable = [
        'Datum',
        'Tijdslot',
        'Tarief',
        'Isactief',
        'Opmerking',
        'Datumaangemaakt',
        'Datumgewijzigd',
    ];
    public function tickets() {
    return $this->hasMany(Ticket::class, 'Prijs_id');
}

}
