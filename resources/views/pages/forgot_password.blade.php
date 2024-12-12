@extends('layouts.app')

@section('content')
    <div class="container">


        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <form class="row g-3" id="form">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" id="email" name="email" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                    {{-- <a href="{{ route('register') }}" class="btn btn-secondary submit">Criar Conta</a> --}}
                </form>
            </div>
        </div>

    </div>
@endsection
