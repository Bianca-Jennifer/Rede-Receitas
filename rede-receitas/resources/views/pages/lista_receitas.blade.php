@extends('layout.modelo')

@section('titulo', 'Receitas')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/lista_receitas.css') }}">
@endpush

@section('conteudo')

    @include('pages.partials.lista_cards')
    <div class="center">
        {{ $receitas->links('custom.pagination') }}  
    </div>
@endsection