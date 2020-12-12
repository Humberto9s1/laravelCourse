@extends('layouts.template')
@section('title', 'Página Inicial')
@section('content')
<div class="container">
<h1>Página dos Produtos</h1>
@foreach($produtos as $produto)
    <p>{{$produto->nome}}</p>
    @endforeach

    {{$produtos->links()}}
</div>
@endsection