<div class="receitas-swiper-wrapper">
    <div class="swiper receitas-swiper">
        <div class="swiper-wrapper">

            @foreach ($receitas as $receita)
                <div class="swiper-slide">
                    <div class="card-wrapper">
                        {{-- Componente de card para cada receita --}}
                        <x-card
                            :titulo="$receita->titulo"
                            :descricao="$receita->descricao"
                            :imagem="$receita->imagem"
                            :autor="$receita->user->name"
                            :favoritos="$receita->favoritos_count"
                            :slug="$receita->slug"
                        />
                    </div>
                </div>
            @endforeach

        </div>

        {{-- Paginação --}}
        <div class="swiper-pagination"></div>
    </div>
</div>