@include('../layouts/header')
<div class="container">

    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <form class="row g-3" id="form">
                @csrf
                <div class="col-12 col-form-label">
                    <label for="name" class="form-label">Nome Completo</label>
                    <input type="text" id="name" name="name" class="form-control">
                </div>
                <div class="col-12 col-form-label">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control">
                </div>
                <div class="col-12 col-form-label">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <div class="col-12 col-form-label">
                    <label for="password_confirmation" class="form-label">Confirme a Senha</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
                </div>
                <div class="col-12 col-form-label">
                    <label for="cep" class="form-label">CEP</label>
                    <input type="text" id="cep" name="cep" class="form-control">
                </div>
                <div class="col-12 col-form-label">
                    <label for="street" class="form-label">Rua</label>
                    <input type="text" id="street" name="street" class="form-control">
                </div>
                <div class="col-12 col-form-label">
                    <label for="neighborhood" class="form-label">Bairro</label>
                    <input type="text" id="neighborhood" name="neighborhood" class="form-control">
                </div>
                <div class="col-12 col-form-label">
                    <label for="number" class="form-label">Número</label>
                    <input type="text" id="number" name="number" class="form-control">
                </div>
                <div class="col-12 col-form-label">
                    <label for="city" class="form-label">Cidade</label>
                    <input type="text" id="city" name="city" class="form-control">
                </div>
                <div class="col-12 col-form-label">
                    <label for="state" class="form-label">Estado</label>
                    <input type="text" id="state" name="state" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
            </form>
        </div>
    </div>

</div>
@include('../layouts/footer')
