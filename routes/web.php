<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\PruebasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    '/test',
    /*[
        'middleware' => 'domingo', function(){
        return 'Probando ruta con middleware';
    }], */
    function(){
        //return '<h1>Prueba No1 :)</h1>';
        //return view('cliente');
        return response()
            ->view('cliente')
            ->header('status',200);
    }
);

//Envio de parametros en una ruta
Route::get('colaboradores/{nombre}', function($nombre){
	//return "Mostrando el colaborador ".$nombre;
    return response("Mostrando el colaborador ".$nombre,404);
});

Route::get('productos/{id}', function($id_producto){
	//return "Mostrando el producto ".$id_producto." de la tienda";
    return view('productos/index',['id' =>$id_producto]);
});

Route::get('agenda/{mes}/{ano}', function($mes, $ano){
	return "Viendo la agenda de ". $mes." de ". $ano;
});

Route::get('categoria/{nombre}',[CategoriasController::class, 'mostrar']);
Route::post('/categoria',[CategoriasController::class, 'recibirPost']);

/*Route::get('categoria/{categoria}/{pagina?}', function($categoria, $pagina = 1){
	return "Viendo categoría ". $categoria." y página ".$pagina;
});*/
//Validación del tipo de pararmaetros
Route::get('clientes/{nombre}', function($nombre){
	//return "Mostrando el cliente $nombre";
    return view('clientes.index')->with(['nombre' => $nombre]);
})->where(array('nombre' => '[a-zA-Z]+'));

Route::match(['get','post'],'input',[PruebasController::class,'recibir']);

Route::get('producto/crear',[ProductosController::class,'crear']);
Route::post('producto',[ProductosController::class,'store']);

//Rutas conntroladores
//Route::get('tienda/productos/{id}','TiendaController@producto');
/*use App\Http\Controllers\UserController; 
Route::get('/user', [UserController::class, 'index']);*/

