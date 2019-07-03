<?php

namespace App\Http\Controllers\User\Demandes;

use App\Models\Demande;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeleteController extends Controller
{
    public function delete($id){

    	$demande = Demande::findOrFail($id);
    	if(auth()->user()->id == $demande->user_id && $demande->etat == 1){
    	$demande->delete();

    	return redirect(Route('user.dashboard'));
    }
    	return redirect(Route('user.mes-demandes'));

    }
}
