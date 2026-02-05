<div class="card" style="width: 18rem;">
  <img src="https://picsum.photos/200" class="" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$article->title}}</h5>
    <h4 class="card-subtitle text-body-secondary">{{$article->price}} €</h4>
    <a href={{route("show_article", compact("article"))}} class="btn btn-primary">Dettaglio</a>
  </div>
</div>