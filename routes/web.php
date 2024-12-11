<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MesaController;
use App\Models\Mesa;

Route::get('/', function () {
    return view('welcome');
});

// rutas para probar vistas
Route::get("/seleccionar-sucursal",function(){return view("seleccionar-sucursal");});
Route::get("/menu",function(){return view("menu");});
Route::get("/seleccionar-mesa",[MesaController::class,"index"]);
Route::get("/registrar-empleados",function(){return view("registrar-empleados");});
Route::get("/registrar-mesas",function(){return view("registrar-mesas");});
Route::get("/registrar-establecimientos",function(){return view("registrar-establecimientos");});
Route::get("/registrar-platos",function(){return view("registrar-platos");});
Route::get("/reservar-mesa/{id}",[MesaController::class,"reserve"]);
Route::get("/lista-productos",function(){return view("lista-productos");});
Route::get("/realizar-pago",function(){return view("realizar-pago");});
Route::get("/administrar",function(){return view("administrar");});
Route::get("/administrar-mesas",function(){return view("administrar-mesas");});
Route::get("/administrar-platos",function(){return view("administrar-platos");});
Route::get("/administrar-clientes",function(){return view("administrar-clientes");});
Route::get("/administrar-establecimientos",function(){return view("administrar-establecimientos");});
Route::get("/administrar-empleados",function(){return view("administrar-empleados");});
Route::get("/editar-mesas",function(){return view("editar-mesas");});
Route::get("/editar-platos",function(){return view("editar-platos");});
Route::get("/editar-establecimiento",function(){return view("editar-establecimiento");});
Route::get("/editar-empleados",function(){return view("editar-empleados");});
Route::get("/lista-productos",function(){return view("lista-productos");});

Route::post("/lock-table",[MesaController::class,"lock_table"]);
Route::post("/unlock-table",[MesaController::class,"unlock_table"]);

// metodos del crud
Route::get("/mesas",[MesaController::class,"index"]);
Route::post("/mesas",[MesaController::class,"store"]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
