<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
      public function users(){
    return $this->hasMany('\App\Providers\User','user_id','id');
   }
}
