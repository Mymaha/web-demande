Hey u r logged in

<a href="{{Route('logout')}}">Logout</a>

@foreach(Session::get('role') as $role)

{{$role}}

@endforeach