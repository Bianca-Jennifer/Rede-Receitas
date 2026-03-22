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

<div class="secao-detalhes">

    <!-- INGREDIENTES -->
    <div class="bloco">
        <h5>
            <i class="material-icons">restaurant_menu</i>
            Ingredientes
        </h5>

        <ul class="lista-ingredientes">
            @foreach (array_filter(explode("\n", $receita->ingredientes)) as $ingrediente)
                <li>{{ $ingrediente }}</li>
            @endforeach
        </ul>
    </div>

    <!-- MODO DE PREPARO -->
    <div class="bloco">
        <h5>
            <i class="material-icons">format_list_numbered</i>
            Modo de Preparo
        </h5>

        <ol class="lista-preparo">
            @foreach (array_filter(explode("\n", $receita->modo_preparo)) as $passo)
                <li>{{ $passo }}</li>
            @endforeach
        </ol>
    </div>

</div>
@endsection