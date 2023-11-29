<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;

use App\Models\Formation;
use Illuminate\Http\Request;

class ApprenantController extends Controller
{
    public function liste()
    {
        $apprenants = Apprenant::all();
        return view('apprenant.liste', compact("apprenants"));
    }

    public function add()
    {
        $formations = Formation::all();
        return view('apprenant.add', compact("formations"));
    }

    public function enregistrer(Request $request, Apprenant $apprenant)
    {
        $formations = $request->formations_id;
        $apprenant->matricule = $request->matricule;
        $apprenant->nom = $request->nom;
        $apprenant->prenom = $request->prenom;
        $apprenant->niveau = $request->niveau;
        $apprenant->save();
        $apprenant->formations()->attach($formations);
        if ($apprenant) {
            return redirect('apprenant/liste')->with(['status' => "Apprenant enregistrer avec succes " . $apprenant->matricule]);
        } else {
            return view('enregistrer-apprenant', ['status' => "Echec d'enregistrement"]);
        }
    }
    public function show($id)
    {
        $apprenant = Apprenant::find($id);
        return view('apprenant.detail', compact("apprenant"));
    }
}
