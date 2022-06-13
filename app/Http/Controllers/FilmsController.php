<?php

namespace App\Http\Controllers;
use App\Models\Films;
use App\Models\Réalisateurs;
use App\Models\Salles;
use Illuminate\Http\Request;


class FilmsController extends Controller
{
    public function getAll()
    {
        $films = Films::with('réalisateur')->get();
        $réalisateur = Réalisateurs::all();
        $salles = Salles::all();
        return view('films', [

            'films' => $films,
            'réalisateur' => $réalisateur,
            'salles' => $salles,

        ]);
    }
    public function add(Request $request)
    {
        if ($request->hasFile('affiche')) {
            $path = $request->file('affiche')->store('/images','public');
      
  }

    $validate = $request->validate([
        'titre' => 'required',
        'extrait' => 'required',
        'casting' => 'required',
        'affiche' => 'required',
        'réalisateurs' => 'required|exists:réalisateurs,id',
        'salles' => 'required|exists:salles,id',


    ]);

    $film = new Films();

    $film->titre = $validate['titre'];
    $film->extrait = $validate['extrait'];
    $film->casting = $validate['casting'];
    
    //$film->affiche = $validate['affiche'];
    $film->affiche = $path;
    $film->real_id = $validate['réalisateurs'];
    $film->salle_id = $validate['salles'];

    $film->save();


    return redirect()->route('films');
    }
    public function show($id)
    {
        $film = Films::find($id);

        return view('film', [

            'films' => $film,
            

        ]);
    } 
    public function update(Request $request, $id)
    {
        if ($request->hasFile('affiche')) {
            $path = $request->file('affiche')->store('/images','public');}

        $validate = $request->validate([
            'titre' => 'required',
            'extrait' => 'required',
            'réalisateurs' => 'required|exists:réalisateurs,id',
            'salles'=>'required|exists:salles,id',
            'affiche'=>'required'



        ]);
        $film = Films::find($id);

        $film->titre = $validate['titre'];
        $film->extrait = $validate['extrait'];
        $film->affiche = $path;
        $film->real_id = $validate['réalisateurs'];
        $film->salle_id = $validate['salles'];




        $film->update();
        return redirect()->route('films');
    }

    public function showUpdate($id)
    {
        $film = Films::find($id);
        $réalisateur = Réalisateurs::all();
        $salle = Salles::all();

        return view('update', [

            'update' => $film,
            'réalisateur'=>$réalisateur,
            'id'=>$id,
            'salle'=>$salle,

        ]);
    } 

    public function destroy($id)
    {
        $delete = Films::find($id);
        $delete->delete();

        return redirect()->route('films');
    }
      
}
