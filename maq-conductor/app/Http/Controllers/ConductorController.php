<?php

namespace App\Http\Controllers;

use App\Models\Conductor;
use Illuminate\Http\Request;

class ConductorController extends Controller
{
    public function index()
    {
        $conductores = Conductor::paginate(10);
        return view('conductor.index', compact('conductores'));
    }

    public function create()
    {
        return view('conductor.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'ap_paterno' => 'required',
            'ap_materno' => 'required',
            'especialidad' => 'required',
            'edad' => 'required',
            'estado' => 'required',
        ]);

        $conductor = new Conductor();
        $conductor->nombre = $request->get('nombre');
        $conductor->ap_paterno = $request->get('ap_paterno');
        $conductor->ap_materno = $request->get('ap_materno');
        $conductor->especialidad = $request->get('especialidad');
        $conductor->edad = $request->get('edad');
        $conductor->estado = $request->get('estado');

        $conductor->save();

        return redirect('/conductores');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $conductor = Conductor::find($id);
        return view('conductor.edit', compact('conductor'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'ap_paterno' => 'required',
            'ap_materno' => 'required',
            'especialidad' => 'required',
            'edad' => 'required',
            'estado' => 'required',
        ]);

        $conductor = Conductor::find($id);
        
        $conductor->nombre = $request->get('nombre');
        $conductor->ap_paterno = $request->get('ap_paterno');
        $conductor->ap_materno = $request->get('ap_materno');
        $conductor->especialidad = $request->get('especialidad');
        $conductor->edad = $request->get('edad');
        $conductor->estado = $request->get('estado');

        $conductor->save();

        return redirect('/conductores');
    }

    public function destroy($id)
    {
        $conductor = Conductor::find($id);
        $conductor->delete();
        return redirect('/conductores');
    }
}
