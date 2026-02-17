<div class="card card-custom" >
  <img src="{{$article->images->isNotEmpty() ? Storage::url($article->images->first()->path) : "https://picsum.photos/500"}}" class="card-img-top card-img-custom" alt="Iammagine dell'articolo {{$article->title}}">
  <div class="card-body ">
    <h5 class="card-title">{{$article->title}}</h5>
    <div class="d-flex flex-column justify-content-between">
      <h4 class="mb-4">{{$article->price}} €</h4>
      <a href="{{route('byCategory', ["category" => $article->category])}}" class="btn-custom-1 mx-1 mb-3 ">{{$article->category->name}} </a>
      <a href={{route("show_article", compact("article"))}} class="btn-custom  btn-danger">{{ __('ui.Dettaglio') }}</a>

    </div>
  </div>
</div>