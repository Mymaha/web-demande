<?php

namespace App\Http\Controllers\User;

use App\Models\Demande;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;

class PDFController extends Controller
{
    public function generatePDF($id)
    {

    	$demande = Demande::findOrFail($id);

    	if($demande->etat == 2 && auth()->user()->id == $demande->user_id){

        $pdf = PDF::loadView('pdf.demande',[
        	'demande' => $demande]);
  
        return $pdf->stream('demande.pdf');

    	}
    	return redirect(Route('user.dashboard'));

    }
}

