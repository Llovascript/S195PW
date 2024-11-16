@extends('layouts.vistas')

  @section('contenido1')
  @section('titulo', 'formulario clientes')
      
    <x-Card encabezado="hola s195" titulo="titulo1" textoBoton="Guardar">Prueba Slot para contenido</x-Card>

    <x-Card encabezado="yea s195" titulo="titulo2" textoBoton="No Guardar">El diablooooooo</x-Card>
    
    <x-Alert tipo="success">Alert verde</x-Alert>

    <x-Alert tipo="danger">Alert rojo</x-Alert>

@endsection