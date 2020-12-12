@extends('layouts.template')
@section('title', 'Página Inicial')
@section('content')
<div class="container">
<a href="produtos/inserir" type="button" class="mt-4 mb-4 btn btn-primary">Inserir Produtos</a>
@foreach($produtos as $produto)
    <p>{{$produto->nome}}</p>
    @endforeach

    {{$produtos->links()}}
</div>
@endsection