@extends('home')
@section('content')
<a href="{{route('user.index')}}" class="btn btn-primary">Volver</a>

<table class="table table-bordered table-hover table-striped">
  <tr>
	  <th>Nombre</th>
	  <th>Cedula</th>
	  <th>Restricción</th>
	  <th>Menus</th>
  </tr>
  
  <tr>
	  <td>{{$user->nombre}}</td>
	  <td>{{$user->codigo}}</td>
	  <td>{{$user->language->nombre}}</td>
	  <td>
	  	@foreach($user->menus as $menu)
	  	<span class="label label-primary">{{$menu->nombre}}</span>
	  	@endforeach
	  </td>
  </tr>
 
</table>
@endsection