@extends('layouts.app')

@section('content')
<div class="container-reset">
<div class="col-md-12  card-reset">
<div class="card-header-reset" style="color:white; font-size: 40px"><strong class="Titulo-reset">{{ __('Reset de senha') }}</strong></div>
    <div class="row justify-content-center">
        <div class="col-md-12 text-center container-reset">

                <span class="inform-reset">Entre com seu e-mail registrado. Nós enviaremos um e-mail com o link para resetar sua senha</span>
                <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="text-center icone-user">
                            <a href="https://imgbb.com/">
                                <img src="https://i.ibb.co/cNQfy3J/cachorro-olhando.png" alt="avatar image" height="200" width=200px>
                            </a>
                        </div>
                        
                        <div class="div-reset">
                            <label for="email" class="col-md-12 col-form-label text-md-left">{{ __('Endereço de e-mail') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn botao-reset">
                                {{ __('Enviar') }}
                            </button>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                
                            </div>
                        </div>
                    </form>
            <!-- <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> -->
    </div>
</div>
</div>
@endsection