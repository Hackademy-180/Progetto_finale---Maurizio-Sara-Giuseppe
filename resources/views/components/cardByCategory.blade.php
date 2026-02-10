<div class="card" >
  <img src="https://picsum.photos/200" class="" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$article->title}}</h5>
    <div class="d-flex flex-column justify-content-between card-custom-1">
      <h4 class="card-subtitle text-body-secondary">{{$article->price}} €</h4>
      <a href={{route("show_article", compact("article"))}} class="btn btn-primary">Dettaglio</a>
    </div>
  </div>
</div>