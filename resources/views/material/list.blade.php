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
                <div class="input-field col s8">
                    <input class="form-control" name="nome" type="text" placeholder="Título ou autor" aria-label="nome">
                </div>
                <div class="col-md-3">
                    <select class="form-control" id="tipo" name="tipo" class="browser-default validate">
                        <option value="0" selected="selected">Áudios e vídeos</option>
                        <option value="video">Vídeos</option>
                        <option value="audio">Áudios</option>
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
                    <div class="box-part text-center" style="border-radius: 10px;">
                        <!-- src="{{ url('/storage/public/capas/'.$dados->foto)}}" -->
                        <a href="{{ route('material.edit',$dados->id) }}"> <img style="border-radius: 10px;" src="{{ Storage::url('capas/'.$dados->foto)}}" alt="avatar image" width="60%" class="img-capa"></a>
                        <div class="title" style="font-family: Nunito ">
                            <a style="color: black;" href="{{ route('material.edit',$dados->id) }}">
                                <h4><b>{{$dados->nome}}</b></h4>
                            </a>
                        </div>
                        <div class="text text-livro">
                            <span><strong>Autor:</strong> {{$dados->autor}}</span>
                        </div>
                        <div class="text text-livro">
                            <span><strong>Tipo:</strong> {{$dados->tipo}}</span>
                        </div><br>
                        <a href="{{ route('material.edit',$dados->id) }}"><button type="button" class="btn btn-primary botao-login">
                                Acessar material
                            </button> </a><br><br>
                        <form action="{{ route('material.destroy', $dados->id) }}" class="form-horizontal" method="post" style="display: inline-block">
                            {!! csrf_field() !!}
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="submit" value="Remover" onclick="return confirm('Tem certeza que deseja remover?');" class="btn btn-primary botao-login">
                        </form>
                        <br>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<a style="position:fixed; top:30px; right: 43px; font-size: 50px; color: #37bfc4" href="#app"><i class="fa fa-arrow-circle-up"></i></a>
<a style="position:fixed; bottom:30px; right: 43px; font-size: 50px; color: #37bfc4" href="#rodape"><i class="fa fa-arrow-circle-down"></i></a>
<footer id="rodape" class="rodape">
    <h5>Em caso de dúvidas, sugestões ou reclamações, envie uma mensagem para o email <strong> for-all@gmail.com</strong></h5>
</footer>
@endsection