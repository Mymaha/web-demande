<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
<<<<<<< HEAD
      public function users(){
    return $this->hasMany('\App\Providers\User','user_id','id');
=======

	/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'demandes';
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;


      public function user(){

    		return $this->hasMany('\App\Providers\User','user_id','id');
>>>>>>> dec7a2ce2552dc37509963ae67f5959e63a0ebf3
   }
}
