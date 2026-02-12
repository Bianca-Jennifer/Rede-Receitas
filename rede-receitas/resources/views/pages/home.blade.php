@extends('layout.modelo')

@section('conteudo')
    <div class="row">
    @foreach ($receitas as $receita)
        <x-card
            :titulo="$receita->titulo"
            :descricao="$receita->descricao"
            :imagem="$receita->imagem"
            :autor="$receita->user->name"
            :favoritos="$receita->favoritos_count"
        />
    @endforeach
</div>
@endsection
