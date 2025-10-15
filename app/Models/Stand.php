<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log; // om fouten te loggen

class Stand extends Model
{
    use HasFactory;

    protected $table = 'Stand'; // Zorg dat dit exact overeenkomt met je tabelnaam

    protected $fillable = [
        'StandType',
        'Prijs',
        'VerhuurdStatus',
        'Isactief',
        'verkoper_id',
        'Dagen',
    ];

    public static function getAllStands()
    {
        try {
            // Probeer alle stands op te halen
            return self::all();
        } 
        catch (\Exception $e) {
            // Log de fout voor ontwikkelaars
            Log::error('Fout bij ophalen van stands: ' . $e->getMessage());
            return collect(); // lege collectie voorkomt errors in de view
        }
    }
}
