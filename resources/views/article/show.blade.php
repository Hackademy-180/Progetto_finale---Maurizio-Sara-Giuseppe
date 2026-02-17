<x-layout>
    <h1 class="lead display-3 text-center mt-5 p-5">{{ __('ui.Dettaglio annuncio') }}</h1>
    <main class="container">
        <section class="row ">
            <div class="card-dettaglio mt-4 mb-3 ">
                    <div class="card-details d-flex flex-row justify-content-around">
                        {{-- <p class="text-title">{{$article->title}}</p>
                        <p class="text-body">Prezzo: {{$article->price}} €</p>
                        <a href="{{route('byCategory', ["category" => $article->category])}}" class="btn-custom-1 text-center btn-danger mx-1 mb-3">{{$article->category->name}}</a> --}}
                        {{-- <a href={{route("show_article", compact("article"))}} class="btn-custom text-center btn-danger card-button">{{ __('ui.Dettaglio') }}</a> --}}
                        {{-- <button class="card-button"><a href={{route("show_article", compact("article"))}} class="btn-custom text-center btn-danger card.button">{{ __('ui.Dettaglio') }}</a></button> --}}
                        <div class="col-4 h-100 justify-content-center align-items-center d-flex">
                            
                            @if ($article->images->count() >0)
                                <div id="carouselExampleAutoplaying" class="carousel slide carousel-custom" data-bs-ride="carousel">
                                    <div class="carousel-inner carousel-custom">
                                        @foreach ($article->images as $key => $image)    
                                            <div class="carousel-item @if ($loop->first) active @endif">
                                                <img src="{{$image ->getUrl(300, 300)}}" class="d-block w-100 rounded shadow" alt="Immagine {{$key +1 }} dell'articolo {{$article->title}}">
                                            </div>
                                        @endforeach    
                                
                                        @if($article->images->count() > 1)
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        @endif
                                    </div>
                                </div>
                            @else
                                <div class="">
                                    <div class="card2 d-flex flex-column justify-content-center align-items-center text-center h-100 rounded p-0 w-100">
                                        <img class="img-card-detail rounded" src="https://picsum.photos/500" alt="Nessuna foto inserita dall'utente">
                                    </div>
                                </div>
                            @endif
                        </div>
            
                        
                        <div class="col-6">
                            <div class="card2 d-flex flex-column p-3">
                                
                                <div class="mb-3">
                                    {{-- <div class="fw-bold small">
                                        {{ __('ui.Titolo:') }}
                                    </div> --}}
                                    <h3>
                                        {{ $article->title }}
                                    </h3>
                                </div>
                                <div class="mb-3">
                                    <p>
                                        {{ $article->description }} 
                                    </p>
                                </div>
                                
                                <div class="mb-3">
                                    {{-- <div class="fw-bold small">
                                        {{ __('ui.Prezzo:') }}
                                    </div> --}}
                                    <h2>
                                        {{ $article->price }} €
                                    </h2>
                                </div>
                                
                                <div>
                                    <div class="fw-bold small">
                                        {{ __('ui.Categoria:') }}
                                    </div>
                                    <div >
                                        {{ $article->category->name }}
                                    </div>
                                </div>
                                <section class="d-flex justify-content-end mt-auto">
                                    <div class="card-1 text-white p-1 mt-2">
                                        <div class="card2 p-1 align-items-center">
                                            <p class="px-2"><i class="fa-solid fa-cart-arrow-down fa-bounce me-3"></i>{{ __('ui.Acquista') }}</p>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                
            </div>
            {{-- <article class="col-3 text-center d-flex flex-column align-items-center justify-content-center article-custom ms-5 p-3">
                <div class="fw-bold text-danger">{{ __('ui.Titolo:') }}</div> <em>{{$article->title}}</em>
                <div class="fw-bold text-danger">{{ __('ui.Prezzo:') }}</div> <em>{{$article->price}}</em>
                <div class="fw-bold text-danger">{{ __('ui.Categoria:') }}</div> <em>{{$article->category->name}}</em>
                
            </article> --}}
        </section>
    </main>
</x-layout>