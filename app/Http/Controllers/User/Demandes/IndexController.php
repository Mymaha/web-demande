<?php

namespace App\Http\Controllers\User\Demandes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function show(){
    
    return view('pages.user.demandes.index');
    
    
    }
}
