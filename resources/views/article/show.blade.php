<x-layout>
    <h1 class="lead display-3 text-center">Dettaglio annuncio</h1>
    <main class="container">
        <section class="row justify-content-center py-5">
            <div class="col-6 col-md-6 mb-3 carousel-custom">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
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
            
            <article class="col-6 text-center d-flex flex-column align-items-center justify-content-center">
                <div class="fw-bold text-danger">Titolo:</div> {{$article->title}}
                <div class="fw-bold text-danger">Prezzo:</div> {{$article->price}}
                <div class="fw-bold text-danger">Categoria:</div> {{$article->category->name}}
                
            </article>
        </section>
    </main>
</x-layout>