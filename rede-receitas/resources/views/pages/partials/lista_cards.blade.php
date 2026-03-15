@once
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/pages/partials/lista_cards.css') }}">
    @endpush
@endonce

<div class="row">

    @foreach($receitas as $receita)
        <x-card
            :titulo="$receita->titulo"
            :descricao="$receita->descricao"
            :imagem="$receita->imagem"
            :autor="$receita->user->name"
            :favoritos="$receita->favoritos_count"
            :slug="$receita->slug"
        />
    @endforeach

</div>