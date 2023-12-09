<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Proveedor;
class ProveedorController extends Controller
{
    public function index(){
        $proveedor = Empleado::all();
        return view('proveedore', compact('proveedor'));
    }

    public function create(){
        return view('crearproveedore');
    }

    public function store(Request $request){
        $proveedor= new Proveedor();
        $proveedor->idproveedor = $request->input("id");
        $proveedor->nombre = $request->input("nombre");
        $proveedor->fechaRegistro = $request->input("fechaRegistro");
        $proveedor->telefono = $request->input("telefono");
        $proveedor->save();
        
        return redirect('empleado.inicio');
    }
}
