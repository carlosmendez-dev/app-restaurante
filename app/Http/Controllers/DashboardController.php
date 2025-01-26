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
        $establecimiento_actual = Establecimiento::first();

        return Inertia::render('Dashboard',[
            "establecimiento_actual" => $establecimiento_actual,
            "establecimientos"=>Establecimiento::all(),
            "mesas"=>Mesa::all()
        ]);
    }
}
