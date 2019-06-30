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

   public static function mesDemandes(){

    return self::where('user_id',auth()->user()->id);

   }

   public function getStatusNameAttribute(){


    if($this->etat == 1){

      return "En attente d'approbation"; 
    }

    if($this->etat == 2){

      return "Approuvée";
    }

    if($this->etat ==3){

      return "Refusée";
    }

   }

   public function setApprouved(){

      $this->etat = 2;
      $this->updated_at = now();
      $this->save();
   }

   public function setDisapprouved(){

    $this->etat = 3;
    $this->updated_at = now();
    $this->save();
   }

   public function store($request){

    
    $this->etat = 1;
    $this->heure_sortie = $request->heure_sortie;
    $this->heure_entree = $request->heure_retour;
    $this->date_sortie = $request->date_sortie;
    $this->motif = $request->motif;
    $this->user_id = auth()->user()->id;
    $this->created_at = now();
    $this->updated_at = now();
    $this->save();
   }
}
