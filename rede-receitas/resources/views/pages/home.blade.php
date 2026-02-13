@extends('layout.modelo')

@section('titulo', 'Home')

{{-- Swiper CSS --}}
@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="{{ asset('css/pages/home_carrossel.css') }}">
@endpush

{{-- Swiper JS + meu JS --}}
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/carrossel.js') }}"></script>
@endpush


@section('conteudo')
    {{-- CARROSSEL DE RECEITAS --}}
    @include('pages.partials.home_carrossel')

@endsection






