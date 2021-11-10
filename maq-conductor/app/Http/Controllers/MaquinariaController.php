<?php

namespace App\Http\Controllers;

use App\Models\Conductor;
use App\Models\Maquinaria;
use Illuminate\Http\Request;

class MaquinariaController extends Controller
{
    public function index()
    {
        $maquinarias = Maquinaria::all();
        return view('maquinaria.index', compact('maquinarias'));
    }

    public function create()
    {
        $conductores = Conductor::all();
        return view('maquinaria.create', compact('conductores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'estado' => 'required',
            'conductor_id' => 'required'
        ]);

        $maquinaria = new Maquinaria();
        
        $maquinaria->nombre = $request->get('nombre');
        $maquinaria->marca = $request->get('marca');
        $maquinaria->modelo = $request->get('modelo');
        $maquinaria->estado = $request->get('estado');
        $maquinaria->conductor_id = $request->get('conductor_id');

        $maquinaria->save();

        return redirect('/maquinarias');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $conductores = Conductor::all();
        $maquinaria = Maquinaria::find($id);
        return view('maquinaria.edit', compact(['maquinaria', 'conductores']));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'estado' => 'required',
            'conductor_id' => 'required',
        ]);

        $maquinaria = Maquinaria::find($id);
        $maquinaria->nombre = $request->get('nombre');
        $maquinaria->marca = $request->get('marca');
        $maquinaria->modelo = $request->get('modelo');
        $maquinaria->estado = $request->get('estado');
        $maquinaria->conductor_id = $request->get('conductor_id');

        $maquinaria->save();

        return redirect('/maquinarias');
    }

    public function destroy($id)
    {
        $maquinaria = Maquinaria::find($id);
        $maquinaria->delete();
        return redirect('/maquinarias');
    }
}
