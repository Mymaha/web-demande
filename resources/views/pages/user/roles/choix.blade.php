@extends('layouts.user')


@section('page-title')

@endsection

@section('main-content')
<div class ="container-fluid bg">
		<div class="row">
			<div class=" col-md-4 col-sm-4 col-xs-12"></div>
			<div class=" col-md-4 col-sm-4 col-xs-12">

				<div class="container2">
					<img class="logo" src="sonatrach.png" width="110vh" height="110vh">
					<h4>WebDemande</h4>

					<div class="btn-group">
					  <button class="btn btn-secondary btn-lg" type="button">
					    Veuillez choisir un rôle
					  </button>
					  <button type="button" class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <span class="sr-only">Toggle Dropdown</span>
					  </button>
					  <div class="dropdown-menu">
					  	<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						    <a class="dropdown-item" href="#">Action</a>
						    <a class="dropdown-item" href="#">Another action</a>
						    <a class="dropdown-item" href="#">Something else here</a>
					  	</div>
					  </div>
					</div>
				</div>
			
			</div>
			    <div class=" col-md-4 col-sm-4 col-xs-12"></div>
		</div>
		
	</div>


@endsection

