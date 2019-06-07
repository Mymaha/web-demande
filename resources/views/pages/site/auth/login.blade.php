@extends('layouts.site')


@section('page-title')

Connexion

@endsection


@section('main-content')

<div class ="container-fluid bg">
		<div class="row">
			<div class=" col-md-4 col-sm-4 col-xs-12"></div>
			<div class=" col-md-4 col-sm-4 col-xs-12">
				<!--form start--->
				<div class="brand">
					<img class="logo" src="{{asset('assets/images/sonatrach.png')}}" width="110vh" height="110vh">
					<h4>WebDemande</h4>
				</div>
				<form class="form-container">
					<h4> Authentification</h4>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Mot de passe</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
				  </div>
				  <div class="form-group form-check">
				    <input type="checkbox" class="form-check-input" id="exampleCheck1">
				    <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
				  </div>
				  <button type="submit" class="btn btn-primary btn-block">Login</button>
				</form>
				<!--form end--->
			
			</div>
			    <div class=" col-md-4 col-sm-4 col-xs-12"></div>
		</div>
		
	</div>

@endsection