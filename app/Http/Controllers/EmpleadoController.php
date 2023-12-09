<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Empleado;

class EmpleadoController extends Controller
{
    public function index(){
        $empleados = Empleado::all();
        return view('empleado', compact('empleado'));
    }

    public function create(){
        return view('crearempleado');
    }

    public function store(Request $request){
        $empleado= new Empleado();
        $empleado->idempleado = $request->input("idempleado");
        $empleado->nombre = $request->input("nombre");
        $empleado->apellido = $request->input("apellido");
        $empleado->fechaIngreso = $request->input("fechaIngreso");
        $empleado->salario = $request->input("salario");
        $empleado->save();
        
        return redirect('empleado.index');
    }

}
