<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Films extends Model
{
    use HasFactory;
    public function réalisateur(){

        return $this->belongsTo(Réalisateurs::class,'real_id');
    }
    public function salle(){

        return $this->belongsTo(Salles::class,'salle_id');
    }

    

}
