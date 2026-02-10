<x-layout>
  @if (session()->has('errorMessage'))
  <div class="alert alert-danger text-center shadow rounded w-50">
    {{session('errorMessage')}}
  </div>
  @endif
  
  @if (session()->has('message'))
  <div class="alert alert-success text-center shadow rounded w-50">
    {{session('message')}}
  </div>
  @endif
  
  <header class="container mt-5" >
    <section class="row">
      <article class="col-12">
        <form class="d-flex ms-auto" role="search" action="{{route('article.search')}}" method="GET">
                <div class="input-group">
                    <input type="search" name="query" class="form-control" placeholder="Cerca" aria-label="search">
                    <button type="submit" class="input-group-text btn btn-outline-success" id="basic-addon2">
                        Cerca
                    </button>
                </div>
            </form>
      </article>
    </section>
  </header>
  
  <section class="container mt-5">
    <section class="row text-center">
      <h2>Articoli piu visti</h2>
      
      
      <!--    <swiper-container
        slides-per-view="3"
        space-between="30"
        navigation="true"
        pagination="true"
        loop="true"
        >
        @foreach ($articles as $article)
        <swiper-slide>
          <article class=" col-12 col-md-3 my-2">
          
          </article>
        </swiper-slide>
        @endforeach
      </swiper-container> 
      
      
      
      
      <p class="append-buttons">
        <a href="#" class="prepend-2-slides">Prepend 2 Slides</a>
        <a href="#" class="slide-1">Slide 1</a>
        <a href="#" class="slide-250">Slide 250</a>
        <a href="#" class="slide-500">Slide 500</a>
        <a href="#" class="append-slide">Append Slide</a>
      </p> -->
      
      
      <div class="container">
        <section class="row">
          <article class="col-12 position-relative ">
            <div #swiperRef="" class="swiper mySwiper">
              <div class="swiper-wrapper">
                  @foreach ($articles as $article)
                  <div class="swiper-slide">
                      <x-card :article="$article" />
                  </div>
                  
                  @endforeach
              </div>
              <div class="swiper-pagination"></div>
            </div>
            
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </article>
        </section>
      </div>
      
   <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

      
      <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 3,
          centeredSlides: true,
          spaceBetween: 30,
          pagination: {
            el: ".swiper-pagination",
            type: "fraction",
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        });
        
       
       
      
        
      </script>
      
      
      
    </x-layout>