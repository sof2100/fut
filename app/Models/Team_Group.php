<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team_Group extends Model
{
    use HasFactory;

    public function equipo(){
        return $this->belongsTo(Equipo::class,);
    }
    public function grupo(){
        return $this->belongsTo(Group::class);
    }
}
