<x-layout>
    <h1 class="lead display-3 text-center mt-5 p-5">Dettaglio annuncio</h1>
    <main class="container">
        <section class="row justify-content-center py-5">
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
                    <img src="https://picsum.photos/300" alt="Nessuna foto inserita dall'utente">
                @endif
            </div>
            
            <article class="col-3 text-center d-flex flex-column align-items-center justify-content-center article-custom ms-5 p-3">
                <div class="fw-bold text-danger">Titolo:</div> <em>{{$article->title}}</em>
                <div class="fw-bold text-danger">Prezzo:</div> <em>{{$article->price}}</em>
                <div class="fw-bold text-danger">Categoria:</div> <em>{{$article->category->name}}</em>
                
            </article>
        </section>
    </main>
</x-layout>