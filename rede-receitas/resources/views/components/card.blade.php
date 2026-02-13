@once
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/components/card.css') }}">
    @endpush
@endonce

<div class="col s6 m6 l3">  
    <a href="{{ route('home') }}" class="card-link">
        <div class="card">

            <div class="card-image">
                <img src="{{ asset($imagem) }}" alt="{{ $titulo }}">
            </div>

            <div class="card-content">
                <span class="card-title">{{ $titulo }}</span>

                <p class="card-text">
                    {{ $descricao }}
                </p>
            </div>

            <div class="card-action card-footer">
                <span class="card-author">
                    <i class="material-icons tiny">person</i>
                    {{ $autor }}
                </span>

                <span class="card-favs">
                    <i class="material-icons tiny">favorite</i>
                    {{ $favoritos }}
                </span>
                </div>
        </div>
    </a>    
</div>
