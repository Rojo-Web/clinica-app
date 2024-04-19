<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\paciente;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pacientes = DB::table('pacientes')
        ->select('*')->get();
        return view('paciente.index',['pacientes' => $pacientes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("paciente.new");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $paciente = new paciente();
        $paciente->nombre = $request->nombre;
        $paciente->apellido = $request->apellido;
        $paciente->fecha_nacimiento = $request->fecha_nacimiento;
        $paciente->genero = $request->genero;
        $paciente->direccion = $request->direccion;
        $paciente->telefono = $request->telefono;
        $paciente->email = $request->email;
        $paciente->id = $request->id;
        $paciente->save();

        $pacientes = DB::table('pacientes')
            ->select('*')
            ->get();

        return view('paciente.index',['pacientes'=> $pacientes]);
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
        $paciente = paciente::find($id);
        return view('paciente.edit',['paciente'=> $paciente]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $paciente = paciente::find($id);

        $paciente->nombre = $request->nombre;
        $paciente->apellido = $request->apellido;
        $paciente->fecha_nacimiento = $request->fecha_nacimiento;
        $paciente->genero = $request->genero;
        $paciente->direccion = $request->direccion;
        $paciente->telefono = $request->telefono;
        $paciente->email = $request->email;
        $paciente->id = $request->id;
        $paciente->save();

        $pacientes = DB::table('paciente')
        ->select('*')
        ->get();

        return view('paciente.index',['pacientes'=> $pacientes]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $paciente = paciente::find($id);
        $paciente->delete();

        $pacientes = DB::table('paciente')
        ->select('*')
        ->get();

        return view('paciente.index',['pacientes'=> $pacientes]);
    }
}
