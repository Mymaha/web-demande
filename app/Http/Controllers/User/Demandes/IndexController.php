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
    public function rechercherDemandes(){

    	if(Session::get('role')[0] !=1){

    $postes = Structure::where('id',auth()->user()->agent()->poste->structure->id)->first()->postes;

    

    $demandes = [];

    foreach($postes as $poste){


    	foreach($poste->agents as $agent){

    		$demandesParAgent  =Demande::where('user_id',$agent->user_id)->get();
    		$demandesAgent = [];

    		foreach($demandesParAgent as $demande){

    			$data = new \stdClass();
                $data->id = $demande->id;

                if($demande->user_id == auth()->user()->id){

                    $data->maDemande = true;
                }else{

                    $data->maDemande = false;
                }
                $data->agent = $demande->user->agent()->FullName;
                $data->date_sortie = $demande->date_sortie;
                $data->heure_entree = $demande->heure_entree;
                $data->heure_sortie = $demande->heure_sortie;
                $data->etat = $demande->StatusName;
                $data->role = Session::get('role')[0];
                array_push($demandesAgent,$data);

    		}

    		$demandesObject = new \stdClass();

    		$demandesObject->data = $demandesAgent;
    		array_push($demandes,json_decode(json_encode($demandesObject),true));
    	}

    } 


    return $demandes[0];

    }
    return redirect(Route('user.mes-demandes'));

}
}
