<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>

        <!-- Materialize CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> 
        @stacks('styles')
    </head>

    <body>
        <header>
            @include('layout.header')
        </header> 
        
        <main>
            @yield('conteudo')
        </main>

        <footer>
            @include('layout.footer')

            <!-- Materialize JS -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> 
        </footer>    
    </body>
</html>