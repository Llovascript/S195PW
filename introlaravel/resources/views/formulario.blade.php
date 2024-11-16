@extends('layouts.vistas')

  @section('contenido1')
  @section('titulo', 'formulario clientes')
      
  
    
    {{--formulario--}}

    <div class="container mt-5 col-6">
        @if (session('exito'))
            <x-Alert tipo="success">{{session('exito')}}</x-Alert>
        @endif

        @session('exito')
            <x-Alert tipo="danger">{{$value}}</x-Alert>
        @endsession

        @session('exito')
            <script>
                Swal.fire({
                    title: "Respuesta del servidor",
                    text: '{{$value}}',
                    icon: "success"
                });
            </script>
        @endsession
        <div class="card font-monospace">
    <div class="card-header fs-5 text-center text-primary">
        {{__('Registro de clientes')}}
    </div>

    <div class="card-body text-justify">
        <form action="{{route('procesar')}}" method="POST">
        {{-- llave de paso para envios por post --}}
        @csrf
        <div class="mb-3">
            <label for="txtnombre" class="form-label">{{__('Nombre')}}</label>
            <input type="text" class="form-control" name="txtnombre" id="txtnombre">
            <small class="text-danger fst-italic">{{$errors->first('txtnombre')}}</small>
        </div>

        <div class="mb-3">
            <label for="txtapellido" class="form-label">{{__('Apellido')}}</label>
            <input type="text" class="form-control" name="txtapellido" id="txtapellido">
            <small class="text-danger fst-italic">{{$errors->first('txtapellido')}}</small>
        </div>

        <div class="mb-3">
            <label for="txtcorreo" class="form-label">{{__('Correo')}}</label>
            <input type="text" class="form-control" name="txtcorreo" id="txtcorreo">
            <small class="text-danger fst-italic">{{$errors->first('txtcorreo')}}</small>
        </div>

        <div class="mb-3">
            <label for="txttel" class="form-label">{{__('Telefono')}}</label>
            <input type="text" class="form-control" name="txttel" id="txttel">
            <small class="text-danger fst-italic">{{$errors->first('txttel')}}</small>
        </div>
    </div>

    <div class="card-footer text-muted">
        <div class="d-grid gap-2 mt-2 mb-1">
            <button type="submit" class="btn btn-success btn-sm">{{__('Guardar Cliente')}}</button>
        </form>
    </div>
    </div>
</div>{{--Cierre divContaner--}}
{{--Finaliza tarjeta con formulario--}}
@endsection