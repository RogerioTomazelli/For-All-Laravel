@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar Perfil') }}</div>

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

                    <form action="{{ route('perfil.update') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$users->id}}" />
                        <label>Nome</label> </br>
                        <input type="text" name="nome" value="{{$users->name}}" /> </br>
                        <label>E-mail</label> </br>
                        <input type="text" name="email" value="{{$users->email}}" /> </br>
                        <label>Turma</label> </br>
                        <button type="submit" class="btn btn-primary botao-login">Atualizar</button>
                    </form>
                    <a class="btn btn-primary botao-voltar" href="{{ route('perfil.index') }}">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection