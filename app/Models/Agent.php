<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    //
    
      public function Poste(){
         return $this->hasOne('\App\Models\Poste', 'id', 'poste_id');
    }
}
