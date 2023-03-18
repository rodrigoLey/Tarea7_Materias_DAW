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
    public function edit(Materia $materia)
    {
        //
        return view('materias/edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Materia $materia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materia $materia)
    {
        //
    }
}
