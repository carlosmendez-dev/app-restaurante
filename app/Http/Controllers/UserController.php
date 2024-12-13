<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $empleados = User::get();
        return view("administrar-empleados",["empleados"=>$empleados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request){
        $id = $request->id;
        $empleado = User::find($id);
        return view("editar-empleados",["empleado"=>$empleado]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request){
        $empleados = User::find($request->id);
        $empleados->name = $request->name;
        $empleados->email = $request->email;
        $empleados->save();
        return redirect("/administrar-empleados");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request){
        $user =  User::find($request->id);
        $user->delete();
        return redirect("administrar-empleados");
    }
}
