<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Inventario;
use Illuminate\Http\Request;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {return view ('productos.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validación de los datos recibidos
    $validatedData = $request->validate([
        'nombre' => 'required|string|max:255',
        'descripcion' => 'required|string|max:5000',
        'descripcion_corta' => 'required|string|max:2000',

        'precio_compra' => 'required|numeric',
        'precio_venta' => 'required|numeric',
        'sku' => 'required|numeric',
        'categoria' => 'required|string|max:255',
        'proveedor' => 'required|string|max:255',
    ]);



    // Creación del nuevo producto
    $producto = Producto::create($validatedData);


    $insertInventario = new Inventario();
    $insertInventario->producto_id = $producto->id;
    $insertInventario->save();

    // Retornar una respuesta, redireccionar o mostrar un mensaje de éxito
    flash()->success('Productos creado existosamente.');
    return back();
}


    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
