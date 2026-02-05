<x-layout>
    <h1>tutti gli annunci</h1>
    @foreach ($articles as $article)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$article->title}}</h5>
                <p class="card-text">{{$article->price}}</p>
                <p class="card-text">{{$article->category->name}}</p>

                
                <a href="{{route("show_article", compact("article"))}}" class="btn btn-primary">Dettaglio</a>
            </div>
        </div>
    @endforeach
</x-layout>