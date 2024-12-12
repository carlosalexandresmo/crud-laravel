@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <form class="row g-3" id="formLogin">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" id="email" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" id="password" name="password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <a href="{{ route('forgotPassword') }}" class="card-link">Esqueceu sua senha?</a>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg">Entrar</button>
                    <a href="{{ route('register') }}" class="btn btn-secondary submit">Criar Conta</a>
                </form>
            </div>
        </div>

    </div>
@endsection
