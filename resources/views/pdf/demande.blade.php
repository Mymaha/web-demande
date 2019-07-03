<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<img src="{{asset('assets/images/sonatrach.png')}}" style="width: 160px; height: auto;">
	<h1 style="text-align: center;">Autorisation de sortie</h1><br><br>

	<div style="padding: 50px 50px;">

		<h4>Nom et Prénom : {{$demande->user->agent()->FullName}}</h4>
	    <h4>Date de sortie : {{$demande->date_sortie}} </h4>
	    <h4>Heure de sortie : {{$demande->heure_sortie}} </h4>
	    <h4>Heure de retour : {{$demande->heure_entree}}</h4><br>
	    

	</div>

	<h5>Date :{{$demande->created_at}}</h5>

   



</body>
</html>