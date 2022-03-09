<?php

namespace App\Http\Controllers;

use App\Models\Eliminatoria;
use App\Models\Equipo;
use Illuminate\Http\Request;

class EliminatoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eliminatorias = Eliminatoria::all();
        return view('eliminatorias.index',compact('eliminatorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipos = Equipo::all();
        return view('eliminatorias.create',compact('equipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $eliminatoria = new eliminatoria();
        $eliminatoria-> id  = $request->get('id');
        $eliminatoria-> a = $request->get('a');
        $eliminatoria-> b = $request->get('b');
        $eliminatoria-> c = $request->get('c');
        $eliminatoria-> d = $request->get('d');
        $eliminatoria-> e = $request->get('e');
        $eliminatoria-> f = $request->get('f');
        $eliminatoria-> g = $request->get('g');
        $eliminatoria-> h = $request->get('h');
        $eliminatoria-> avsb = $request->get('avsb');
        $eliminatoria-> cvsd = $request->get('cvsd');
        $eliminatoria-> evsf = $request->get('evsf');
        $eliminatoria-> gvsh = $request->get('gvsh');
        $eliminatoria-> abvscd = $request->get('abvscd');
        $eliminatoria-> efvsgh = $request->get('efvsgh');
        $eliminatoria-> campeon = $request->get('campeon');
        $eliminatoria->save();

        return redirect('eliminatorias');
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
        $eliminatoria = eliminatoria::find($id);
        return view('eliminatorias.edit',compact('eliminatoria'));
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
        $eliminatoria = eliminatoria::find($id);
        $eliminatoria-> a = $request->get('a');
        $eliminatoria-> b = $request->get('b');
        $eliminatoria-> c = $request->get('c');
        $eliminatoria-> d = $request->get('d');
        $eliminatoria-> e = $request->get('e');
        $eliminatoria-> f = $request->get('f');
        $eliminatoria-> g = $request->get('g');
        $eliminatoria-> h = $request->get('h');
        $eliminatoria-> avsb = $request->get('avsb');
        $eliminatoria-> cvsd = $request->get('cvsd');
        $eliminatoria-> evsf = $request->get('evsf');
        $eliminatoria-> gvsh = $request->get('gvsh');
        $eliminatoria-> abvscd = $request->get('abvscd');
        $eliminatoria-> efvsgh = $request->get('efvsgh');
        $eliminatoria-> campeon = $request->get('campeon');
        $eliminatoria->save();

        return redirect('eliminatorias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminatoria = eliminatoria::find($id);
        $eliminatoria->delete();
        return redirect('eliminatorias');
    }
}
