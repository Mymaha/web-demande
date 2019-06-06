<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{


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

   }
}
