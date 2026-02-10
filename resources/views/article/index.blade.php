<x-layout>
    <h1 class="lead display-2 text-center mt-5">Tutti gli annunci</h1>
    <main class="container">
        <section class="row">
            @foreach ($articles as $article)
            <article class="col-12 col-md-3 ">
                <span class="card card-custom m-2">
                    <span class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title">{{$article->title}}</h5>
                        <div>
                            <p class="card-text ">{{$article->price}} €</p>
                            <p class="card-text fw-medium">{{$article->category->name}}</p>
                            <a href="{{route('byCategory', ["category" => $article->category])}}" class="btn btn-primary">Categoria</a>
                            <a href="{{route("show_article", compact("article"))}}" class="btn btn-primary">Dettaglio</a>
                        </div>
                    </span>
                </span>
            </article>
            @endforeach
        </x-layout>
        
    </section>
</main>