<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class ProjetController extends Controller
{
    public function create()
    {
        return view('projet/ajout');
    }
    public function store(Request $request)//creation d'un objet de type Request (injection de dependance)
    {
        // dd($request->all());
        // $projet = new Projet();
        // $projet->nom_projet = $request->nom_projet;
        // $projet->description = $request->description;
        // $projet->date_debut = $request->date_debut;
        // $projet->date_fin = $request->date_fin;
        // $projet->save();
        // return redirect('projet/create');
        
        $input = $request->all();
        Projet::create($input);
        return redirect('projet/create')->with('flash_message','Projet créé');
    }
    public function index()
    {
        $projets = Projet::all();
        return view('projet.index', ['projets' => $projets]);
        //return view('projet.index', compact('projets'));
    }
    public function show($id){

       //$projet = Projet::where('id', '=',$id)->first();

        // $projet = Projet::findOrFail($id) ;
        //$projet = Projet::findOrFail($id) ;
        $projet = Projet::find($id);
        return view('projet.show', compact('projet'));
    }
}
