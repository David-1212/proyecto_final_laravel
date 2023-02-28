<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index-productos',compact('productos'));
    }

    
    public function create (Request $request){

        return view('productos.agregar');
    }
      

    /**
     * Show the form for creating a new resource.
     */
   
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'nombrep' => 'required',
            'precio' => 'required',
            'descripcion' => 'required',
        ]);
        $producto = new producto();
        $producto->nombre_producto = $request->nombrep; 
        $producto->precio = $request->precio; 
        $producto->descripcion = $request->descripcion; 
        $producto->save();

        return redirect('/productos');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        return view ('producto.index-productos');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        return view ('productos.edit-producto');
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
