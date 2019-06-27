<?php

namespace App\Http\Controllers\User\Demandes\User;

use App\Models\Demande;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function show(){


    		$demandes = Demande::mesDemandes()->get();

    		$data = new \stdClass();
            $data->data = json_decode($demandes,true);

    		return json_decode(json_encode($data),true);
    }
}
