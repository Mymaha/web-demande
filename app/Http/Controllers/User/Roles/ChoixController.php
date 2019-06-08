<?php

namespace App\Http\Controllers\User\Roles;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChoixController extends Controller
{
    public function show(){

    	return view('pages.user.roles.choix');
    }
}
