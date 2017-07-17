@extends('layout.main')

@section('contenido')
<div class="container">
<div class="jumbotron">
  <h1>{{$user->nombre}}</h1>
  <p>{{$user->codigo}}</p>
  @foreach($user->menus as $menu)
		<li>{{$menu->nombre}}</li>
		<li>{{$menu->modulo}}</li>
		<li>{{$menu->descripcion}}</li>
	</br>

  @endforeach
 
  <p><a class="btn btn-primary btn-lg" href="#" role="button">{{$user->restriccion}}</a></p>
</div>
</div>
@endsection