<?php

namespace App\Http\Controllers\User\Demandes;

use App\Models\Demande;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{
   public function show() {
       return  view('pages.user.demandes.fiche');
}

	public function create(Request $request){

		$demande = new Demande();
		$demande->etat = 1;
		$demande->heure_sortie = $request->heure_sortie;
		$demande->heure_entree = $request->heure_retour;
		$demande->date_sortie = $request->date_sortie;
		$demande->motif = $request->motif;
		$demande->user_id = auth()->user()->id;
		$demande->created_at = now();
		$demande->updated_at = now();
		$demande->save();

		return redirect(Route('user.demandes'));

	}
}