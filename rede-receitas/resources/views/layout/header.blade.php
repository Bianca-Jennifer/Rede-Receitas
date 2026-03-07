
{{-- NAVBAR --}}
<nav>
    <div class="nav-wrapper">
        <a href="#!" class="brand-logo"><i class="material-icons large">restaurant</i></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

        {{-- BARRA DE PESQUISA --}}
        <form class="search-center hide-on-med-and-down">
            <div class="search-box">
                <i class="material-icons">search</i>
                <input type="text" placeholder="Pesquisar..." aria-label="Pesquisar">
            </div>
        </form>

        {{-- LINKS --}}
        <ul class="right hide-on-med-and-down">
            <li class = "{{ request()->is('/') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
            <li class="{{ request()->is('receitas*') ? 'active' : '' }}"><a href="{{ route('lista_receitas') }}">Receitas</a></li>
            <li><a href="collapsible.html">Entrar</a></li>
            <li><a href="mobile.html">Criar Conta</a></li>
        </ul>
    </div>
  </nav>


{{-- MENU HAMBÚRGUER PARA MOBILE --}}  
<ul class="sidenav" id="mobile-demo">    
    
    {{-- BARRA DE PESQUISA --}}
    <li class="sidenav-search">
        <form>
            <div class="search-box-mobile">
                <i class="material-icons">search</i>
                <input type="text" placeholder="Pesquisar..." aria-label="Pesquisar">

            </div>
        </form>
    </li>

    {{-- LINKS --}}
    <li class = "{{ request()->is('/') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
    <li class="{{ request()->is('receitas*') ? 'active' : '' }}"><a href="{{ route('lista_receitas') }}">Receitas</a></li>
    <li><a href="collapsible.html">Entrar</a></li>
    <li><a href="mobile.html">Criar Conta</a></li>
</ul>

{{-- FIM DO NAVBAR --}}

{{-- HERO SECTION --}}
@if(request()->is('/'))
<section class="hero">
    <div class="hero-content">
        <h1>Raiz & Panela</h1>
        <p>Receitas simples, com sabor de casa</p>
    </div>

    <small class="hero-credit">
        Imagem de
        <a href="https://pixabay.com/pt/users/lisapohl-16489211/" target="_blank" rel="noopener">
            LisaPohl
        </a>
        por
        <a href="https://pixabay.com/pt/" target="_blank" rel="noopener">
            Pixabay
        </a>
    </small>
</section>
@endif



