<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Group;
use App\Models\Partido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TablaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupos = Group::all();
        $equipos = Equipo::all()->sortByDesc('puntos');
        return view('tabla.index', compact('equipos','grupos'));

        
        // $teams=Equipo ::with(['partidos']) >get();        
        // $leaderboard $teamsmap(function (Equipo $equipo) {     
        // return $equipo partido Results reduce(      
        // function (array $carry, Partido $Partido) {      
        // $carry['GF'] += $Partido >home_score;      
        // $carry['GA'] = $Partido >away_score;       
        // $carry['GD'] $carry['GF'] $carry['GA'];       
        // if ($Partido >home_score > Smatch away_score) { $carry['W']++;      
        // }      
        // else if ($Partido >away_score > Smatch >home_score) {      
        // $carry['L']++;       
        // }      
        // else { $carry['D']++;      
        // } return $carry;      
        // 'team' => $equipo->nombre, 'W' => 0,       
        // 'L' => 0,       
        // 'D' => 0, 'GF' ⇒ 0,      
        // 'GA' => 0,      
        // ); });





        // SELECT e.nombre AS 'Team',
        // SUM(p.marcador1) AS 'GF',
        // SUM(p.marcador2) AS 'GC',
        // SUM(p.marcador1 - p.marcador2) AS 'GD'
        // FROM equipos e
        // INNER JOIN partidos p
        // ON p.equipoA_id = e.id GROUP BY e.id
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
