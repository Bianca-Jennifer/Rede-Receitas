@extends('layout.modelo')

@section('titulo', 'Home')

{{-- Swiper CSS --}}
@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="{{ asset('css/pages/partials/home_carrossel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
@endpush

{{-- Swiper JS + meu JS --}}
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/carrossel.js') }}"></script>
@endpush


@section('conteudo')
    {{-- CARROSSEL DE RECEITAS --}}
    <div class="section-title">
        <span>Últimas receitas</span>
    </div>
    @include('pages.partials.home_carrossel',['receitas' => $ultimasReceitas])
     <div class="ver-mais-container">
        <a href="#" class="btn-ver-mais">Ver mais →</a>
    </div>

     {{-- CARROSSEL DE RECEITAS 2 --}}
    <div class="section-title">
        <span>Receitas em destaque</span>
    </div>
    @include('pages.partials.home_carrossel',['receitas' => $maisFavoritados])
     <div class="ver-mais-container">
        <a href="#" class="btn-ver-mais">Ver mais →</a>
    </div>

    {{-- LISTA DE RECEITAS --}}
    <div class="section-title">
        <span>Receitas rápidas</span>
    </div>
    @include('pages.partials.lista_cards',['receitas' => $receitasRapidas])
    <div class="ver-mais-container">
        <a href="#" class="btn-ver-mais">Ver mais →</a>
    </div>

@endsection






