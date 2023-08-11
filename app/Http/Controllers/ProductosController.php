<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function crear(Request $request){
        return view('productos.create');
    }

    public function store(){

    }
}


?>