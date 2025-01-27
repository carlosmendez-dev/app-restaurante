<?php

namespace App\Http\Controllers;
use Inertia\Inertia;

// modelos
use App\Models\Establecimiento;
use App\Models\Mesa;


use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        // obteniendo la primer sucursal
        $establecimiento_actual = session("establecimiento_actual");
        
        if(!$establecimiento_actual){
            $establecimiento_actual = Establecimiento::first()->id;
        }

        // obtengo la lista de las mesas que sean de la sucursal actual
        $mesas = Mesa::where("establecimiento_id",$establecimiento_actual)->get();

        
        
        return Inertia::render('Dashboard',[
            "establecimiento_actual" => Establecimiento::find($establecimiento_actual),
            "establecimientos"=>Establecimiento::all(),
            "mesas"=>$mesas
        ]);
    }
    
    public function update($id){
        session(["establecimiento_actual"=>$id]);
        
    }
}
