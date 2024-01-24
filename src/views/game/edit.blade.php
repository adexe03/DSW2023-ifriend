@extends('layouts.master')


@section('content')
<form method="post" action="{{$router->generate('game_edit', ['id'=>$game->id])}}">
    <div class="mb-3">
        <label for="inputName" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="inputName" name="name" @if(isset($game)) value="{{$game->name}}" @endif>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection