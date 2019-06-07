<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Structure extends Model
{

	/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'structures';
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    
   public function postes(){

    return $this->hasMany('\App\Models\Poste','struct_id','id');
   }
}
