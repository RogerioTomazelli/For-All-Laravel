@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a class="btn btn-primary botao-voltar" href="{{ route('profile.index') }}">Voltar</a>&nbsp;&nbsp;&nbsp;&nbsp;{{ __('Editar Perfil') }}</div>

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

                    <form action="{{ route('profile.update',Auth::user()->id) }}" method="get">
                        @csrf
                        <input type="hidden" name="id" value="{{ Auth::user()->id }}" />
                        <label>Nome</label> </br>
                        <input class="form-control" type="text" name="nome" value="{{ Auth::user()->name }}" /> </br>
                        <label>E-mail</label> </br>
                        <input class="form-control" type="text" name="email" value="{{ Auth::user()->email }}" /> </br>
                        <label>Senha</label> </br>
                        <input class="form-control" type="text" name="email" value="{{ Auth::user()->password }}" /> </br>
                        <button type="submit" class="btn btn-primary botao-login">Atualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection