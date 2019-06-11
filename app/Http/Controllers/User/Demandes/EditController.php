<?php

namespace App\Http\Controllers\User\Demandes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditController extends Controller
{
       public function show() {
       return  view('pages.user.demandes.edit');
}
}
