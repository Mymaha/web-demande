<?php

namespace App\Http\Controllers\User\Demandes\User;

use App\Models\Demande;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{

	public function show(){

		return view('pages.user.demandes.user.index');
	}
	
    public function rechercher(){


    		$demandes = Demande::mesDemandes()->get();

            $demandeListe = [];

            foreach($demandes as $demande){
                $data = new \stdClass();
                $data->id = $demande->id;
                $data->date_sortie = $demande->date_sortie;
                $data->heure_entree = $demande->heure_entree;
                $data->heure_sortie = $demande->heure_sortie;
                $data->etat = $demande->StatusName;


                array_push($demandeListe,json_decode(json_encode($data),true));


            }

            $sendData = new \stdClass();
            $sendData->data = $demandeListe;

            return json_decode(json_encode($sendData),true);
    		
            
    }
}
