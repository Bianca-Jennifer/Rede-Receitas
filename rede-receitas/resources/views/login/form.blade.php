@extends('layout.modelo')

@section('titulo', 'Login')

@push('styles')
    <style>
    .btn {
        transition: 0.3s;
    }

    .btn:hover {
        background-color: #145C44 !important;
        transform: scale(1.05);
    }
</style>

@endpush   

@section('conteudo')
<div class="container" style="margin-top: 30px;">
    <div class="row">
        <div class="col s12 m6 offset-m3">
            <div class="card">
                <div class="card-content">
                    <span class="card-title center">Faça seu login</span>


                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $erro)
                            <li>{{ $erro }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <form action="{{ route('login.auth') }}" method="POST">
                        @csrf

                        <div class="input-field">
                            <input id="email" type="email" name="email" required>
                            <label for="email">Email</label>
                        </div>

                        <div class="input-field">
                            <input id="password" type="password" name="password" required>
                            <label for="password">Senha</label>
                        </div>

                        <div class="center">
                            <button  class="btn" type="submit" style="background-color: #0B3D2E; color: white;">
                                Entrar
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection         