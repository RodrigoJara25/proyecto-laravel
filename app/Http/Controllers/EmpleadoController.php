<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['empleados'] = Empleado::paginate(5);
        return view('empleado.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        // Recibimos la informacion 
        // $datosEmpleado = request()->all();
        $datosEmpleado = request()->except('_token');
        if ($request->hasFile('Foto')) {
            $datosEmpleado['Foto'] = $request->file('Foto')->store('uploads','public');
        }
        Empleado::insert($datosEmpleado);   // Hacemos un Insert de los Datos en la Tabla 'empleados'

        // return response()->json($datosEmpleado);
        return redirect('empleado')->with('mensaje', 'Empleado registrado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $empleado = Empleado::findOrFail($id);
        return view('empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // recibe todos los datos a excepcion del token y del metodo
        $datosEmpleado = $request->except(['_token', '_method']);

        // Verificar si se ha subido una nueva imagen
        if ($request->hasFile('Foto')) {
            // Obtener el empleado actual
            $empleado = Empleado::findOrFail($id);

            // Eliminar la imagen anterior si existe
            if ($empleado->Foto) {
                Storage::delete('public/'.$empleado->Foto);
            }

            // Guardar la nueva imagen
            $fotoPath = $request->file('Foto')->store('empleados', 'public');
            $datosEmpleado['Foto'] = $fotoPath;
        }

        Empleado::where('id','=',$id)->update($datosEmpleado);

        //if($request->hasFile('Foto')){}

        $empleado = Empleado::findOrFail($id);
        return view('empleado.edit', compact('empleado'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $empleado = Empleado::findOrFail($id);
        // Intentar eliminar la foto si existe
        if ($empleado->Foto) {
            Storage::delete('public/'.$empleado->Foto);
        }

        // Eliminar el empleado de la base de datos
        $empleado->delete();

        return redirect('/empleado')->with('mensaje', 'Empleado eliminado con exito');
    }
}
