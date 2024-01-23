@extends('layouts.master')

@section('title', 'Lista de usuarios')

@section('content')
<a href="{{$router->generate('user_create')}}" class="btn btn-success ">Crear Usuario</a>
<h2>Tabla de usuarios</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Password</th>
      <th scope="col">email</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->password}}</td>
      <td>{{$user->mail}}</td>
      <td>
        <a href="{{$router->generate('user_edit', ['id'=>$user->id])}}" class="btn btn-warning " style="color: white;">Editar</a>
        <a href="{{$router->generate('user_delete', ['id'=>$user->id])}}" class="btn btn-danger ">Borrar</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


@endsection