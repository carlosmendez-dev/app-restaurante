<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Establecimiento;

class EstablecimientoController extends Controller
{
    public function index(){
        $establecimientos = Establecimiento::all();
        return view("seleccionar-mesa");
    }
    
    
    public function index_admin(){
        $establecimientos = Establecimiento::all();
        return view("administrar-establecimientos",["establecimiento"=>$establecimientos]);
    }

    public function edit_table(Request $request){
        $id = $request->id;
        $establecimientos = Establecimiento::find($id);
        return view("editar-establecimiento",["establecimiento" => $establecimientos]);
    }

    public function update(Request $request){
        $id = $request->id;
        $establecimientos = Establecimiento::find($id);
        $establecimientos->nombre;
        $establecimientos->numero;
        $establecimientos->direccion;
        $establecimientos->save();
        return redirect("/administrar-establecimientos");
        
    }
    
    public function delete(Request $request){
        $establecimientos = Establecimiento::find($request->id);
        $establecimientos->delete();
        return redirect("/administrar-establecimientos");
    }
}
