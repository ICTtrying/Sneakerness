<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Stand extends Model
{   
    use HasFactory;
    protected $fillable = ['StandType', 'Prijs', 'VerhuurdStatus', 'Isactief', 'VerkoperId'];

    protected $table = 'Stand';
    

    public function sp_getAllStands(): array
    {
        $result = DB::select(query: 'CALL Sp_GetAllStands');
        return $result;
    }
}