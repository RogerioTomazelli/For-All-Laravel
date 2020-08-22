@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Listagem de Materiais') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <a class="btn btn-primary" href="{{ url('material/create') }}">
                                    Cadastrar
                                </a>
                            </div>
                        </div>

                        <form action="{{route('material.search')}}" method="POST">
                            @csrf
                            <div class="col s12">
                                <div class="row">
                                    <div class="input-field col s3">
                                        <label for="nome">Nome</label>
                                        <input class="form-control" name="nome" type="text" placeholder="Titulo"
                                               aria-label="nome">
                                    </div>
                                    <div class="input-field col s2">
                                        <label for="autor">Autor</label>
                                        <input class="form-control" id="autor" type="text" placeholder="autor"
                                               name="autor" class="validate">
                                    </div>
                                    <div class="col s2">
                                        <label>por Tipo</label>
                                        <select class="form-control" id="tipo" name="tipo"
                                                class="browser-default validate">
                                            <option value="0" selected="selected">TODOS</option>
                                            <option value="video">Vídeo</option>
                                            <option value="audio">audio</option>
                                        </select>
                                    </div>
                                    <div class="col s3">
                                        <label>por Acesso </label>
                                        <select class="form-control" id="acesso" name="acesso"
                                                class="browser-default validate">
                                            <option value="0" selected="selected">::Escolha uma opção::</option>
                                            <option value="publico">Público</option>
                                            <option value="privado">privado</option>
                                        </select>
                                    </div>
                                    <div class="form-group row mb-0">
                                        <div class="col-md-12">
                                            <button class="btn btn-success" type="submit">Buscar</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Autor</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Acesso</th>
                                <th scope="col">Ação</th>
                                <th scope="col">Ação</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($materiais as $dados)
                                <tr>
                                    <th scope="row">{{$dados->id}}</th>
                                    <td>{{$dados->nome}}</td>
                                    <td>{{$dados->autor}}</td>
                                    <td>{{$dados->tipo}}</td>
                                    <td>{{$dados->acesso}}</td>
                                    <td><a class="btn btn-primary"
                                           href="{{ route('material.edit',$dados->id) }}">Editar</a></td>
                                    <td>
                                        <form action="{{ route('material.destroy', $dados->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Excluir</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
