<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = 'articulos';

    //esto es uan prueba de mutadores, vamos a fijar que lso nombres qu eingresen se conviertan en minuscula
    protected function nombre_articulo(): Attribute
    {
        return Attribute::make(
            set: function($value)
            {
                return strtolower($value); 
            }
        );
    }
}
