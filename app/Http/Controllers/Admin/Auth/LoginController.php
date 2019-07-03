<?php

namespace App\Http\Controllers\Admin\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function show(){

    	return view('pages.admin.auth.login');
    }



    public function auth(Request $request){

    	$credentials = $request->only('email','password');

        if(Auth::guard('admin')->attempt($credentials)){

            return redirect()->intended('admin/tableau-de-bord');

        }else{
            return redirect(route('admin.login'))->with(['credentials'=>false]);

        }
    }
}
