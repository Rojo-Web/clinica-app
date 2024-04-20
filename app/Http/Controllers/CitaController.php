<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cita;
use Illuminate\Support\Facades\DB;


class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $citas = DB::table('citas')
        ->join('pacientes','citas.paciente_id','=','pacientes.id')
        ->join('medicos','citas.medico_id','=','medicos.id')
        ->select('citas.*',"pacientes.nombre","medicos.nombre")->get();
        return view('medico.index',['citas' => $citas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pacientes = DB::table('pacientes')
        ->orderBy('nombre')
        ->get();
        $medicos = DB::table('medicos')
        ->orderBy('nombre')
        ->get();
        return view('cita.new',["pacientes"=>$pacientes,"medicos"=>$medicos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cita = new cita();
        $cita->fecha_cita = $request->fecha_cita;
        $cita->hora_cita = $request->hora_cita;
        $cita->motivo_consulta = $request->motivo_consulta;
        $cita->paciente_id = $request->paciente_id;
        $cita->medico_id = $request->medico_id;
        $cita->id = $request->id;
        $cita->save();

        return redirect()->route("citas.index");
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
        $cita = cita::find($id);
        $pacientes = DB::table('pacientes')
        ->orderBy('nombre')
        ->get();
        $medicos = DB::table('medicos')
        ->orderBy('nombre')
        ->get();
        return view('cita.edit',['cita'=> $cita,'pacientes'=> $pacientes,'medicos'=> $medicos]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cita = cita::find($id);

        $cita->fecha_cita = $request->fecha_cita;
        $cita->hora_cita = $request->hora_cita;
        $cita->motivo_consulta = $request->motivo_consulta;
        $cita->paciente_id = $request->paciente_id;
        $cita->medico_id = $request->medico_id;
        $cita->save();

        return redirect()->route("citas.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cita = cita::find($id);
        $cita->delete();

        return redirect()->route("citas.index");
    }
}
