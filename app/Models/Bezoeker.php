<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bezoeker extends Model
{
    use HasFactory;

    protected $table = 'Bezoeker';

    protected $primaryKey = 'Id';

    public $timestamps = false;

    protected $fillable = [
        'Naam',
        'Email',
        'Isactief',
        'Opmerking',
        'Datumaangemaakt',
        'Datumgewijzigd',
    ];
    public function tickets() {
    return $this->hasMany(Ticket::class, 'Bezoeker_id');
}

}
