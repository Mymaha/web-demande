<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Poste extends Model
{
    
    
    public function structure(){

        return $this->hasOne('\App\Models\Structure', 'id', 'struct_id');
    }

    public function agents(){

    	return $this->hasMany('\App\Models\Agent','poste_id','id');
    }
}
