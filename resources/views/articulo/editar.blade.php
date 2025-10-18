
 <form action="../{{$articulo->id}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Nombre articulo
            <input type="text" name="nombre" value="{{ $articulo->nombre_articulo }}" >
        </label>
        <label for="">Codigo articulo
            <input type="text" name="codigo" value="{{ $articulo->codigo_articulo }}">
        </label>
        <label for="">Activo
            <input type="text" name="activo" value="{{ $articulo->activo }}">
        </label>
        <button type="submit">Editar Articulo</button>
    </form> 