<?php

namespace App\Http\Controllers;

use App\Models\Unas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UnasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$datos['unas'] = Unas::paginate(5);
        //return view('unas.index',$datos); 
        $name= $request-> get('busqueda');
        $unas = unas::where('nombre','like',"%$name%")->simplepaginate(12);
        return view('unas.index', compact('unas'));
    }
    public function catalogo(Request $request)
    {
        $names= $request-> get('buscar');
        $unas = unas::where('nombre','like',"%$names%")->paginate(12);
        return view('catalogo', compact('unas'));
        //$datos['unas'] = Unas::paginate(20);
        //return view('catalogo', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('unas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosUna = request()->all();
        $datosUna = request()->except('_token');

        if ($request->hasFile('Foto')) {
            $datosUna['Foto'] = $request->File('Foto')->store('uploads','public');
        }
        Unas::insert($datosUna);
        return response()->json($datosUna);
        return redirect()->route('unas.index')->with('correcto', 'Diseño registrado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Unas  $unas
     * @return \Illuminate\Http\Response
     */
    public function show(Unas $unas)
    {
        //
        //return view('catalogo', $datos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Unas  $unas
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $una = Unas::findOrFail($id);
        return view('unas.edit', compact('una'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Unas  $unas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosUna = request()->except(['_token', '_method']);

        if ($request->hasFile('foto')) {
            $una = Unas::findOrFail($id);
            Storage::delete('public/.$unas->foto');
            $datosUna['foto'] = $request->File('foto')->store('uploads', 'public');
        }

        Unas::where('id', '=', $id)->update($datosUna);

        $una = Unas::findOrFail($id);
        return view('unas.edit', compact('una'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Unas  $unas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        unas::destroy($id);
        return redirect('unas');
    }
}
