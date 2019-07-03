<?php

namespace App\Http\Controllers\User\Demandes;

use App\Models\Structure;
use App\Models\Demande;
use App\Models\Poste;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function show(){
    
    if(Session::get('role')[0] !=1){

    $postes = Structure::where('id',auth()->user()->agent()->poste->structure->id)->first()->postes;

    $demandes = [];

    foreach($postes as $poste){


    	foreach($poste->agents as $agent){

    		$demandesParAgent  =Demande::where('user_id',$agent->user_id)->get();

    		array_push($demandes,$demandesParAgent);
    	}

    } 


    return $demandes;

    //return view('pages.user.demandes.index',[
    	//'demandes' =>$demandes ]);


    }


    return redirect(Route('user.mes-demandes'))->with('Agent',true);

    }

}
