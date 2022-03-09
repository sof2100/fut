<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use  Illuminate\Database\Eloquent\Builder;




class Equipo extends Model
{
    use HasFactory;

    protected $fillable = ['grupo_id','nombre', 'imagen'];

    public function partidos(){
        return $this->hasMany(Partido::class);
    }

    public function jugadores(){
        return $this->hasMany(Player::class);
    }

    public function grupo(){
        return $this->belongsTo(Group::class);
    }

   
//partidos totales
    public function getpartidosAttribute(){
        return Partido::where(function($query) {
            $query->where('equipoA_id', $this->attributes['id'])->orWhere('equipoB_id', $this->attributes['id']);
        })
        ->whereNotNull('marcador1')

        ->count();
    }

//partidos Ganados
    public function getGanadoAttribute(){
        return Partido::whereNotNull('marcador1')
            ->where(function($query) {
                $query->where(function($query2) {
                    $query2->where('equipoA_id', $this->attributes['id'])->whereRaw('marcador1 > marcador2');
                })->orWhere(function($query2) {
                    $query2->where('equipoB_id', $this->attributes['id'])->whereRaw('marcador1 < marcador2');
                });
            })
            ->count();
    }

//partidos Empatados

    public function getEmpatadoAttribute(){
        return Partido::whereNotNull('marcador1')
            ->whereRaw('marcador1 = marcador2')
            ->where(function($query) {
                $query->where('equipoA_id', $this->attributes['id'])
                    ->orWhere('equipoB_id', $this->attributes['id']);
            })
            ->count();
    }

//partidos Perdidos

    public function getPerdidoAttribute(){
        return Partido::whereNotNull('marcador1')
            ->where(function($query) {
                $query->where(function($query2) {
                    $query2->where('equipoA_id', $this->attributes['id'])->whereRaw('marcador1 < marcador2');
                })->orWhere(function($query2) {
                    $query2->where('equipoB_id', $this->attributes['id'])->whereRaw('marcador1 > marcador2');
                });
            })
            ->count();
    }

//goles a favor
public function  withSum($equipoA_id, $marcador1)

{

    return $this->withAggregate($equipoA_id, $marcador1, 'sum');

}


    // public function getGfAttribute(){
    //     $local = Partido::where('marcador2')->where('equipoA_id', $this->attributes['id']);
    //     $visitante =Partido::where('marcador1')->union($local)->where('equipoA_id', $this->attributes['id'])->get();
    //    return ;
   
    //     $visitante =Partido::where('marcador1')->union($local)->where('equipoA_id', $this->attributes['id'])->get();
        // $sql = "SELECT marcador1 FROM partidos WHERE equipoA_id =id";  
        // SELECT marcador2 from partidos WHERE equipoB_id =1 union
        // SELECT marcador1 from partidos WHERE equipoA_id =1
        // $sql = "SELECT marcador2 from partidos WHERE equipoB_id =2 UNION SELECT marcador1 from partidos WHERE equipoA_id =2";
    // }   


   
//Puntos

    public function getPuntosAttribute(){
        return $this->getganadoAttribute() * 3 + $this->getEmpatadoAttribute() * 1;
    }

   
}
