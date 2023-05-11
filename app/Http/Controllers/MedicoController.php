<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Medico;

use Redirect;

class MedicoController extends Controller {

    public function index(){
        $medicos = Medico::getAllMedicos();
        return view ('medicos.index', ['medicos' => $medicos]);
    }

    public function create(){
        return view ('medicos.add');
    }

    public function store(Request $request){
        $store = $request->all();
     
        $medico = new Medico();            

        $medico->fill($store);

        $medico->save();

        return Redirect::to('/medico');

    }
}