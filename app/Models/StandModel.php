<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class StandModel extends Model
{
    public function sp_getAllStands()
    {
        $result = DB::select('CALL Sp_GetAllStands');
        return $result;

    }
}
