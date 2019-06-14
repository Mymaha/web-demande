<?php

namespace App\Http\Controllers\User\Demandes;

use App\Models\Demande;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeleteController extends Controller
{
    public function delete($id){

    	$demande = Demande::findOrFail($id);
    	$demande->delete();

    	return redirect(Route('user.demandes'));

    }
}
