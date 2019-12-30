@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/usuarios/{{ $user->id }}" method="post">
            {{ csrf_field() }}
        <input type="text" placeholder="nome" name="name" class="form-control" value="{{ $user->name }}">
            <input type="text" placeholder="email" name="email" class="form-control" value="{{ $user->email }}">
            <input type="password" placeholder="senha" name="password" class="form-control">
            <input type="submit" value="salvar" class="btn btn-primary">
        </form>
    </div>
@endsection