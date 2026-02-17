<nav class="navbar navbar-expand-lg nav-custom bg-light">
    <div class="container-fluid">

        {{-- LOGO SINISTRA --}}
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('media/logo.png') }}" class="logo-navbar" alt="logo presto">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">

            {{-- BLOCCO CENTRALE --}}
            {{-- Aggiunto text-center per mobile --}}
            <ul class="navbar-nav mx-auto text-center text-lg-start">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index_article') }}">
                        {{ __('ui.Annunci') }}
                    </a>
                </li>

                {{-- CATEGORIE --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        {{ __('ui.Categorie') }}
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                            <li>
                                <a class="dropdown-item text-capitalize text-center text-lg-start"
                                   href="{{ route('byCategory', ['category' => $category]) }}">
                                    {{ __("ui.$category->name") }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>

                {{-- UTENTE --}}
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu text-center text-lg-start">
                            @if (Auth::user()->is_revisor)
                                <li>
                                    <a class="dropdown-item"
                                       href="{{ route('revisor.index') }}">
                                        {{ __('ui.Zona revisore') }}
                                        <span class="badge rounded-pill bg-danger">
                                            {{ App\Models\Article::toBeRevisedCount() }}
                                        </span>
                                    </a>
                                </li>
                            @endif

                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="dropdown-item w-100" type="submit">
                                        Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item dropdown text-center">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            {{ __('ui.Utente') }}
                        </a>
                        <ul class="dropdown-menu text-center text-lg-start">
                            <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">
                                {{ __('ui.Registrazione') }}
                            </a></li>
                        </ul>
                    </li>
                @endauth

                {{-- LINGUA --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        {{ __('ui.Lingua') }}
                    </a>
                    <ul class="dropdown-menu text-center text-lg-start">
                        <li><x-_locale lang="it" class="dropdown-item"/>Italiano</li>
                        <li><x-_locale lang="uk" class="dropdown-item"/>Inglese</li>
                        <li><x-_locale lang="es" class="dropdown-item"/>Spagnolo</li>
                    </ul>
                </li>
                
                {{-- Mantenuta la tua classe originale, aggiunto mt-2 per stacco su mobile --}}
                @auth
                <li class="nav-item mt-2 mt-lg-0">
                    <a href="{{route('create_article')}}" class="btn-custom btn-extra btn-danger d-inline-block">Inserisci annuncio</a>
                </li>
                @endauth
            </ul>

            {{-- BLOCCO DESTRO --}}
            {{-- Cambiato align-items-end in align-items-center (mobile) e align-items-lg-end (desktop) --}}
            <div class="d-flex flex-column align-items-center align-items-lg-end mt-3 mt-lg-0">

                {{-- Riga superiore --}}
                {{-- Aggiunto justify-content-center per mobile --}}
                <ul class="navbar-nav flex-row gap-3 gap-lg-4 mb-2 justify-content-center justify-content-lg-end">

                    <li class="nav-item small">
                        <a class="nav-link px-0" href="#">
                            {{ __('ui.Ordini e resi') }}
                        </a>
                    </li>

                    <li class="nav-item small">
                        <a class="nav-link px-0"
                        href="https://info.subito.it/per-i-privati.htm">
                            {{ __('ui.Consigli per la vendita') }}
                        </a>
                    </li>

                    <li class="nav-item small">
                        <a class="nav-link px-0"
                        href="https://assistenza.subito.it/hc/it">
                            {{ __('ui.Assistenza') }}
                        </a>
                    </li>

                </ul>

                {{-- SEARCH sotto --}}
                @if (Route::currentRouteName() != 'home')
                    <form class="w-100 d-flex justify-content-center justify-content-lg-end"
                        style="max-width: 420px;"
                        action="{{route('article.search')}}" method="GET">

                        <div class="input-group">
                            <input type="search"
                                name="query"
                                class="form-control mb-2"
                                placeholder="{{ __('ui.cerca') }}">
                            <button type="submit"
                                    class="btn btn-outline-danger mb-2">
                                {{ __('ui.cerca') }}
                            </button>
                        </div>

                    </form>
                @endif

            </div>

        </div>
    </div>
</nav>