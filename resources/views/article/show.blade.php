<x-layout>
    <h1 class="lead display-3 text-center mt-5 p-5">{{ __('ui.Dettaglio annuncio') }}</h1>
    <main class="container">
        <section class="row d-flex">
            <div class="col-9 col-md-6 mb-3 carousel-custom">
                
                @if ($article->images->count() >0)
                <div id="carouselExampleAutoplaying" class="carousel slide carousel-custom" data-bs-ride="carousel">
                    <div class="carousel-inner carousel-custom">
                        @foreach ($article->images as $key => $image)    
                        <div class="carousel-item @if ($loop->first) active @endif">
                            <img src="{{$image ->getUrl(300, 300)}}" class="d-block w-100 rounded shadow" alt="Immagine {{$key +1 }} dell'articolo {{$article->title}}">
                        </div>
                        @endforeach    
                        
                    </div>
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
                @else
                <div class="card-1 col-2">
                    <div class="card2 d-flex flex-column justify-content-center align-items-center text-center p-3">
                        <img class="img-card-detail" src="https://picsum.photos/500" alt="Nessuna foto inserita dall'utente">
                    </div>
                </div>
                @endif
            </div>
            {{-- 
            <div class="card detail-card" style="width: 18rem;">
                <ul class="list-group list-group-flush text-center ">
                    <li class="list-group-item"><div class="fw-bold text-danger">{{ __('ui.Titolo:') }}</div> <em>{{$article->title}}</em></li>
                    <li class="list-group-item"><div class="fw-bold text-danger">{{ __('ui.Prezzo:') }}</div> <em>{{$article->price}}</em></li>
                    <li class="list-group-item"><div class="fw-bold text-danger">{{ __('ui.Categoria:') }}</div> <em>{{$article->category->name}}</em></li>
                </ul>
            </div>  --}}
            
            {{-- <div class="card-1">
                <ul class="list-group list-group-flush text-center h-100 d-flex flex-column justify-content-center">
                    <li class="list-group-item bg-transparent border-0">
                        <div class="fw-bold text-danger">{{ __('ui.Titolo:') }}</div>
                        {{ $article->title }}
                    </li>
                    
                    <li class="list-group-item bg-transparent border-0">
                        <div class="fw-bold text-danger">{{ __('ui.Prezzo:') }}</div>
                        {{ $article->price }} €
                    </li>
                    
                    <li class="list-group-item bg-transparent border-0">
                        <div class="fw-bold text-danger">{{ __('ui.Categoria:') }}</div>
                        {{ $article->category->name }}
                    </li>
                </ul>
            </div> --}}
            
            <div class="col-6">
                {{-- <div class="card2 d-flex flex-column justify-content-center align-items-center text-center p-3"> --}}
                    <div class="mb-3">
                        <div class="fw-bold small">
                            {{ __('ui.Titolo:') }}
                        </div>
                        <div >
                            {{ $article->title }}
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <div class="fw-bold small">
                            {{ __('ui.Prezzo:') }}
                        </div>
                        <div class=>
                            {{ $article->price }} €
                        </div>
                    </div>
                    
                    <div>
                        <div class="fw-bold small">
                            {{ __('ui.Categoria:') }}
                        </div>
                        <div >
                            {{ $article->category->name }}
                        </div>
                    </div>
                    <div class="card-1 text-white d-frex p-1 mt-2 justify-content-center align-items-center">
                        <div class="card2 p-1 align-items-center">
                            <p class="px-2"><i class="fa-solid fa-cart-arrow-down fa-bounce"></i>  acquista</p>
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