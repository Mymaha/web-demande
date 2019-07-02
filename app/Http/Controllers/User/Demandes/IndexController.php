<?php

namespace App\Http\Controllers\User\Demandes;

use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function show(){
    
    if(Session::get('role')[0] !=1){


    return view('pages.user.demandes.index');


    }

    return redirect(Route('user.mes-demandes'))->with('Agent',true);

    }

}
