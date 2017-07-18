@extends('home')
@section('content')
<table class="table table-bordered table-hover table-striped">
  <tr>
	  <th>Nombre</th>
	  <th>Cedula</th>
	  <th>Restricción</th>
	  <th>Acciones</th>
  </tr>
  @foreach($users as $user)
  <tr>
	  <td>{{$user->nombre}}</td>
	  <td>{{$user->codigo}}</td>
	  <td>{{$user->restriccion}}</td>
	  <td>
	  	<div class="btn-group-md" role="group" aria-label="...">
		  <a href="{{route('user.show',$user->id)}}" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span></a>
		  <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span></button>
		  <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span></button>		 
		</div>
	  </td>
  </tr>
  @endforeach
  {{ $users->links() }}
</table>
@endsection