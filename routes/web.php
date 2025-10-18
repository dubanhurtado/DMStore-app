<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticuloController;
use App\Models\Articulo;

//Controlador de pagina de inicio
Route::get('/', HomeController::class);

//Controlador de Articulo
Route::get('/Articulo', [ArticuloController::class,'index']);

//Crear articulo
Route::get('/Articulo/Crear', [ArticuloController::class,'crearArticulo']);
Route::post('/Articulo', [ArticuloController::class,'guardarArticulo']);

//Mostrar Articulo
Route::get('/Articulo/{articulo}', [ArticuloController::class,'mostrarArticulo']);


//Editar Articulo
Route::get('/Articulo/{articulo}/Editar', [ArticuloController::class,'editarArticulo']);
//Editar articulo guardar informacion
Route::put('/Articulo/{articulo}', [ArticuloController::class,'guardarEdicion']);


//Prueba para la ceracion de articulo
Route::get('pruebaCreacion',function(){
    $Articulo   = new  Articulo;
    $Articulo->codigo_articulo = '987321';
    $Articulo->nombre_articulo = 'DUBAN HURTADO MONSALVE';
    $Articulo->activo = '0';
    $Articulo->save();

    return $Articulo; 

});

//Prueba para la busqueda de articulo
Route::get('pruebaFind',function(){
$Articulo   = new  Articulo;
$Articulo = Articulo::find(5);
return $Articulo->created_at->Format('d-m-Y');

});

//Prueba para la busqueda de articulo por condicion y modificacion
Route::get('prueba',function(){
    $Articulo   = new  Articulo;
    $Articulo = Articulo::where('nombre_articulo','Jordan retro 1')
            ->first();
    $Articulo->activo = '1';
    $Articulo->save();
    return $Articulo;

});

//Traer mas de 1 registro
Route::get('pruebaBuscar',function(){
    $Articulo   = new  Articulo;

    //Todos los articulo
    //$Articulo = Articulo::all();

    //todos los articulso con filtro
    $Articulo = Articulo::where('id',' >=','2')
                ->get();
    return $Articulo;

});