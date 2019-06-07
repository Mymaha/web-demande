@extends('layouts.site')


@section('page-title')

Connexion

@endsection


@section('main-content')

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