<nav class="navbar navbar-expand-lg nav-custom bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}"><img src="{{ asset('media/presto nero.png') }}" class="logo-navbar" alt="logo presto"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse bg-light" id="navbarSupportedContent">

            <ul class="navbar-nav mx-auto mb-4 mb-lg-0">

                <li class="nav-item fw-bold nav-elements">
                    <a class="nav-link" href="{{route('home')}}">Home</a>
                </li>

                <li class="nav-item fw-bold nav-elements">
                    <a class="nav-link" href="{{route("index_article")}}">Annunci</a>
                </li>

                <li class="nav-item fw-bold nav-elements dropdown">
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
                    <a class="nav-link dropdown-toggle fw-bold nav-elements" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Benvenut* {{Auth::user()->name}}
                    </a>
                    
                    <ul class="nav-item dropdown-menu">
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button class="dropdown-item" type="submit">Logout</button>
                        </form>
                    </ul>
                </li>

                <div class="nav-item">
                    <a href="{{route("create_article")}}">
                        <button class="btn btn-danger">
                            <span class="lable">Inserisci annuncio</span>
                        </button>
                    </a>
                </div>

                @else
                
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Utente
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                        <li><a class="dropdown-item" href="{{route('register')}}">Registrazione</a></li>
                        
                    </ul>
                </li>
                @endauth
            </ul>    
        
        
         
            <div class=" nav-item mb-4">
                <ul class=" nav-item navbar-nav mx-auto mt-4 me-3">
                    <!-- sezione ordini e resi -->
                    <li class="nav-item nav-elements">
                        <a class="nav-link pt-0 testolink2" href="#">ordini e resi</a>
                    </li>
                    <!-- consigli per la vendita -->
                    <li class="nav-item nav-elements">
                        <a class="nav-link pt-0 testolink2" href="#">consigli per la vendita</a>
                    </li>
                    <!-- assistenza -->
                    <li class="nav-item nav-elements">
                        <a class="nav-link pt-0 testolink2" href="#">assistenza</a>
                    </li>
                            
                 </ul>
                    

                {{-- BARRA DI RICEERCA USER STORY #10 --}}
                 <form class="d-flex ms-auto" role="search" action="{{route('article.search')}}" method="GET">
                    <div class="input-group">
                        <input type="search" name="query" class="form-control" placeholder="Cerca" aria-label="search">
                        <button type="submit" class="input-group-text btn btn-outline-success" id="basic-addon2">
                            Cerca
                        </button>
                    </div>
                 </form>
                {{-- BARRA DI RICEERCA USER STORY #10 --}}

                <!-- INIZIO BARRA DI RICERCA IMPORTATA OPENSOURCE -->
                {{-- <div class="nav-item group ms-3">
                    <svg viewBox="0 0 24 24" aria-hidden="true" class="icon">
                        <g>
                            <path
                                d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"
                            ></path>
                        </g>
                    </svg>
                    <input class="input" type="search" placeholder="cerca" /> --}}

                    <!-- FINE BARRA DI RICERCA IMPORTATA OPENSOURCE -->
                
                
                    <!-- icone -->
                    {{-- <div class="nav-item d-flex justify-content-evenly text-center sention-icon">
                        <a class="nav-link nav-icon me-auto text-start" href="#">
                            <i class=" fa-regular fa-user "></i>
                        </a>
                        <a class="nav-item nav-link nav-icon me-auto text-center" href="#">
                            <i class=" fa-regular fa-heart"></i>
                        </a>
                        <a class="nav-item nav-link nav-icon ms-auto text-end" href="#">
                            <i class=" fa-solid fa-bag-shopping"></i>
                        </a> --}}
                    </div>
                </div>
            </div>
        </div>       
    </div>
</nav>