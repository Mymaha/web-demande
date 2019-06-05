<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Structure extends Model
{
    
   public function postes(){
    return $this->hasMany('\App\Models\Poste','struct_id','id');
   }
}
