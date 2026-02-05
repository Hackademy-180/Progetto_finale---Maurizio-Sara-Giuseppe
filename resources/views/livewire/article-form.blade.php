<div>
    <form wire:submit="save" class="bg-body-tertiary shadow rounded pt-3 px-5 pb-3">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" wire:model.blur="title" id="title">
            @error("title")
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror 
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control @error('description') is-invalid @enderror" wire:model.blur="description" id="description" rows="10" cols="30"></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" wire:model.blur="price" id="price">
        </div>
        <div class="mb-3">
            <select wire:model.blur="category" class="form-control @error('category') is-invalid @enderror">
                <option selected> scegli la categoria</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-dark">Crea</button>
        </div>
    </form>
</div>
