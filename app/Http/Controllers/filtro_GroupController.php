<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class filtro_GroupController extends Controller
{
    public function index()

    {
        $grupos = Group::all();
        return view('tablagrupos.index',compact('grupos'));
        // $equipos = Equipo::all();
        // $jugadores = $equipo->jugadores;
        // return view('team_player.index',compact('equipos','jugadores'));
    }

    public function filtro(Group $grupo)

    {
        $teamgroup = $grupo->equipo;
        return view('tablagrupos.index',compact('teamgroup'));
    }

    // public function index(Equipo $equipo)

    // {
    //     $equipos = Equipo::all();
    //     $jugadores = $equipo->jugadores;
    //     return view('team_player.index',compact('equipos','jugadores'));
    // }
}
