<?php

namespace App\Http\Controllers\User\Demandes;

use App\Models\Demande;

use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatusController extends Controller
{
    public function approuver($id){

        $demande = Demande::findOrFail($id);

    	if(Session::get('role')[0] == 3 && auth()->user()->agent()->poste->structure->id == $demande->user->agent()->poste->structure->id){

    		

    		$demande->setApprouved();

    		return redirect()->back();
    	}

    	return redirect()->back();

    }
    public function refuser($id){

         $demande = Demande::findOrFail($id);


    	if(Session::get('role')[0] == 3 && auth()->user()->agent()->poste->structure->id == $demande->user->agent()->poste->structure->id){


    		$demande->setDisapprouved();

    		return redirect()->back();

    	}
    	return redirect()->back();

    }
}
