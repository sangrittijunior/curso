<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model {
    use HasFactory;

    protected $table = "paciente";
    protected $primaryKey = "id";

    protected $guarded = ['_token'];


    public static function getAllPacientes(){
        $list = Paciente::select('*')->get();
        return $list;
    }

}
