@extends('layout.master')

@section('titulo','Cliente')

@section('conteudo')



<a class="btn btn-primary " href="/clientes/create">Cadastra Novo</a>

<br> <br>
@foreach($clientes as $c)

Nome:{{$c->nome}} - Telefone:{{$c->telefone}}
<a href="/clientes/edit/{{$c->id}}">  Editar</a>
<hr>

@endforeach

@endsection