<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MateriaController;
use Illuminate\Support\Facades\Storage;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['materias']=Materia::paginate(10);
        return view('materias.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('materias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datosMaterias = request()->except('_token');

        if($request->hasFile('Foto')){
            $datosMaterias['Foto']=$request->file('Foto')->store('upload','public');

        }

        Materia::insert($datosMaterias);

        response()->json($datosMaterias);
        return redirect('/materias');
    }

    /**
     * Display the specified resource.
     */
    public function show(Materia $materia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $materias=Materia::findOrFail($id);

        return view('materias.edit', compact('materias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosMaterias = request()->except(['_token','_method']);
        if($request->hasFile('Foto')){
            $materias=Materia::findOrFail($id);
            Storage::delete('public/'.$materias->Foto);
            $datosMaterias['Foto']=$request->file('Foto')->store('upload','public');
        }

        Materia::where('id','=',$id)->update($datosMaterias);
        $materias=Materia::findOrFail($id);
        view('materias.edit', compact('materias'));
        return redirect('/materias');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Materia::destroy($id);
        return redirect('materias');
    }
}
