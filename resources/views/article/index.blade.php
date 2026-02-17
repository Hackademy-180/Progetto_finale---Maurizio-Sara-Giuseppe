<x-layout>
    <h1 class="lead display-2 text-center mt-5 header-custom">{{ __('ui.Tutti gli annunci') }}</h1>
    <main class="container">
        <section class="row">
            @foreach ($articles as $article)
            <article class="col-12 col-md-4 ">
                <!-- From Uiverse.io by alexruix --> 
                <div class="card-test mt-4 mb-3">
                    <div class="card-details">
                        <p class="text-title">{{$article->title}}</p>
                        <p class="text-body">Prezzo: {{$article->price}} €</p>
                        <a href="{{route('byCategory', ["category" => $article->category])}}" class="btn-custom-1 text-center btn-danger mx-1 mb-3">{{$article->category->name}}</a>
                    </div>
                    <a href={{route("show_article", compact("article"))}} class="btn-custom text-center btn-danger card-button">{{ __('ui.Dettaglio') }}</a>
                    {{-- <button class="card-button"><a href={{route("show_article", compact("article"))}} class="btn-custom text-center btn-danger card.button">{{ __('ui.Dettaglio') }}</a></button> --}}
                </div>
                {{-- <span class="card card-annunci m-2">
                    <span class="card-body card-annunci d-flex flex-column justify-content-between">
                        <h5 class="card-title text-center">{{$article->title}}</h5>
                        <h4 class="mb-4 text-center">Prezzo: {{$article->price}} €</h4>
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