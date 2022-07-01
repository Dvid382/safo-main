<?php

namespace App\Http\Controllers;

use App\Models\curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('curso.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('curso.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show(curso $curso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit(curso $curso)
    {
        return view('curso.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, curso $curso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy(curso $curso)
    {
        //
    }
}
