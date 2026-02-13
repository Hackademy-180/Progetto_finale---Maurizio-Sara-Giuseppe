<div class="card" >
  <img src="{{$article->images->isNotEmpty() ? Storage::url($article->images->first()->path) : "https://picsum.photos/500"}}" class="card-img-top" alt="Iammagine dell'articolo {{$article->title}}">
  <div class="card-body">
    <h5 class="card-title">{{$article->title}}</h5>
    <div class="d-flex flex-column justify-content-between card-custom-1">
      <h4 class="card-subtitle text-body-secondary">{{$article->price}} €</h4>
      <a href={{route("show_article", compact("article"))}} class="btn btn-primary">{{ __('ui.Dettaglio') }}</a>
    </div>
  </div>
</div>