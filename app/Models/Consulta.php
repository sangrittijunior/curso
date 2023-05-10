<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model {
    use HasFactory;

    protected $table = "consulta";
    protected $primaryKey = "id";

    protected $guarded = ['_token'];


    public static function getAllConsultas(){
        $list = Consulta::select('*')->get();
        return $list;
    }

}
