<?php

namespace App\Http\Controllers;

use App\Http\Requests\guardarArticuloRequest;
use App\Http\Requests\updateArticuloRequest;
use App\Models\Articulo;
use Illuminate\Http\Request;

class  ArticuloController extends Controller
{
    public function index(){

        $articulos = Articulo::orderBy('id','desc')
            ->paginate(5);
        return view('articulo.index',compact('articulos'));
    }
 
    public function crearArticulo(){
        return view('articulo.crear'); 
    }

    //vamos a utilizar el 'guardarArticuloRequest', sino utilizariamos 'request'
    public function guardarArticulo(guardarArticuloRequest $request){

        //validacion de campos en el formulario
        //desde el controladorlo vamosa pasar a un Request de laravel
        // $request->validate([
        //     'nombre' => 'required',
        //     'codigo_articulo' => 'required|min:5|max:50|unique:Articulos',
        //     'activo' => 'required|numeric',
        // ]);

        $articulo = new Articulo();

        $articulo->nombre_articulo = $request->nombre;
        $articulo->codigo_articulo = $request->codigo_articulo;
        $articulo->activo = $request->activo;
        $articulo->save();
        
        return redirect('Articulo');
    }

    public function editarArticulo($articulo){
        $articulo = Articulo::find($articulo);
        return view('articulo.editar',compact('articulo')); 
    }

    public function guardarEdicion(Request $request,$articulo){
        $articulo =  Articulo::find($articulo);

        $articulo->nombre_articulo = $request->nombre;
        $articulo->codigo_articulo = $request->codigo;
        $articulo->activo = $request->activo;
        $articulo->save(); 

        return redirect('/Articulo/'.$articulo->id);
        }

    public function mostrarArticulo($articulo)
    {
        
        $articulo = Articulo::find($articulo);
        return view('articulo.mostrar',[
            'articulo' => $articulo
        ]); 
    }

}
