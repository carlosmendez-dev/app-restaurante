<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plato;

class PlatoController extends Controller{
    public function list_products(Request $request){
        $id = $request->id;
        return view("lista-productos",["id"=>$id]);
    }
}
