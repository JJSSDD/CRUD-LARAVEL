<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\equipo;
use Illuminate\Support\Facades\DB;

class equipoController extends Controller
{
    public function data(){
        $equipo = equipo::select('id','nombre','region','n_integrantes','f_creacion')->get();
        return datatables()->of($equipo)->toJson();
    }

    public function crear(Request $request){
        $newEquipo = equipo::create([
            'nombre' => request('nombre'),
            'region' => request('region'),
            'n_integrantes' => request('n_integrantes'),
            'f_creacion' => request('f_creacion')]);
        return redirect('index');     
    }

    public function editar(equipo $equipo, Request $request){
        $data = $request->validate([
            'nombre' => 'nullable',
            'region' => 'nullable',
            'n_integrantes' => 'nullable',
            'f_creacion' => 'nullable'
        ]);
        $equipo->update($data);
        return redirect('index'); 
    }

   
}
