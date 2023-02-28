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


    public function agregar(){/**ESTA FUNCION MANDA LLAMAR A EL FORMULARIO CON LA VISTA. */
        return view('productos.agregar');
    }
    
    public function create (Request $request){

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
     * Show the form for creating a new resource.
     */
   
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
