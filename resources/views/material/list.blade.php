@extends('layouts.app')

@section('content')
    <div class="container lista-principal">
    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form action="{{route('material.search')}}" method="POST">
                            @csrf
                            <div class="col s12">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input class="form-control" name="nome" type="text" placeholder="Título ou autor"
                                               aria-label="nome">
                                    </div>
                                    <div class="col-md-2">
                                        <select class="form-control" id="tipo" name="tipo"
                                                class="browser-default validate">
                                            <option value="0" selected="selected">Tipo de mídia</option>
                                            <option value="0">Todos</option>
                                            <option value="video">Vídeo</option>
                                            <option value="audio">Audio</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 float-right">
                                        <select class="form-control" id="acesso" name="acesso"
                                                class="browser-default validate" placeholder="Privacidade">
                                            <option value="0">Todos</option>
                                            <option value="publico">Público</option>
                                            <option value="privado">privado</option>
                                        </select>
                                    </div>
                                    <div class="form-group row mb-0">
                                        <div class="col-md-12">
                                            <button class="btn btn-success botao-pesquisa" type="submit"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>
            <div class="box">
            <div class="container">
                <div class="row">
                    @foreach($materiais as $dados)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="box-part text-center">             
                            <img src="{{$dados->foto}}" alt="avatar image" height="100" class="img-perfil">     
                            <div class="title">
                                <h4>{{$dados->nome}}</h4>
                            </div>  
                            <div class="text">
                                <span>{{$dados->descricao}}</span>
                            </div>            
                            <div class="text">
                                <span>Autor: {{$dados->autor}}</span>
                            </div>
                            <div class="text">
                                <span>{{$dados->tipo}}</span>
                            </div>
                            <a href="{{ route('material.edit',$dados->id) }}">detalhes</a>          
                        </div>
                    </div>
                    @endforeach 	 
                </div>	 
            </div>		
        </div>
    </div>
@endsection
