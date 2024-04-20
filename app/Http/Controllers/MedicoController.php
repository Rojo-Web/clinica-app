<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\medico;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicos = medico::all();
        return view('medico.index',['medicos' => $medicos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('medico.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $medico = new medico();
        $medico->nombre = $request->name;
        $medico->apellido = $request->apellido;
        $medico->especialidad = $request->especialidad;
        $medico->horarios = $request->horarios;
        $medico->telefono = $request->telefono;
        $medico->email = $request->email;
        $medico->id = $request->id;
        $medico->save();

        $medicos = medico::all();


        return redirect()->route("medicos.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $medico = medico::find($id);
        return view('medico.edit',['medico'=> $medico]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $medico = medico::find($id);

        $medico->nombre = $request->nombre;
        $medico->apellido = $request->apellido;
        $medico->fecha_nacimiento = $request->especialidad;
        $medico->genero = $request->horarios;
        $medico->telefono = $request->telefono;
        $medico->email = $request->email;
        $medico->save();

        return redirect()->route("medicos.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $medico = medico::find($id);
        $medico->delete();

        return redirect()->route("medicos.index");
    }
}
