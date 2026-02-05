<x-layout>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <h1>crea articolo</h1>
    <livewire:article-form/>
</x-layout>