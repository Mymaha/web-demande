<?php

namespace App\Http\Controllers\User\Demandes;

use App\Models\Demande;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowController extends Controller
{
    public function  show($id){

    	$demande = Demande::findOrFail($id);

    if((Session::get('role')[0] == 2 && auth()->user()->agent()->poste->structure->id == $demande->user->agent()->poste->structure->id)){

    	return view('pages.user.demandes.show',
    		[ 'demande' => $demande
    	]);
    }
    if(Session::get('role')[0] == 3 && auth()->user()->agent()->poste->structure->id == $demande->user->agent()->poste->structure->id ){
		return view('pages.user.demandes.show',
    		[ 'demande' => $demande
    	]);

    }
     if(auth()->user()->id == $demande->user->id){
    	return view('pages.user.demandes.show',
    		[ 'demande' => $demande
    	]);

    }

    return Session::get('role')[0];
    }
}
