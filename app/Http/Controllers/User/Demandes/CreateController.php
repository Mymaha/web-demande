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

		$demande->store($request);

		return redirect(Route('user.mes-demandes'));

	}
}