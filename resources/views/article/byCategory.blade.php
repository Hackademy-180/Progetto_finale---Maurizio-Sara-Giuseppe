<x-layout>
    <header class="container">
        <section class="row py-5 justify-content-center align-items-center text-center">
            <h1 class="display-2 lead">{{__("ui.$category->name")}}</h1>
        </section>
    </header>

    <main class="container">
        
        <section class="row justify-content-center align-items-center">


            @forelse($articles as $article)
                <span class="col-12 col-md-3 text-center">
                    <x-cardByCategory :article="$article" />
                </span>
            @empty
                <span class="col-12 text-center">
                    <h3>{{ __('ui.DettaglioNon ci sono ancora articoli in questa categoria.') }}</h3>
                </span>
          
                
            @endforelse
        </section>
    </main>
    

</x-layout>