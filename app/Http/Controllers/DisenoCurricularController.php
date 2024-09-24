<?php

namespace App\Http\Controllers;

use App\Models\disenoCurricular;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DisenoCurricularController
{
    
    public function index()
    {
        #$datosDc (Diseño Curricular) esta es una variable la cual va a guardar los datos que estan en la base
        $datosDC=DB::select("select * from diseno_curriculars");
        return view('welcome')-> with('datos', $datosDC); 
        # with metodo para enviar datos desde el controlador hacia la vista
        # datos es el nombre para acceder a los datos en la vista
        # datosDC es el valor que se envia el cual tiene los resultados de la consulta que se hizo 
    }

    
    public function create() 
    {
        
    }

   
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(disenoCurricular $disenoCurricular)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(disenoCurricular $disenoCurricular)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, disenoCurricular $disenoCurricular)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(disenoCurricular $disenoCurricular)
    {
        //
    }
}
