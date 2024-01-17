@extends('layouts.master')

@section('title', 'Lista de usuarios')

@section('content')
<form method="post" action="{{$router->generate('user_post')}}">
    <div class="mb-3">
        <label for="inputName" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="inputName" name="name">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="password">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="mail">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection