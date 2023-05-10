<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model {
    use HasFactory;

    protected $table = "medico";
    protected $primaryKey = "id";

    protected $guarded = ['_token'];


    public static function getAllMedicos(){
        $list = Medico::select('*')->get();
        return $list;
    }

}
