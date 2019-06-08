@foreach(auth()->user()->MyRoles() as $role)

<ul>
	<li>{{$role->designation}}</li>
</ul>
@endforeach