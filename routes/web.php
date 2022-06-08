<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CartController;
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

//primera ruta
//class route -> metodo get

Route::get('hola', function(){
    echo "Hola le dijo la araña a la mosca";
});

Route::get('paises', function(){
   $paises =[
       "Colombia" => [
           "cap" => "Bogotá",
           "mon" => "Peso",
           "pob" => 51.6,
           "ciudades" => [
               "Medellin",
               "Cali",
               "Barranquilla"
           ]
           ],
       "Peru" => [
        "cap" => "Lima",
        "mon" => "Sol",
        "pob" => 32.9,
        "ciudades" => [
            "Cusco",
            "Trujillo"
        ]
        ],
        "Chile" => [
            "cap" => "Santiago de Chile",
            "mon" => "Peso",
            "pob" => 12.1,
            "ciudades" => [
                "Iquique",
                "Concepción",
                "Valparaíso",
                "Temuco"

            ]
            ],
            "Argentina" => [
                "cap" => "Buenos Aires",
                "mon" => "Peso",
                "pob" => 45.3,
                "ciudades" => [
                    "Rosario",
                    "Córdoba",
                    "Mar del Plata"
                ]
                ],
                "Mexico" => [
                    "cap" => "Ciudad de México",
                    "mon" => "Peso",
                    "pob" => 128.9,
                    "ciudades" => [
                        "Guadalajara",
                        "Cancún",
                        "Guanajuato",
                        "Monterrey",
                        "Mexicali"
                    ]
                ]
   ] ;
   return view('paises')
            ->with("paises", $paises);
});

Route::get('prueba', function(){
    return view('productos.create');
});

/**
 * Rutas REST Producto
 */
Route::resource('productos', ProductoController::class);

Route::resource('cart', CartController::class, ['only' => ['index' , 'store', 'destroy']]);