@extends('layouts.user')


@section('page-title')

@endsection

@section('main-content')



<div class ="container-fluid bg">
		<div class="row">
			<div class=" col-md-4 col-sm-4 col-xs-12"></div>

				<div class=" col-md-4 col-sm-4 col-xs-12">

					<div style="margin-top: 10vh; text-align: center;
								padding: 30px 40px;
								margin-top: 5vh;
								-webkit-box-shadow: 0px 0px 11px 3px rgba(0,0,0,0.75);
							    -moz-box-shadow: 0px 0px 11px 3px rgba(0,0,0,0.75);
							    box-shadow: 0px 0px 11px 3px rgba(0,0,0,0.75);
							    background-color: #FDF9F9;" 
					class="form-container2">
						<form method="POST" action="{{Route('user.demandes.fiche')}}">
              @csrf

						<h4 style="text-align: center; margin-bottom: 5vh;">Demande d'autorisation <br>de mouvement externe</h4>
						 <div class="form-group">
                          <label class="control-label" for="flatpickr01">Date de sortie :</label> <input id="flatpickr01" type="text" class="form-control" data-toggle="flatpickr" name="date_sortie">
                        </div>
						<div class="form-group">
                          <label class="control-label" for="flatpickr08">Heure de sortie :</label> <input id="flatpickr08" type="text" class="form-control" data-toggle="flatpickr" data-enable-time="true" data-no-calendar="true" data-date-format="H:i" data-default-date="13:45" name="heure_sortie">
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="flatpickr08">Heure de retour :</label> <input id="flatpickr08" type="text" class="form-control" data-toggle="flatpickr" data-enable-time="true" data-no-calendar="true" data-date-format="H:i" data-default-date="13:45" name="heure_retour">
                        </div>
                        Motif :
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="motif"></textarea>

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

@section('page-script')
        <script src="{{asset('theme/dist/assets/vendor/flatpickr/flatpickr.min.js')}}"></script>
@endsection