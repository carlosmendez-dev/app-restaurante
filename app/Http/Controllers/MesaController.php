<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mesa;
use App\Models\Venta;

class MesaController extends Controller
{
    public function index(){
        $mesas = Mesa::all();
        return view("seleccionar-mesa",["mesas"=>$mesas]);
    }
    
    public function index_admin(){
        $mesas = Mesa::all();
        return view("administrar-mesas",["mesas"=>$mesas]);
    }

    public function edit_table(Request $request){
        $id = $request->id;
        $mesa = Mesa::find($id);
        return view("editar-mesas",["mesa" => $mesa]);
    }

    public function update(Request $request){
        $id = $request->id;
        $mesa = Mesa::find($id);
        $mesa->numero = $request->numero;
        $mesa->disponible = $request->disponible;
        $mesa->save();
        return redirect("/administrar-mesas");
        
    }
    
    public function delete(Request $request){
        $mesa = Mesa::find($request->id);
        $mesa->delete();
        return redirect("/administrar-mesas");
    }

    public function store(Request $request){
        $mesa = new Mesa();
        $mesa->numero = $request->numero;
        $mesa->disponible = 1;
        $mesa->save();
        return redirect("/administrar-mesas");
    }

    public function reserve($id){
        return view("reservar-mesa",["id"=>$id]);
    }

    public function lock_table(Request $request){
        $id = $request->id;
        $mesa = Mesa::find($id);
        $mesa->disponible = 0;
        $venta = new Venta();
        $venta->save();
        $mesa->save();
        return view("lista-productos",["venta"=>$venta,"id"=>$id]);
    }

    public function unlock_table(Request $request){
        $id = $request->id;
        $mesa = Mesa::find($id);
        $mesa->disponible = 1;
        $mesa->save();
        return redirect("seleccionar-mesa");
    }
}
