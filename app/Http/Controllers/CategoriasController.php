<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriasController extends Controller
{
    public function mostrar($nombre){
        return view('categoria.mostrar',['nombre' => $nombre]);
    }

    public function recibirPost(Request $request){
         echo "nombre: ". $request->input('nombre');
    }


}
