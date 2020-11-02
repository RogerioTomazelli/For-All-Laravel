@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h5 style="width: 350px; background-color: white; padding:10px; border-radius:10px"><strong>Nome: </strong>{{ Auth::user()->name }}</h5>
    </div>
    <div class="row">
        <h5 style="width: 350px; background-color: white; padding:10px; border-radius:10px"><strong>Email: </strong>{{ Auth::user()->email }}</h5>
    </div>
    <br>
    <div class="row">
        <a class="btn btn-primary botao-login" href="">Editar</a>
        <p>&nbsp;&nbsp;</p>
        <a class="btn btn-primary botao-login" href="">Materiais enviados</a>
    </div>
</div>
@endsection