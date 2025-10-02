<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verkoper extends Model
{
    use HasFactory;

    protected $table = 'verkoper'; // match migratie

    protected $fillable = [
        'Naam',
        'SpecialeStatus',
        'VerkooptSoort',
        'Logo',
        'Isactief',
        'Opmerking',
    ];

    public function stands()
    {
        return $this->hasMany(Stand::class, 'verkoper_id', 'id');
    }
}