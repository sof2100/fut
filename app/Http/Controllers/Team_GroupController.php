<?php

namespace App\Http\Controllers;


use App\Models\Group;

use Illuminate\Http\Request;

class Team_GroupController extends Controller
{
    public function index(Group $grupo){
        $grupos = Group::all();
        $equipos = $grupo->equipos;
        return view('team_group.index',compact('grupos','equipos'));
    }

    // public function index(Equipo $equipo)

    // {
    //     $equipos = Equipo::all();
    //     $jugadores = $equipo->jugadores;
    //     return view('team_player.index',compact('equipos','jugadores'));
    // }

}
