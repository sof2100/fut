<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Group;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupos = Group::all();
        $equipos = Equipo::all();
        return view('equipos.index',compact('equipos','grupos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grupos = Group::all();
        return view('equipos.create',compact('grupos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'grupo_id' => 'required','nombre' => 'required', 'imagen' => 'required|image|mimes:jpeg,png,svg|max:1024'
        ]);

         $equipo = $request->all();

         if($imagen = $request->file('imagen')) {
             $rutaGuardarImg = 'imagenes/';
             $imagenProducto = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
             $imagen->move($rutaGuardarImg, $imagenProducto);
             $equipo['imagen'] = "$imagenProducto";             
         }
         
         Equipo::create($equipo);
        
        // $equipo =  new Equipo;
        // $equipo -> grupo_id = $request->get('grupo_id');
        // $equipo -> nombre = $request->get('nombre');
        // $equipo -> imagen = $request->get('imagen');
        // $equipo ->save();
         return redirect('equipos');
      
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
        $equipo = Equipo::find($id);
        return view('equipos.edit',compact('equipo'));
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
        $equipo = Equipo::find($id);
        $equipo -> nombre = $request->get('nombre');
        $equipo ->save();
        return redirect('equipos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equipo = Equipo::find($id);
        $equipo->delete();
        return redirect('equipos');
    }

    
}
