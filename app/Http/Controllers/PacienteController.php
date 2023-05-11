<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

use Auth;
use Session;
use Redirect;

class PacienteController extends Controller {

    public function index(){
        $pacientes = Paciente::getAllPacientes();
        return view ('pacientes.index', ['pacientes' => $pacientes]);
    }

    public function create(){
        return view ('pacientes.add');
    }
    
    public function store(Request $request){
        $store = $request->all();
        $store['nascimento'] = implode('-', array_reverse(explode('/', $store['nascimento'])));

        $paciente = new Paciente();

        $paciente->fill($store);

        $paciente->save();

        return Redirect::to('/paciente');

    }

        
    public function edit(){

    }

    public function update(){
        
    }

    public function destroy($id){

        $paciente = Paciente::find($id);
        $paciente->delete();

        return Redirect::to('/paciente');
    }
}
