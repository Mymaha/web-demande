<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Poste extends Model
{

	/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'postes';
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    
    
    public function structure(){

        return $this->hasOne('\App\Models\Structure', 'id', 'struct_id');
    }

    public function agents(){

    	return $this->hasMany('\App\Models\Agent','poste_id','id');
    }
}
