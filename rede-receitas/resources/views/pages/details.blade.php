@extends('layout.modelo')

@section('titulo', 'Receita')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/details.css') }}">
    
@endpush

@push('scripts')
<script>
    function toggleFav(icon){
        icon.classList.toggle("ativo");
    }
</script>
@endpush

@section('conteudo')
<div class="row topo-receita">

    <div class="col s12 m5 imagem">
        <img class="responsive-img z-depth-2" src="{{ asset($receita->imagem) }}">
    </div>

    <div class="col s12 m7 info">

        <h4>{{ $receita->titulo }}</h4>

        <div class="autor-fav">

            <span class="autor">
                <i class="material-icons">person</i>
                    {{ $receita->user->name }}
            </span>

            <span class="fav">

                <i class="material-icons fav-icon" onclick="toggleFav(this)">
                    favorite
                </i>
                
                <span class="fav-count">
                    {{ $receita->favoritos_count }}
                </span>

            </span>

        </div>


        <p class="grey-text">
            <i class="material-icons tiny">restaurant_menu</i>
            {{ $receita->categoria }}
        </p>

        <div class="dados">

            <span class="chip">
                <i class="material-icons tiny">schedule</i>
                {{ $receita->tempo_preparo }} min
            </span>

            <span class="chip">
                <i class="material-icons tiny">groups</i>
                {{ $receita->rendimento }}
            </span>

        </div>

        <p>
            {{ $receita->descricao }}
        </p>

    </div>

</div>


@endsection