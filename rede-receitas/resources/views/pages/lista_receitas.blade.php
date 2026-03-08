@extends('layout.modelo')

@section('titulo', 'Receitas')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/lista_receitas.css') }}">
    
@endpush

@push('scripts')
    <script src="{{ asset('js/filtros.js') }}" defer></script>
@endpush

@section('conteudo')
   <div class="container">
    <form method="GET" action="/receitas">
        <div class="row">

            <div class="input-field col s3">
                <select name="categoria">
                    <option value="" {{ request('categoria') == null ? 'selected' : '' }}>Todas</option>
                    <option value="Entrada" {{ request('categoria') == 'Entrada' ? 'selected' : '' }}>Entrada</option>
                    <option value="Prato Principal" {{ request('categoria') == 'Prato Principal' ? 'selected' : '' }}>Prato Principal</option>
                    <option value="Sobremesa" {{ request('categoria') == 'Sobremesa' ? 'selected' : '' }}>Sobremesa</option>
                    <option value="Massas" {{ request('categoria') == 'Massas' ? 'selected' : '' }}>Massas</option>
                    <option value="Bebida" {{ request('categoria') == 'Bebida' ? 'selected' : '' }}>Bebidas</option>
                </select>
                <label>Categoria</label>
            </div>

            <div class="input-field col s3">
                <select name="tempo">
                    <option value="" {{ request('tempo') == null ? 'selected' : '' }}>Qualquer</option>
                    <option value="15" {{ request('tempo') == '15' ? 'selected' : '' }}>Até 15 minutos</option>
                    <option value="30" {{ request('tempo') == '30' ? 'selected' : '' }}>Até 30 minutos</option>
                    <option value="60" {{ request('tempo') == '60' ? 'selected' : '' }}>Até 1 hora</option>
                </select>
                <label>Tempo</label>
            </div>

            <div class="col s2">
                <button class="btn btn-filtrar" style="margin-top:25px;">
                    Filtrar
                </button>
            </div>

        </div>
    </form>
</div>
            
    @include('pages.partials.lista_cards')
    <div class="center">
        {{ $receitas->links('custom.pagination') }}  
    </div>

@endsection