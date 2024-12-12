<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plato;

class PlatoController extends Controller{

    public function index(){
        // mostrar la vista de platillo
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
