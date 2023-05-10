<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problema extends Model {
    use HasFactory;

    protected $table = "problema";
    protected $primaryKey = "id";

    protected $guarded = ['_token'];


    public static function getAllProblemas(){
        $list = Problema::select('*')->get();
        return $list;
    }

}
