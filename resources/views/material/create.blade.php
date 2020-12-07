@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            <div class="cachorro-computador">
                <a href="https://imgbb.com/">
                    <img src="https://i.ibb.co/dWNMPsQ/cachorro-computador.png" alt="cachorro-computador" height="300">
                </a>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="color:white; font-size:18px"><strong>{{ __('Enviar Material') }}</strong></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    @if($errors->any())
                    <div class="alert alert-danger">
                        <strong>Opa!!</strong> Há erros no seu envio<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form method="POST" action="{{ route('material.store') }}" enctype="multipart/form-data">
                        @csrf
                        <!--Encripta o formulario -->


                        <div class="form-group row">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">Título</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" required>

                                @error('nome')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="autor" class="col-md-4 col-form-label text-md-right">Autor</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('autor') is-invalid @enderror" name="autor" required>

                                @error('autor')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file" class="col-md-4 col-form-label text-md-right">Foto da capa</label>

                            <div class="col-md-6">
                                <input type=file name="foto" required>
                                </input>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="descricao" class="col-md-4 col-form-label text-md-right">Descrição</label>

                            <div class="col-md-6">
                                <textarea cols="160" class="form-control @error('descricao') is-invalid @enderror" name="descricao" required>
                                    </textarea>

                                @error('descricao')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Tipo Arquivo') }}</label>

                            <div class="col-md-6">
                                <select name="tipo" class="form-control">
                                    <option value="video">Vídeo</option>
                                    <option value="audio">Áudio</option>
                                </select>

                                @error('nome')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file" class="col-md-4 col-form-label text-md-right">Arquivo</label>

                            <div class="col-md-6">
                                <input type=file name="extensao" required>
                                </input>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fonte" class="col-md-4 col-form-label text-md-right">Fonte (link)</label>

                            <div class="col-md-6">
                                <input type="text" placeholder="Caso seja um conteúdo externo" class="form-control @error('fonte') is-invalid @enderror" name="fonte">

                                @error('fonte')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary botao-login">
                                    Enviar
                                </button>
                                <a class="btn btn-info botao-voltar" href="{{ route('material.index') }}">
                                    Voltar
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="cachorro-fones">
                <a href="https://imgbb.com/">
                    <img src="https://i.ibb.co/hVr0PJr/2-removebg-preview.png" alt="2-removebg-preview" height="300">
                </a>
            </div>
        </div>

    </div>
</div>
@endsection