@extends('layout.main')

@section('contenido')
<div class="col-md-6">
<table class="table table-hover">
  <tr>
	  <td>Nombre</td>
	  <td>Cedula</td>
	  <td>Correo</td>
  </tr>
  @foreach($users as $user)
  <tr>
	  <td>{{$user->nombre}}</td>
	  <td>{{$user->codigo}}</td>
	  <td>{{$user->}}</td>
  </tr>
  @endforeach

</table>
</div>
@endsection