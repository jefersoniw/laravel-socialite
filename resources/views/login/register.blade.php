@extends('layout.lay_login')

@section('title', 'Registrar Usuário')
@section('content')

    <div class="col-lg-4 col-10 col-sm-8 m-auto login-form">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('login.register') }}" id="register" method="post" class="register">
                        @csrf

                        <div class="form-group">
                            <a href="{{ route('login') }}" data-toggle="tooltip" data-placement="top"
                                title="Voltar para login" class="btn btn-warning">
                                <i class="fa fa-arrow-left"></i> Voltar
                            </a>
                        </div>

                        <div class="form-group">
                            <label for="name" class="sr-only"> Nome Completo</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Nome Completo" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only"> E-mail</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="E-mail"
                                value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <label for="password" class="sr-only">Senha</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Senha"
                                value="{{ old('password') }}">
                        </div>
                        <div class="form-group">
                            <label for="repeat_password" class="sr-only">Repita a senha</label>
                            <input type="password" class="form-control" id="repeat_password" name="repeat_password"
                                placeholder="Repita a senha" value="{{ old('repeat_password') }}">
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Registrar" id="register"
                                class="register btn btn-primary btn-block rounded" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
