<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mesa;

class MesaController extends Controller
{
    public function index(){
        $mesas = Mesa::all();
        return view("seleccionar-mesa",["mesas"=>$mesas]);
    }

    public function store(Request $request){
        $mesa = new Mesa();
        $mesa->numero = $request->numero;
        $mesa->disponible = $request->disponible;
        $mesa->save();
    }

    public function reserve($id){
        return view("reservar-mesa",["id"=>$id]);
    }

    public function lock_table(Request $request){
        $id = $request->id;
        $mesa = Mesa::find($id);
        $mesa->disponible = 0;
        $mesa->save();
        return view("lista-productos",["id"=>$id]);
    }

    public function unlock_table(Request $request){
        $id = $request->id;
        $mesa = Mesa::find($id);
        $mesa->disponible = 1;
        $mesa->save();
        return redirect("seleccionar-mesa");
    }
}
