@extends('layouts.site')


@section('page-title')

@endsection

@section('main-content')

<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
  <h4 style="color: white;">WebDemande</h4>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      <ul class="navbar-nav mr-auto">
      
    </ul>
    
    <ul class="navbar-nav ">
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-bell">
            <span class="badge badge-info">5</span>
          </i>
          Notifications
        </a>
      </li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> User Name Here
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Profile</a>
          <a class="dropdown-item" href="#">Déconnexion</a>
          
        </div>
      </li>
    </ul>
    
  </div>
</nav>

<div class ="container-fluid bg">
		<div class="row">
			<div class=" col-md-4 col-sm-4 col-xs-12"></div>

				<div class=" col-md-4 col-sm-4 col-xs-12">

					<div style="margin-top: 10vh;" class="form-container">
						<form>

						<h4 style="text-align: center; margin-bottom: 5vh;">Autorisation de mouvement externe</h4>
						 <div class="form-group">
                          <label class="control-label" for="flatpickr01">Date de sortie :</label> <input id="flatpickr01" type="text" class="form-control" data-toggle="flatpickr">
                        </div>
						<div class="form-group">
                          <label class="control-label" for="flatpickr08">Heure de sortie :</label> <input id="flatpickr08" type="text" class="form-control" data-toggle="flatpickr" data-enable-time="true" data-no-calendar="true" data-date-format="H:i" data-default-date="13:45">
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="flatpickr08">Heure de retour :</label> <input id="flatpickr08" type="text" class="form-control" data-toggle="flatpickr" data-enable-time="true" data-no-calendar="true" data-date-format="H:i" data-default-date="13:45">
                        </div>
                        Motif :
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

	                        <div style="display: flex; justify-content: center;" >
	                        	<button style="width: 25vh; margin-top: 2vh;" class="btn btn-secondary btn-lg" type="submit">
						    Envoyer
						  </button>
	                        </div>
					</form>

						
					</div>

					
				</div>


			    <div class=" col-md-4 col-sm-4 col-xs-12"></div>

							
		
	</div>

@endsection