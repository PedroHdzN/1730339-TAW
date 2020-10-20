<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecetaController extends Controller
{
    //Primer controlador que retornará un String
    public function __invoke(){

        //Creamos un array para mandar a la vista:
        //Consulta No.1: envio del array 'recetas' a la vista:
        $recetas = [
            'Receta de fresa',
            'Receta de Uva',
            'Receta de Limon'
        ];

        //Consulta No.1: envio del array 'recetas' a la vista:
        $categorias = [
            'Comida mexicana',
            'Comida argentina',
            'Postres'
        ];

        //Pasar a la vista el array (sintaxis 1):
       

        //Retornar a la vista recetas/infex
        return view('recetas.index')
                ->with('recetas', $recetas)
                ->with('categorias', $categorias);

        //Pasar a la vista el array (sintaxis 2):
        //return view('recetas.index', compact('recetas', 'categorias'));
    }
}
