<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'utilisateurs';
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;


    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    

    public function agent(){
        
        return \App\Models\Agent::where('user_id',$this->id)->first();
    }
      public function roles()
    {
       
     return $this->belongsToMany('App\Models\Role');
    }

    public function demandes(){

        return $this->hasMany('\App\Models\Demande','user_id','id');
    }
    
}
