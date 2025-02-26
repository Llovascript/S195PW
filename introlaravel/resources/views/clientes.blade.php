
@extends('layouts.vistas')

@section('contenido2')
@section('titulo', 'clientes')

    <div class="container mt-5 col-md-8">
        @foreach ($consultaClientes as $cliente)
        <div class="card-text-justify font-monospace mt-3">
            <div class="card-header fs-5 text-primary">
                {{$cliente->nombre}}
            </div>
            <div class="card-body">
                <h5 class="fw-bold">{{$cliente->correo}}</h5>
                <h5 class="fw-medium">{{$cliente->tel}}</h5>
                <p class="card-text" fw-lighter></p>
            </div>
            <div class="card-footer text-muted">
                <button type="submit" class="btn btn-warning btn-sm">actualizar</button>
                <button type="submit" class="btn btn-danger btn-sm">eliminar</button>
            </div>
        </div>
        @endforeach
    </div>
@endsection