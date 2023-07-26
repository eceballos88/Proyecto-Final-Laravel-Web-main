<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mecanicos;

class mecanicosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = mecanicos::where("estatus", 1)->get();

        return view('mecanicos.index')->with('mecanicos', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('mecanicos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //aqui se hace el guardado de la inf de la persona

        $nombre = $request->input('nombre');
        $apPaterno = $request->input('apPaterno');
        $apMaterno = $request->input('apMaterno');
        $fecha_contratacion = $request->input('fecha_contratacion');
        $salario = $request->input('salario');
        $estatus = $request->input('estatus');

        $cuenta = mecanicos::create([
            'nombre' => $nombre,
            'apPaterno' => $apPaterno,
            'apMaterno' => $apMaterno,
            'fecha_contratacion' => $fecha_contratacion,
            'salario' => $salario,
            'estatus' => $estatus,
        ]);


        return redirect('/mecanico');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $variable = mecanicos::where("id", $id)->get();
        $variable = $variable[0];
        return view('mecanicos.read')->with("parametros", $variable);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $variable = mecanicos::where("id", $id)->get();
        $variable = $variable[0];
        return view('mecanicos.edit')->with("parametros", $variable);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $nombre = $request->input('nombre');
        $apPaterno = $request->input('apPaterno');
        $apMaterno = $request->input('apMaterno');
        $fecha_contratacion = $request->input('fecha_contratacion');
        $salario = $request->input('salario');
        $estatus = $request->input('estatus');

        $variable = mecanicos::where("id", $id)->update([
            'nombre' => $nombre,
            'apPaterno' => $apPaterno,
            'apMaterno' => $apMaterno,
            'fecha_contratacion' => $fecha_contratacion,
            'salario' => $salario,
            'estatus' => $estatus
        ]);
        return redirect('/mecanico');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $variable = mecanicos::where("id", $id)->update(['estatus' => 0]);
        return redirect('/mecanico');
    }
}