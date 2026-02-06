<x-layout>
    <h1 class="lead display-2 text-center">Dettaglio annuncio</h1>
    <main class="container">
        <section class="row justify-content-center py-5">
            <div class="col-12 col-md-6 mb-3 carousel-custom">
                <div id="carouselExample" class="carousel slide carousel-custom">
                    <div class="carousel-inner">
                        <div class="card-custom carousel-item active">
                            <img class="img-custom" src="https://picsum.photos/400" class="d-block w-100 rounded shadow" alt="...">
                        </div>
                        <div class="card-custom carousel-item active">
                            <img class="img-custom" src="https://picsum.photos/400" class="d-block w-100 rounded shadow" alt="...">
                        </div>
                        <div class="card-custom carousel-item">
                            <img class="img-custom" src="https://picsum.photos/400" class="d-block w-100 rounded shadow" alt="...">
                        </div>
                        <div class="card-custom carousel-item">
                            <img class="img-custom" src="https://picsum.photos/400" class="d-block w-100 rounded shadow" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                
            </div>
            
            <article class="col-12 text-center">
                <div class="fw-bold">Titolo:</div> {{$article->title}}
                <div class="fw-bold">Prezzo:</div> {{$article->price}}
                <div class="fw-bold">Categoria:</div> {{$article->category->name}}
                
            </article>
        </section>
    </main>
</x-layout>