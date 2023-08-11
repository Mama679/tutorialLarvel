<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebasController extends Controller
{
    public function recibir(Request $request){
        $method = $request->method();
        $nombre = $request->input('nombre');
        $edad = $request->input("edad", 18);
        echo "Valor del parametro enviado por (".$method."): ".$nombre."<br>";
        echo "Edad enviado por (".$method."):".$edad;
    }

}
