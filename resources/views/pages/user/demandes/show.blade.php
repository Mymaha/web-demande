@extends('layouts.user')


@section('page-title')

Demande 
@endsection

@section('main-content')

<div style="padding: 50px 100px">

                 <div class="card">
          
          <div class="card-body">
            <h5 class="card-title">Demande de sortie</h5>
            <p class="card-text">Ajouté le : {{$demande->created_at}}</p>
            <p class="card-text">Par : {{$demande->user->agent()->FullName}}</p>
            <p class="card-text">Département : {{$demande->user->agent()->poste->structure->libelle}}</p>
            <p class="card-text">Date de sortie : {{$demande->date_sortie}} </p> 
            <p class="card-text">Heure de sortie : {{$demande->heure_sortie}} </p> 
            <p class="card-text">heure de retour : {{$demande->heure_entree}} </p>
            <p class="card-text">Motif : {{$demande->motif}}</p>
            <p class="card-text">Etat : {{$demande->StatusName}}</p>
            @if($demande->etat == 2 && auth()->user()->id == $demande->user_id)
				<a href="{{Route('user.demande.pdf',$demande->id)}}" class="btn btn-primary">Telecharger la demande imprimable</a>
            @endif
            @if($demande->etat == 1 && Session::get('role')[0] == 3)
            <a href="{{Route('user.demande.approbation',$demande->id)}}" class="btn btn-primary">Approuvée</a>
            <a href="{{Route('user.demande.refus',$demande->id)}}" class="btn btn-danger">Refusée</a>
            @endif

          </div>
            
                </div>

  </div>




@endsection