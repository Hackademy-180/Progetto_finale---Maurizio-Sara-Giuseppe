<x-layout>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <h1 class="text-center display-2 lead m-0 pt-4">{{ __('ui.Crea articolo') }}</h1>
    <livewire:article-form/>
</x-layout>