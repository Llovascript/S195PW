<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorCliente;
use Illuminate\Http\Request;


class controladorVistas extends Controller
{
    public function formulario(){
        return view('formulario');
    }
    public function consulta(){
        return view('clientes');
    }
    
    public function procesarCliente(validadorCliente $peticion){
        //return 'llego tu formulario';

        //imprimimos todo lo que viene en una peticion
        //return $peticion->all();

        //devuelve la ruta de la peticion
        //return $peticion->path();

        //imprime la url completa de la peticion
        //return $peticion->url();

        //imprime la ip de donde fue enviada la peticion
        // return $peticion->ip();

        //redireccion usando la ruta
        // return redirect('/');

        //redirect con nombre de la ruta
        // return redirect()->route('clientes');

        //redireccion al origen la peticion
        // return back();

        //redireccion con valores de retorno
        // $id=[['usuario'=>1], ['usuario'=>2]];
        // return view('formulario', compact('id'));




        //redireccion con mensaje en sesion
        $usuario=$peticion->input('txtnombre');
        session()-> flash('exito', 'el usuario el usuario: '.$usuario);

        return to_route('formulario');
    }
}