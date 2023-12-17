<?php

namespace App\Http\Controllers;

use App\Models\Centre;
use Illuminate\Http\Request;

class CentresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $centros = Centre::all();
        return view('Admin.centres')
            ->with('centros',$centros);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $centre = new Centre;
        
        $centre->name = $request->input('name');
        $centre->address = $request->input('address');
        $centre->cp = $request->input('cp');
        $centre->city = $request->input('city');

        $centre->save();


        return redirect()->route('centres');
    }

    /**
     * Display the specified resource.
     */
    public function show(Centre $centre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Busco el centro por su id que recibo del enlace
        $centre = Centre::find($id);

        // Me devuelve al fichero del formulario llevandome la variable $centre que lleva la id del centro
        return view('Admin.modificarCentro')->with('centre', $centre);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Busco otra vez el centro por su id que recibo del formulario(que es el que arrastra de la funcion edit)
        $centre = Centre::find($id);

        // Actualiza los datos del centro con los datos del formulario
        $centre->update($request->all());

        return redirect()->route('centres');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
    Centre::destroy($id);

    return redirect()->route('centres');    
    }
}
