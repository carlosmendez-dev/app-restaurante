<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plato;
use App\Models\DetalleVenta;

class PlatoController extends Controller{

    public function index(Request $request){
        $platos = Plato::all();
        return view("agregar-producto",["id"=>$request->id,"platos"=>$platos,"venta"=>$request->venta]);
    }


    public function detail(Request $request){
        $detalle = new DetalleVenta();
        $id_plato = $request->plato_id;
        $id_venta = $request->venta;
        $detalle->id_venta = $id_venta;
        $detalle->id_plato = $id_plato;
        $detalle->save();
        return view("lista-productos",["venta"=>$id_venta]);
    }


    public function list_products(Request $request){
        $id = $request->id;
        return view("lista-productos",["id"=>$id]);

    }

    public function store(Request $request){
        $product = new Plato();
        $product->nombre = $request->nombre;
        $product->nombre = $request->precio;
        $product->save();
    }

    public function products(){
        $products = Plato::all();
        return response()->json($products);
    }

}
