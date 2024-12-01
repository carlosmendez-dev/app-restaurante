<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// rutas para probar vistas
Route::get("/seleccionar-sucursal",function(){return view("seleccionar-sucursal");});
Route::get("/menu",function(){return view("menu");});
Route::get("/seleccionar-mesa",function(){return view("seleccionar-mesa");});
Route::get("/registrar-cliente",function(){return view("registrar-cliente");});
Route::get("/lista-productos",function(){return view("lista-productos");});
Route::get("/realizar-pago",function(){return view("realizar-pago");});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
