<?php

namespace App\Models\User\Personally;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class career extends Model
{
    use HasFactory;

    //Lấy danh sách ngành nghề
    public function getFieldCareer($id_career = null)
    {
        $result = DB::table('field_career');

        if (!empty($id_career)) {
            $result = $result->where('id_career', $id_career);
        }

        $result = $result->get();

        return $result;
    }

    //Lấy danh sách cấp bậc
    public function getLevel()
    {
        $result = DB::table('level_personally')->get();

        return $result;
    }
}