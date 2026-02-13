<nav class="navbar navbar-expand-lg nav-custom bg-light">
    <div class="container-fluid">

        {{-- LOGO SINISTRA --}}
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('media/presto nero.png') }}" class="logo-navbar" alt="logo presto">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">

            {{-- BLOCCO CENTRALE --}}
            <ul class="navbar-nav mx-auto">

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
                                <a class="dropdown-item text-capitalize"
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
                        <ul class="dropdown-menu">
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
                                    <button class="dropdown-item" type="submit">
                                        Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            {{ __('ui.Utente') }}
                        </a>
                        <ul class="dropdown-menu">
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
                    <ul class="dropdown-menu">
                        <li><x-_locale lang="it" class="dropdown-item"/>Italiano</li>
                        <li><x-_locale lang="uk" class="dropdown-item"/>Inglese</li>
                        <li><x-_locale lang="es" class="dropdown-item"/>Spagnolo</li>
                    </ul>
                </li>
                @auth
                <li>
                    <a href="{{route('create_article')}}" class="btn-custom btn btn-danger">Inserisci annuncio</a>
                </li>
                @endauth
            </ul>

                            {{-- BLOCCO DESTRO --}}
                <div class="d-flex flex-column align-items-end">

                    {{-- Riga superiore --}}
                    <ul class="navbar-nav flex-row gap-4 mb-2">

                        <li class="nav-item">
                            <a class="nav-link px-0" href="#">
                                {{ __('ui.Ordini e resi') }}
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link px-0"
                            href="https://info.subito.it/per-i-privati.htm">
                                {{ __('ui.Consigli per la vendita') }}
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link px-0"
                            href="https://assistenza.subito.it/hc/it">
                                {{ __('ui.Assistenza') }}
                            </a>
                        </li>

                    </ul>

                    {{-- SEARCH sotto --}}
                    @if (Route::currentRouteName() != 'home')
                        <form class="w-100"
                            style="max-width: 420px;"
                            action="{{route('article.search')}}" method="GET">

                            <div class="input-group">
                                <input type="search"
                                    name="query"
                                    class="form-control"
                                    placeholder="{{ __('ui.cerca') }}">
                                <button type="submit"
                                        class="btn btn-outline-danger">
                                    {{ __('ui.cerca') }}
                                </button>
                            </div>

                        </form>
                    @endif

                </div>

        </div>
    </div>
</nav>