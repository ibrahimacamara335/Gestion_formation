<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function liste()
    {
        $formations = Formation::all();
        return view('formation.liste', compact("formations"));
    }

    public function add()
    {
        return view('formation.add');
    }

    public function enregistrer(Request $request, Formation $formation)
    {
        $formation->nom = $request->nom;
        $formation->code = $request->code;
        $formation->duree = $request->duree;
        $formation->save();
        if ($formation) {
            return redirect('formation/liste')->with(['status' => "Formation enregistrer avec succes " . $formation->nom]);
        } else {
            return view('enregistrer-formation', ['status' => "Echec d'enregistrement"]);
        }
    }

    public function detail($id)
    {
        $foramtion = Formation::find($id);
        /* dd($foramtion); */
        return view('formation.detail', compact('foramtion'));
    }
}
