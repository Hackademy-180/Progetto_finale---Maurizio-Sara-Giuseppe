<x-layout>
    <main class="container">
        <section class="row py-5 justify-content-center align-items-center text-center">
            <h1>Articoli di <span class="lead fw-bold">{{$category->name}}</span></h1>
        </section>
        <section class="row justify-content-center align-items-center">
            @forelse ($articles as $article)
                <div class="col-12 text-center">
                    <x-card :article="$article">
                </div>
            @empty
                <div class="col-12 text-center">
                    <h3>Non ci sono ancora articoli in questa categoria.</h3>
                </div>
          
                
            @endforelse
        </section>
    </main>

</x-layout>