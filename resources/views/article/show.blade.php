<x-layout>
    <h1 class="lead display-3 text-center mt-5 p-5">Dettaglio annuncio</h1>
    <main class="container">
        <section class="row justify-content-center py-5">
            <div class="col-9 col-md-6 mb-3 carousel-custom">
                <div id="carouselExampleAutoplaying" class="carousel slide carousel-custom" data-bs-ride="carousel">
                    <div class="carousel-inner carousel-custom">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/400" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/400" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/400" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                
            </div>
            
            <article class="col-3 text-center d-flex flex-column align-items-center justify-content-center article-custom ms-5 p-3">
                <div class="fw-bold text-danger">Titolo:</div> <em>{{$article->title}}</em>
                <div class="fw-bold text-danger">Prezzo:</div> <em>{{$article->price}}</em>
                <div class="fw-bold text-danger">Categoria:</div> <em>{{$article->category->name}}</em>
                
            </article>
        </section>
    </main>
</x-layout>