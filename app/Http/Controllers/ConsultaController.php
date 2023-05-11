<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consulta;
use App\Models\Paciente;
use App\Models\Medico;
use App\Models\Problema;

use Auth;
use Session;
use Redirect;

class ConsultaController extends Controller {

    public function index(){
        $consultas = Consulta::getAllConsultas();
        return view ('consultas.index', ['consultas' => $consultas]);
    }

    public function create(){
        $pacientes = Paciente::getAllPacientes();
        $medicos   = Medico::getAllMedicos();
        $problemas = Problema::getAllProblemas();
        return view ('consultas.add', ['pacientes' => $pacientes, 'medicos' => $medicos, 'problemas' => $problemas]);
    }

    public function store(Request $request){
        $store = $request->all();
        $store['data_hora'] = implode('-', array_reverse(explode('/', $store['data_hora'])));

        $user = Auth::user();
        $consulta = new Consulta();            
        $consulta->user_id = $user->id;

        $consulta->fill($store);

        $consulta->save();

        return Redirect::to('/consulta');


    }
    
    public function edit(){

    }

    public function update(){
        
    }

    public function destroy($id){

        $consulta = Consulta::find($id);
        $consulta->delete();

        return Redirect::to('/consulta');
    }

}
