<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'agents';
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;


    
      public function poste(){

         return $this->hasOne('\App\Models\Poste', 'id', 'poste_id');
    }

    public function getFullNameAttribute(){

        return $this->nom . " " . $this->prenom;
    }


    


}
