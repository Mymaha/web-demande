<?php

namespace App\Http\Controllers\Site\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function show(){


    	return view('pages.site.auth.login');
    }


    public function auth(Request $request){

    	if(Auth::attempt(['email' => $request->mail, 'password' => $request->password])){

    		return redirect()->intended('user/choisir-role');


    	}else{

    		return redirect()->back();
    	}
    }
}
