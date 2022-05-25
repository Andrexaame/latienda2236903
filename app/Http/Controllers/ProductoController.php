<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Models\Categoria;
use App\Models\Producto;
use App\Http\Requests\StoreProductoRequest;
use Illuminate\Support\Facades\Validator;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //seleccionar los productos en un arreglo
        $productos = Productos::all();
        //mostrar la vista del catalogo, llevandole los productos
        return view('productos.index')
        ->whit('productos', $productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Seleccionar marcas en bd: Model Marca
        $marcas = Marca::all();
        //Seleccionar categorias en bd: Model Categoria
        $categorias = Categoria::all();
        return view("productos.create")
        ->with("marcas", $marcas)
        ->with("categorias", $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductoRequest $request)
    {
            //validacion exitosa
         $p = new Producto();
         $p->nombre = $request->nombre; 
         $p->descripcion = $request->desc; 
         $p->precio = $request->precio; 
         $p->marca_id = $request->marca; 
         $p->categoria_id = $request->categoria;

        //ruta donde se almacena el archivo
         $ruta = public_path(). "/img";       
         //objeto file
         $archivo = $request-> imagen;
         $p -> imagen = $archivo->getClientOriginalName();

         echo ('hr');
        //movemos archivo a ruta
         $archivo->move($ruta, $archivo->getClientOriginalName());
          $p->save();
          return redirect('productos/create')
          ->with('mensaje', "Producto registrado correctamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($producto)
    {
        echo "Aquí se va a mostrar el detalle de producto";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($producto)
    {
        echo "Aquí se muestra el formulario de editar producto";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        echo "Aquí se va a guardar el producto editado";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        echo "Aquí se eliminará el producto";
    }
}
