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
    
<<<<<<< HEAD
      public function poste(){
=======
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;


    
      public function poste(){

>>>>>>> dec7a2ce2552dc37509963ae67f5959e63a0ebf3
         return $this->hasOne('\App\Models\Poste', 'id', 'poste_id');
    }


}
