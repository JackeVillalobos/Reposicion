<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Producto;

class ProductoController extends Controller
{
    public function index(){
        $productos = Empleado::all();
        return view('productos', compact('productos'));
    }

    public function create(){
        return view('crearproductos');
    }

    public function store(Request $request){
        $producto= new Producto();
        $productoproducto->id = $request->input("id");
        $producto->descripcion = $request->input("descripcion");
        $producto->precio = $request->input("precio");
        $producto->stock = $request->input("stock");
        $producto->pagaIsv = $request->input("pagaIsv");
        $empleado->save();
        
        return redirect('empleado.index');
    }
}
