<nav class="navbar navbar-expand-lg nav-personale">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}"><img src="https://picsum.photos/50" alt="logo presto"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item elementiNav">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route("index_article")}}">Annunci</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                            <li>
                                <a class="dropdown-item text-capitalize" href="{{route('byCategory', ['category' => $category])}}">{{$category->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Benvenut* {{Auth::user()->name}}
                    </a>
                    
                    <ul class="dropdown-menu">
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button class="dropdown-item" type="submit">Logout</button>
                        </form>
                    </ul>
                </li>
                
                @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Utente
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                        <li><a class="dropdown-item" href="{{route('register')}}">Registrazione</a></li>
                        <li><hr class="dropdown-divider"></li>
                    </ul>
                </li>
                @endauth
            </ul>    
        </div>
        
        <div>
            @auth
            <a href="{{route("create_article")}}">
                <button class="btn btn-danger">
                    <span class="lable">Inserisci annuncio</span>
                </button>
            </a>
            @endauth
        </div>
    </div>
</nav>