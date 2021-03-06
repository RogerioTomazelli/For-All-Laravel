@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="cachorro-computador">
                <a href="https://imgbb.com/">
                    <img src="https://i.ibb.co/dWNMPsQ/cachorro-computador.png" alt="cachorro-computador" height="300">
                </a>
            </div>

            <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Atenção!</strong> Para confirmar a alteração, reescreva a senha ou altere-a!
            </div>

            <div class="card">

                <div style="color: white;" class="card-header"><a class="btn btn-primary botao-voltar" href="{{ route('profile.index') }}">Voltar</a>&nbsp;&nbsp;&nbsp;&nbsp;{{ __('Editar Perfil') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    @if($errors->any())
                    <div class="alert alert-danger">
                        <strong>Opa!</strong>Há algum problema com as informações!<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('profile.update', Auth::user()->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <input type="hidden" name="id" value="{{ Auth::user()->id }}" />
                        <label>Nome</label> </br>
                        <input class="form-control" type="text" name="name" value="{{ Auth::user()->name }}" /> </br>
                        <label>E-mail</label> </br>
                        <input class="form-control" type="text" name="email" value="{{ Auth::user()->email }}" /> </br>
                        <label>Senha</label> </br>
                        <input class="form-control" type="text" name="password" value="" placeholder="******" /> </br>
                        <button type="submit" class="btn btn-primary botao-login">Atualizar</button>
                    </form>
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
</div>
@endsection