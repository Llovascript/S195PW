<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh; text-align: center; ">
        <div>
            <h1>Bienvenido querido Turista</h1>
            <h5>presiona el boton para iniciar...</h5>
            <a href="{{ route('formulario') }}" class="btn btn-success">Comencemos</a>
        </div>
    </div>
</body>
</html>