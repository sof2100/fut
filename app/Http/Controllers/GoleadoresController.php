<?php

namespace App\Http\Controllers;

use App\Models\gol;
use Illuminate\Http\Request;

class GoleadoresController extends Controller
{
    public function index()
    {
        $goles = gol::all()->sortByDesc('goles');
        return view('goleadores.index',compact('goles'));
    }
}
