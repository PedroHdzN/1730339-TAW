<?php

namespace App\Http\Controllers;

use App\Receta;
use Illuminate\Http\Request;

class LikesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function update(Request $request, Receta $receta)
    {   
        //Deberá guardar los likes que cada usuario le da a una receta
        return auth()->user()->meGusta()->toggle($receta);
    }

}
