@extends('layouts.master')

@section('title', 'Lista de partidas')

@section('content')
<form action="{{$router->generate('game_post')}}" method="post">
  <input type="text" name="name" placeholder="Nombre de partida...">
  <input type="submit" value="Crear nueva partida" class="btn btn-success">
</form>
<h2>Partidas</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Administrador</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($games as $game)
    <tr>
      <th scope="row">{{$game->id}}</th>
      <td>{{$game->name}}</td>
      <td>{{$game->id_admin}}</td>
      <td>
        <a href="{{$router->generate('game_edit', ['id'=>$game->id])}}" class="btn btn-warning " style="color: white;">Editar</a>
        <a href="{{$router->generate('game_delete', ['id'=>$game->id])}}" class="btn btn-danger ">Borrar</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


@endsection