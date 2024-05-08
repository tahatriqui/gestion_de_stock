<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Division;
use App\Models\Etat;
use App\Models\Materiel;
use App\Models\Service;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class materielController extends Controller
{
   public function index(){
    $materiels =  Materiel::all();
    $year = Carbon::now()->year;
    return view('pages.materiel.index',compact('materiels',"year"));
   }
   public function ajouterPage(){
    $etats = Etat::all();
    $divisions = Division::all();
    $services = Service::all();
    $users = User::all();
    $categories = Category::all();

    return view('pages.materiel.ajouter',compact('etats',"divisions",'services',"users","categories"));
   }
   public function ajouter(Request $request){

    $request->validate([
        'marque' => 'required',
        'services_tag' => 'required',
        'code_barre' => 'required',
        'configue' => 'required',
        'date' => 'required|date',
        'etat' => 'required',
        'division' => 'required',
        'categorie' => 'required',
        'service' => 'required',
        'user' => 'required',
    ], [
        'required' => 'Le champ :attribute est requis.',
        'date' => 'Le champ :attribute doit être une date valide.',

    ]);
    Materiel::insert([
        "Marque"=>$request->marque,
        "services_tag"=>$request->services_tag	,
        "code_barre"=>$request->code_barre,
        "configue"=>$request->configue,
        "la_date"=>$request->date,
        "etats_id"=>$request->etat,
        "divisions_id"=>$request->division,
        "services_id"=>$request->service,
        "users_id"=>$request->user,
        "categories_id"=>$request->categorie,
    ]);

    return redirect()->route('materiel.index')->withInput();
   }

   public function modifierPage($id){

    $materiel = Materiel::findOrFail($id);
    $etats = Etat::all();
    $divisions = Division::all();
    $services = Service::all();
    $users = User::all();
    $categories = Category::all();
    return view('pages.materiel.modifier',compact('materiel','etats',"divisions",'services',"users","categories"));
   }

   public function modifier($id,Request $request){
     Materiel::findOrFail($id)->update([
        "Marque"=>$request->marque,
        "services_tag"=>$request->services_tag	,
        "code_barre"=>$request->code_barre,
        "configue"=>$request->configue,
        "la_date"=>$request->date,
        "etats_id"=>$request->etat,
        "divisions_id"=>$request->division,
        "services_id"=>$request->service,
        "users_id"=>$request->user,
        "categories_id"=>$request->categorie,
     ]);

     return redirect()->route('materiel.index');
   }
   public function supprimer($id){
    Materiel::findOrFail($id)->delete();

    return redirect()->route('materiel.index');
   }
}
