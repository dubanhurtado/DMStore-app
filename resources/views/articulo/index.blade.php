<x-app-layout>
</x-app-layout>

<a href="Articulo/Crear">Nuevo  articulo</a>
<ul>
    @foreach ($articulos as $articulo)
    <li>
        <a href="Articulo/{{ $articulo->id }}"> {{ $articulo->nombre_articulo }} </a>
    </li>
    @endforeach
</ul>
{{ $articulos->links() }}