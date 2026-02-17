<x-layout>
    <h1 class="lead display-2 text-center mt-5 header-custom">{{ __('ui.Tutti gli annunci') }}</h1>
    <main class="container">
        <section class="row">
            @foreach ($articles as $article)
            <article class="col-12 col-md-3 ">
                <span class="card m-2">
                    <span class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title">{{$article->title}}</h5>
                        <h4 class="mb-4">{{$article->price}} €</h4>
                        <div class="d-flex flex-column justify-content-between">
                            <a href="{{route('byCategory', ["category" => $article->category])}}" class="btn-custom-1 text-center btn-danger mx-1 mb-3">{{$article->category->name}}</a>
                            <a href={{route("show_article", compact("article"))}} class="btn-custom text-center btn-danger">{{ __('ui.Dettaglio') }}</a>
                            
                        </div>
                    </span>
                </span>
            </article>
            @endforeach
        </x-layout>
        
    </section>
</main>