<?php

namespace App\Http\Controllers;

use App\Receta;
use App\Categoria;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {        
        //Se Mostraran las recetas por la cantidad de votos
        //$votadas = Receta::has('likes', '>', 1)->get();
        $votadas = Receta::withCount('likes')->orderBy('likes_count', 'desc')->take(3)->get();

        //Obtener las recetas mas nuevas
        $nuevas = Receta::latest()->take(5)->get();

        //Aquí se debeerá bbtener todas las categorias
        $categorias = Categoria::all();

        //Array para poder agrupar las recetas por su categoría
        $recetas = [];

        foreach($categorias as $categoria) {
            $recetas[ Str::slug($categoria->nombre) ][] = Receta::where('categoria_id', $categoria->id)->take(3)->get();
        }
        return view('inicio.index', compact('nuevas', 'recetas','votadas'));
    }
}
