<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;
use Illuminate\Support\Facades\DB;

class clienteControlador extends Controller
{
    public function home(){
        return view('bienvenido');}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultaClientes=DB::table('clientes')->get();
        return view('clientes',compact('consultaClientes'));
    }

    /**
     * la usamos para ejecutar el insert
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * La usamos para ejecutar el insert 
     */
    public function store(validadorCliente $request)
    {
        DB::table('clientes')->insert([
            'nombre'=>$request->input('txtnombre'),
            'apellido'=>$request->input('txtapellido'),
            'correo'=>$request->input('txtcorreo'),
            'tel'=>$request->input('txttel'),
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

        $usuario=$request->input('txtnombre');
        session()-> flash('exito', 'el usuario el usuario: '.$usuario);

        return to_route('formulario');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
