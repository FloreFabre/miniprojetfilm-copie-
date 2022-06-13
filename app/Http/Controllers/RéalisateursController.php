<?php

namespace App\Http\Controllers;

use App\Models\Réalisateurs;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use App\Models\Films;


class RéalisateursController extends Controller

{

public function showRéalisateur($id)
{
    $real = Films::where('real_id', $id)->get();
        $reals = Réalisateurs::find($id);


        return view('réalisateur', [


            'film' => $real,
            'reals' => $reals,

        

    ]);
} 

}


