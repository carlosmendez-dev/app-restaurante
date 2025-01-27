<?php

namespace App\Http\Controllers;
use Inertia\Inertia;

// modelos
use App\Models\Establecimiento;
use App\Models\Mesa;
use App\Models\Platillo;


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
        $mesas = Mesa::where("establecimiento_id",$establecimiento_actual)->where("disponible","1")->get();

        $reservaciones = Mesa::where("establecimiento_id",$establecimiento_actual)->where("disponible","0")->get();

        $pĺatillos = Platillo::all();
        
        
        return Inertia::render('Dashboard',[
            "establecimiento_actual" => Establecimiento::find($establecimiento_actual),
            "establecimientos"=>Establecimiento::all(),
            "mesas"=>$mesas,
            "reservaciones"=>$reservaciones,
            "platillos"=>$pĺatillos
        ]);
    }
    
    public function update($id){
        session(["establecimiento_actual"=>$id]);
        
    }

    public function reservar(Request $requets){
        $mesa = Mesa::find($requets->id);
        $mesa->comensal = $requets->comensal;
        $mesa->disponible = 0;
        $mesa->save();
    }

    public function cancelar_reservacion(Request $requets){
        $mesa = Mesa::find($requets->id);
        $mesa->comensal = "";
        $mesa->disponible = 1;
        $mesa->save();
    }
}
