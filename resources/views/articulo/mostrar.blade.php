<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Articulo DM</title>
    <a href="../Articulo">volver articulos</a>
    <H1>Articulo:  {{ $articulo->nombre_articulo }}</H1>
    <h2>Codigo Articulo:  {{ $articulo->codigo_articulo }}</h2>
    <h2>Foto:  {{ $articulo->foto }}</h2>
    <h2>Fecha ingreso:  {{ $articulo->created_at }}</h2>
 <a href="{{ $articulo->id }}/Editar">Editar POST</a>
<body>
    
</body>
</html>