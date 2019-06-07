@extends('layouts.site')


@section('page-title')

Connexion

@endsection


@section('main-content')

<<<<<<< HEAD

=======
>>>>>>> 46d9e795cf1183ace46f26bb5adbcb4858eabe19

@if(auth()->user())
logged
@else
out
@endif

                
<form method="POST" action="{{Route('login')}}">
		@csrf

		<input type="email" name="mail">
		<input type="password" name="password">
		<button type="submit">Connexion</button>

</form>
@endsection