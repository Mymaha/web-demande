<?php

namespace App\Http\Controllers\User\Roles;

use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChoixController extends Controller
{
    public function show(){


    	return view('pages.user.roles.choix');

    }


    public function choice(Request $request){

		Session::push('role', $request->role);

    	return redirect(Route('user.dashboard'));
    }
}
