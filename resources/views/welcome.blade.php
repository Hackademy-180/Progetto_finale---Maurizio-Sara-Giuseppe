<x-layout>
  <header class="container mt-5">
    <section class="row">
      <article class="col-12">
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </article>
    </section>
  </header>
  
  <section class="container mt-5">
    <section class="row text-center">
      <h2>Articoli piu visti</h2>
      
      
      <swiper-container
      slides-per-view="3"
      space-between="30"
      navigation="true"
      pagination="true"
      loop="true"
      >
      @foreach ($articles as $article)
      <swiper-slide>
        <article class="col-12 col-md-3 my-2">
          <x-card :article="$article" />
        </article>
      </swiper-slide>
      @endforeach
    </swiper-container>
    
    
    <swiper-container init="false"></swiper-container>
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-element-bundle.min.js"></script>
    
    <script>
      let appendNumber = 600;
      let prependNumber = 1;
      
      const swiperEl = document.querySelector('swiper-container')
      
      <p class="append-buttons">
        <a href="#" class="prepend-2-slides">Prepend 2 Slides</a>
        <a href="#" class="slide-1">Slide 1</a>
        <a href="#" class="slide-250">Slide 250</a>
        <a href="#" class="slide-500">Slide 500</a>
        <a href="#" class="append-slide">Append Slide</a>
      </p>


      Object.assign(swiperEl, {
        slidesPerView: 3,
        centeredSlides: true,
        spaceBetween: 30,
        pagination: {
          type: 'fraction',
        },
        navigation: true,
        virtual: {
          slides: (function () {
            const slides = [];
            for (var i = 0; i < 600; i += 1) {
              slides.push('Slide ' + (i + 1));
            }
            return slides;
          })(),
        },
      });
      
      swiperEl.initialize();
      
      const swiper = swiperEl.swiper;
      
      document
      .querySelector('.slide-1')
      .addEventListener('click', function (e) {
        e.preventDefault();
        swiper.slideTo(0, 0);
      });
      
      document
      .querySelector('.slide-250')
      .addEventListener('click', function (e) {
        e.preventDefault();
        swiper.slideTo(249, 0);
      });
      
      document
      .querySelector('.slide-500')
      .addEventListener('click', function (e) {
        e.preventDefault();
        swiper.slideTo(499, 0);
      });
      
      document
      .querySelector('.prepend-2-slides')
      .addEventListener('click', function (e) {
        e.preventDefault();
        swiper.virtual.prependSlide([
        'Slide ' + --prependNumber,
        'Slide ' + --prependNumber,
        ]);
      });
      
      document
      .querySelector('.append-slide')
      .addEventListener('click', function (e) {
        e.preventDefault();
        swiper.virtual.appendSlide('Slide ' + ++appendNumber);
      });
    </script>
    
    
  </section>
</section>
<section class="container mt-5">
  <section class="row text-center">
    <h2>Potrebbe piacerti</h2>
    <article class="col-12">
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="card carousel-item active" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <div class="card carousel-item" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div><div class="card carousel-item" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </article>
  </section>
</section>


</x-layout>