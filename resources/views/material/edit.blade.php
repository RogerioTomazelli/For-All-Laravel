@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Editar Envio do Material') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>

                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('material.update',$material->id)  }}">
                        @csrf
                        @method('PUT')
                        <!--Encripta o formulario -->
                            <input type="hidden" name="usuario_id" value="{{$material->usuario_id}}">
                            <div class="form-group row">
                                <label for="tipo"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Tipo Arquivo') }}</label>

                                <div class="col-md-6">
                                    <select name="tipo" class="form-control">
                                        <option value="video" @if ($material->tipo == "video") {{ 'selected' }} @endif>
                                            Vídeo
                                        </option>
                                        <option value="audio" @if ($material->tipo == "audio") {{ 'selected' }} @endif>
                                            Audio
                                        </option>
                                    </select>

                                    @error('tipo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nome"
                                       class="col-md-4 col-form-label text-md-right">Nome</label>

                                <div class="col-md-6">
                                    <input type="text"
                                           class="form-control @error('nome') is-invalid @enderror" name="nome"
                                           value="{{$material->nome}}"
                                           required>

                                    @error('nome')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="autor"
                                       class="col-md-4 col-form-label text-md-right">Autor</label>

                                <div class="col-md-6">
                                    <input type="text"
                                           class="form-control @error('autor') is-invalid @enderror" name="autor"
                                           value="{{$material->autor}}"
                                           required>

                                    @error('autor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="descricao"
                                       class="col-md-4 col-form-label text-md-right">Descrição</label>

                                <div class="col-md-6">
                                    <textarea cols="160"
                                              class="form-control @error('descricao') is-invalid @enderror"
                                              name="descricao"
                                              required>{{$material->descricao}}
                                    </textarea>

                                    @error('descricao')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Tipo Arquivo') }}</label>

                                <div class="col-md-6">
                                    <select name="acesso" class="form-control">
                                        <option
                                            value="publico" @if ($material->acesso == "video") {{ 'selected' }} @endif>
                                            publico
                                        </option>
                                        <option
                                            value="privado" @if ($material->acesso == "audio") {{ 'selected' }} @endif>
                                            privado
                                        </option>
                                    </select>

                                    @error('acesso')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Editar
                                    </button>
                                    <a class="btn btn-info" href="{{ route('material.index') }}">
                                        Voltar
                                    </a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
