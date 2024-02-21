<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>L@yield('title')</title>

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <!-- CSS  -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/styles.css">

        <script src="/js/script.js"></script>
    </head>
    <body >
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id = "navbar">
                    <a href="/" class= "navbar-brand">
                        <img src="/img/logo.svg" alt="GCC Events">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Évennements</a>
                        </li>
                        <li class="nav-item">
                            <a href="/events/create" class="nav-link">Créer un évennement</a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">login</a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">signup</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        @yield('content')
        <footer>
            <p>GCC Évennement &copy; 2024</p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<!-- <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> -->
    </body>
</html>
