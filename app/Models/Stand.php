<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stand extends Model
{
    use HasFactory;

    protected $table = 'Stand'; // niet hoofdletter!

    protected $fillable = [
        'StandType',
        'Prijs',
        'VerhuurdStatus',
        'Isactief',
        'verkoper_id',
        'Dagen',
    ];

    public function verkoper()
    {
        return $this->belongsTo(Verkoper::class, 'verkoper_id', 'id');
    }
}