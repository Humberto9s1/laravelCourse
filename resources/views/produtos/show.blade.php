@extends('layouts.template')
@section('title', 'Produto')
@section('content')
<div class="jumbotron">
  <h1 class="display-4"><?php echo $produto->nome; ?></h1>
  <p class="lead"><?php echo $produto->descricao; ?></p>
  <hr class="my-4">
  <p><?php echo $produto->descricao_longa; ?></p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>
@endsection