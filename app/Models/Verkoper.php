<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Exception;

class Verkoper extends Model
{
    use HasFactory;

    protected $table = 'verkoper';

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

    public static function safeCreate(array $data)
    {
        try {
            return self::create($data);
        } catch (Exception $e) {
            return null; 
        }
    }
}


