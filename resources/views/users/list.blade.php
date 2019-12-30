@extends('layouts.app')

@section('content')
    <div class="container">
        <ul>
            @foreach ($users as $user)
                <li>
                    {{ $user->name }}
                    <a href="/usuarios/{{ $user->id }}/edit">editar</a>
                    <a href="/usuarios/{{ $user->id }}/delete">remover</a>
                </li>  
            @endforeach
        </ul>
    
        <form action="/usuarios" method="post">
            {{ csrf_field() }}
            <input type="text" placeholder="nome" name="name" class="form-control">
            <input type="text" placeholder="email" name="email" class="form-control">
            <input type="password" placeholder="senha" name="password" class="form-control">
            <input type="submit" value="salvar" class="btn btn-primary">
        </form>
    </div>
@endsection