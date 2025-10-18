<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Articulo DM</title>
    <H1>Crear Articulos</H1>

    {{-- validamos la variable erros del validate del controlador 
    para mostrar si hubo errores al guardar 
    muestra lso errores en una lista--}}
    {{-- @if ($errors->any())
        <div>
            <h2>errores</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif --}}


</head>
<body>
    <form action="../Articulo" method="POST">
        @csrf
        <label for="">Nombre articulo
            {{-- Con el metodo old en el value llenamos de nuevo el input 
            si detecta errores ocn al ifnormacion apsada --}}
            <input type="text" name="nombre" value="{{ old('nombre') }}">
        </label>

        {{-- VAlidacion de erro para mostrar debajo del campo --}}
        @error('nombre')
            <p>{{$message}}</p>
        @enderror

        <label for="">Codigo articulo
            <input type="text" name="codigo_articulo" value="{{ old('codigo_articulo') }}">
        </label>
         @error('codigo_articulo')
            <p>{{$message}}</p>
        @enderror
        <label for="">Activo
            <input type="text" name="activo" value="{{ old('activo') }}">
        </label>
         @error('activo')
            <p>{{$message}}</p>
        @enderror
        <button type="submit">Guardar</button>
    </form>
</body>
</html>