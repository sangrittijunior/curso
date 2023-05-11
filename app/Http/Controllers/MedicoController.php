<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Medico;

class MedicoController extends Controller {

    public function index(){
        $medicos = Medico::getAllMedicos();
        return view ('medicos.index', ['medicos' => $medicos]);
    }
}