<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Démo Laravel - @yield('title')</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('homepage') }}">Jeux video</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Accueil</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('games.index') }}">liste des jeux</a>
                        </li>
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('games.create')}}">Ajouter un jeu</a>
                            </li>   
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('studios.create')}}">Ajouter un studio</a>
                            </li> 
                            </li>   
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('platforms.create')}}">Ajouter une plateforme</a>
                            </li>  
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('categories.create')}}">Ajouter une catégorie</a>
                            </li>                               
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('users.update')}}">Modifier son profil</a>
                            </li>                        
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('users.logout')}}">Déconnexion</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('users.create') }}">Inscription</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('users.login')}}">Connexion</a>
                            </li>
                        @endauth
                        
                    </ul>
                    
                </div>
            </div>
        </nav>
    </header>
    
    <main class="container my-2">
        @yield('content')
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>