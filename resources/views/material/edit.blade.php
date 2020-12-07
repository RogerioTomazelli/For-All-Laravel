<?php
 $altura="400";
if ($material->tipo == "video") {
    $altura="400";
} else {
    # code...
}
?> 

@extends('layouts.app')

@section('content')

<div class="container edit-principal">
<div class="cachorro-foralzinho">
                <a href="https://imgbb.com/">
                    <img src="https://i.ibb.co/dWNMPsQ/cachorro-computador.png" alt="cachorro-computador" height="400">
                </a>
            </div>
    <div clas="row">
        <div class="conteudo col-md-9"> <!-- src="{{ Storage::url('materiais/'.$material->extensao)}}" --> 
            <iframe style="border-radius: 10px;" width="650" height="{{$altura}}" src="{{ url('/storage/materiais/'.$material->extensao)}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" class="border-video" allowfullscreen></iframe>
            <br><h6 style="color: #008080;"><strong>{{$material->fonte}}</strong></h6><br>
        </div> 
        <div class="col-md-3 container-material">
            <h2 style="color: #008080;"><strong>{{$material->nome}}</strong></h2><br> 
            <h5 style="color: #008080;"><strong>Autor:</strong> {{$material->autor}}</h5>
            <h5 style="color: #008080; text-align:justify" class="desk"><strong>Descrição:</strong> {{$material->descricao}}</h5>
        </div>
        <!-- <div class="descricao col-md-3">
            <h2 style="color: #008080;"><strong>{{$material->nome}}</strong></h2><br>
            <h5 style="color: #008080;"><strong>Autor:</strong> {{$material->autor}}</h5>
            <h5 style="color: #008080; text-align:justify"><strong>Descrição:</strong> {{$material->descricao}}</h5>
        </div> -->
    </div>
</div>
@endsection
