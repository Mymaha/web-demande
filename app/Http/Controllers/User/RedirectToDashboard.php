<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RedirectToDashboard extends Controller
{
    public function redirect(){
        
        return redirect(Route('user.dashboard'));
    }
}
