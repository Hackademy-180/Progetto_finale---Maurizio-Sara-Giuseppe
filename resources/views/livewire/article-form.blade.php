<div>
    <form wire:submit="save" class="bg-body-tertiary shadow rounded pt-3 px-5 pb-3">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label"> {{ __('ui.Titolo:') }}</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" wire:model.blur="title" id="title">
            @error("title")
                <div class="text-danger">
                    {{$message}}
                </div>
            @enderror 
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">{{ __('ui.Descrizione:') }}</label>
            <textarea class="form-control @error('description') is-invalid @enderror" wire:model.blur="description" id="description" rows="10" cols="30"></textarea>
            @error("description")
                <div class="text-danger">
                    {{$message}}
                </div>
            @enderror 
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">{{ __('ui.Prezzo:') }}</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" wire:model.blur="price" id="price">
            @error("price")
                <div class="text-danger">
                    {{$message}}
                </div>
            @enderror 
        </div>
        <div class="mb-3">
            <select wire:model.blur="category" class="form-control @error('category') is-invalid @enderror">
                <option selected> {{ __('ui.scegli la categoria') }}</option>
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error("category")
                <div class="text-danger">
                    {{$message}}
                </div>
            @enderror 
        </div>
        {{-- inserimento immagini --}}
        <div class="mb-3">
            <input type="file" wire:model.live="temporary_images" multiple class="form-control shadow @error('temporary_images.*') is-invalid @enderror" placeholder="Img/">
            @error('temporary_images.*')
                <p class="fst-italic text-danger">{{$message}}</p>
            @enderror
            @error('temporary_images.')
                <p class="fst-italic text-danger">{{$message}}</p>
            @enderror
        </div>
        @if (!empty($images))
            <section class="row">
                <div class="col-12">
                    <p>Photo preview:</p>
                    <div class="row  rounded shadow py-4">
                        @foreach ($images as $key => $image)
                            <div class="col-3 align-items-center my-3">
                                <div class="img-preview mx-auto shadow rounded" style="background-image: url({{ $image->temporaryUrl()}});">
                                </div>
                                <button type="button" class="btn mt-1 btn-danger" wire:click="removeImage({{ $key}})">X</button>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-dark"> {{ __('ui.Crea articolo') }}</button>
        </div>
    </form>
</div>
