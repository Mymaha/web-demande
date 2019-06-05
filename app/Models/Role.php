<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'roles';
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;


    public function users(){

    	return $this->belongsToMany('\App\User');
    }
}
