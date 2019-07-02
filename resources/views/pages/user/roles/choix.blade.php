@extends('layouts.site')


@section('page-title')

@endsection

@section('main-content')
<div class ="container-fluid bg">
		<div class="row">
			<div class=" col-md-4 col-sm-4 col-xs-12"></div>
			<div class=" col-md-4 col-sm-4 col-xs-12">

				<div class="container2">
					<img class="logo" src="{{asset('assets/images/sonatrach.png')}}" width="110vh" height="110vh">
					<h4>WebDemande</h4>

					<form method="POST" action="{{Route('user.role.choix')}}">
						@csrf
					  <select class="btn btn-secondary btn-lg white" name="role">
					    <option>Veuillez choisir un rôle</option>
					    @foreach(auth()->user()->MyRoles() as $role)
					  	<option value="{{$role->id}}" >{{$role->designation}}</option>
					  	@endforeach
					  </select>
					  <button class="btn btn-secondary btn-lg" type="submit">
					    Confirmer
					  </button>
					  </form> 
					</div>
				</div>
			
			</div>
			    <div class=" col-md-4 col-sm-4 col-xs-12"></div>
		</div>
		


@endsection

