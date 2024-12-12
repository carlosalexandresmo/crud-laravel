@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <form class="row g-3" id="formRegister">
                    @csrf
                    <div class="col-12 col-form-label">
                        <label for="name" class="form-label">Nome Completo</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="col-12 col-form-label">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="col-12 col-form-label">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                    <div class="col-12 col-form-label">
                        <label for="confirmed_password" class="form-label">Confirme a Senha</label>
                        <input type="password" id="confirmed_password" name="confirmed_password" class="form-control"
                            required>
                    </div>
                    <div class="col-12 col-form-label">
                        <label for="cep" class="form-label">CEP</label>
                        <input type="text" id="cep" name="cep" class="form-control" required>
                    </div>
                    <div class="col-12 col-form-label">
                        <label for="street" class="form-label">Rua</label>
                        <input type="text" id="street" name="street" class="form-control" required>
                    </div>
                    <div class="col-12 col-form-label">
                        <label for="district" class="form-label">Bairro</label>
                        <input type="text" id="district" name="district" class="form-control" required>
                    </div>
                    <div class="col-12 col-form-label">
                        <label for="street_number" class="form-label">Número</label>
                        <input type="text" id="street_number" name="street_number" class="form-control" required>
                    </div>
                    <div class="col-12 col-form-label">
                        <label for="city" class="form-label">Cidade</label>
                        <input type="text" id="city" name="city" class="form-control" required>
                    </div>
                    <div class="col-12 col-form-label">
                        <label for="state" class="form-label">Estado</label>
                        <input type="text" id="state" name="state" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
                </form>
            </div>
        </div>

    </div>
@endsection
