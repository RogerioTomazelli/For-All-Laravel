@extends('layouts.app')

@section('content')

<div class="container edit-principal">
    <div clas="row">
        <div class="conteudo col-md-9">
        <iframe width="700" height="400" src="{{ Storage::url('materiais/'.$material->extensao)}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" class="border-video" allowfullscreen></iframe>
    </div>
        <div class="descricao col-md-3">
            {{dd(Storage::url('materiais/'.$material->extensao))}}
            <h2>{{$material->nome}}</h2>
            <p>Autor: {{$material->autor}}</p>
            <p>Descrição: {{$material->descricao}}</p>
            <p>Gênero: </p>
            <p>Duração: </p>
            <p></p>
        </div>
    </div>
</div>
@endsection
