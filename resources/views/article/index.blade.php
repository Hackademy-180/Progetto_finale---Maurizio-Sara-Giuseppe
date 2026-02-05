<x-layout>
    <h1 class="lead display-2 text-center mt-5">Tutti gli annunci</h1>
    <main class="container">
        <section class="row">
            @foreach ($articles as $article)
                <span class="card m-2" style="width: 18rem;">
                    <span class="card-body">
                        <h5 class="card-title">{{$article->title}}</h5>
                        <p class="card-text ">{{$article->price}} €</p>
                        <p class="card-text fw-medium">{{$article->category->name}}</p>
                        <a href="{{route('byCategory', ["category" => $article->category])}}" class="btn btn-primary">Categoria</a>
                        <a href="{{route("show_article", compact("article"))}}" class="btn btn-primary">Dettaglio</a>
                    </span>
                </span>
            @endforeach
        </x-layout>

        </section>
    </main>