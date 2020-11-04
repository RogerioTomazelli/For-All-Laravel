@extends('layouts.app')

@section('content')
<div class="container">
<div class="col-4">
<div class="row teste">
    
        <h1 style="width: 350px; color: #37BFC4; padding:10px; border-radius:10px">
            <strong>Dados do usuário </strong>
    </h1>
    </div>
    <div class="row">

        <h5 style="width: 350px; background-color: white; padding:10px; border-radius:10px">
            <strong>Nome: </strong>{{ Auth::user()->name }}
        </h5>
   
    </div>
    <div class="row">
       
        <h5 style="width: 350px; background-color: white; padding:10px; border-radius:10px">
        <strong>Email: </strong>{{ Auth::user()->email }}</h5>
        
    </div>
    <br>
    <div class="row">

        <a class="btn btn-primary botao-login" href="{{ route('profile.edit',Auth::user()->id) }}">Editar</a>
        <p>&nbsp;&nbsp;</p>
        <a class="btn btn-primary botao-login" href="{{ route('material.enviado',Auth::user()->id) }}">Materiais enviados</a>

    </div>
</div>
    <div class="col">
        <a href="https://imgbb.com/">
            <img src="https://i.ibb.co/s9NRFKt/cachorro-perfil-editar.png" alt="avatar image" class="cachorro-editar" height="500">
        </a>
    </div>
</div>
@endsection