<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Profesor;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $personas =  Persona::all();
        return view('profesor.index')->with('personas',$personas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profesor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $personas = new Persona();

        $personas->nombre = $request->GET('nombre');
        $personas->apellido = $request->GET('apellido');
        $personas->cedula = $request->GET('cedula');
        $personas->operador = $request->GET('operador');
        $personas->telefono = $request->GET('telefono');
        $personas->correo = $request->GET('correo');
        $personas->estado = $request->GET('estado');
        $personas->municipio = $request->GET('municipio');
        $personas->direccion = $request->GET('direccion');
        $personas->rol = $request->GET('rol');

        $personas->save();

        return redirect('/profesor');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persona =  Persona::find($id);
        return view('profesor.edit')->with('persona',$persona);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $persona = Persona::find($id);

        $persona->nombre = $request->GET('nombre');
        $persona->apellido = $request->GET('apellido');
        $persona->cedula = $request->GET('cedula');
        $persona->operador = $request->GET('operador');
        $persona->telefono = $request->GET('telefono');
        $persona->correo = $request->GET('correo');
        $persona->estado = $request->GET('estado');
        $persona->municipio = $request->GET('municipio');
        $persona->direccion = $request->GET('direccion');
        $persona->rol = $request->GET('rol');

        $persona->save();

        return redirect('/profesor');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona = Persona::find($id);
        $persona->delete();
        return redirect('/profesors');
    }
}
