<x-layout>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <h1 class="text-center display-2 lead m-0 pt-4">{{ __('ui.Crea articolo') }}</h1>

      {{-- <div class="header-img col-12 d-flex "> --}}
    <main class="container">
        <section class="row d-flex">
            <article class=" col-12 d-flex"> 
                <div class="col-6">
                    <livewire:article-form/>
                </div>
                <div class="crea-articolo-img col-6"></div>
            </article>
        </section>
    </main>
</x-layout>