<?php

namespace App\Http\Controllers\User\Demandes;

use App\Models\Demande;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditController extends Controller
{
       public function show($id) {



       return  view('pages.user.demandes.edit',[
       	'demande' => Demande::findOrFail($id),
       ]);

}

       public function update(Request $request , $id){

       	$demande = Demande::findOrFail($id);
       	$demande->date_sortie = $request->date_sortie;
       	$demande->heure_sortie = $request->heure_sortie;
       	$demande->heure_entree = $request->heure_retour;
       	$demande->motif = $request->motif;
       	$demande->updated_at = now();
       	$demande->save();

       	return redirect(Route('user.demandes'));
       
}
}
