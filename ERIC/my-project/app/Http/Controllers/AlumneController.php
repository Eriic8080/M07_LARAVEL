<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Alumne;
use Illuminate\Http\Request;

class AlumneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumne = Alumne::all();
        return view('Admin.alumnat')
        ->with('alumne',$alumne);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $alumne = new Alumne;
        

        $alumne->name = $request->input('name');
        $alumne->surname = $request->input('surname');
        $alumne->rol = $request->input('rol');
        $alumne->email = $request->input('email');

        //Guarda la informacio de l'objecte Alumne a la taula corresponent
        $alumne->save();

        return redirect()-> route('alumnat');
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumne $alumne)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Aquí podrías realizar la consulta para obtener los datos del registro que deseas editar
        //$alumne = DB::table('alumnes')->where('id', $id)->first();
        $alumne = Alumne::find($id);

        return view('Admin.modificarAlumne', compact('alumne'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Busco otra vez el centro por su id que recibo del formulario(que es el que arrastra de la funcion edit)
        $alumne = Alumne::find($id);
        //$alumne->name = $request->input('name');
        
        //dd($alumne);
        // Actualiza los datos del centro con los datos del formulario
        $alumne->update($request->all());
        return redirect()->route('alumnat');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('alumnes')->where('id', $id)->delete();
        return redirect()->route('alumnat');
    
    }
}
