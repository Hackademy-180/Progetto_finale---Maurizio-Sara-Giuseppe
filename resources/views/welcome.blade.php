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
    <section class="row d-flex justify-content-center align-items-center">
      <article class="col-5 ">
        <form class="d-flex ms-auto p-2" role="search" action="{{route('article.search')}}" method="GET">
          <div class="input-group">
            <input type="search" name="query" class="form-control" placeholder="Cerca" aria-label="search">
            <button type="submit" class="input-group-text btn btn-outline-danger" id="basic-addon2">
              Cerca
            </button>
          </div>
        </form>
        <h2 class="d-flex ms-auto p-2">Vendi presto con Presto.it!!</h2>
      </article>
      <div class="col-6">
        <img class="header-img" src="{{ asset('./media/header.jpg') }}" alt="header presto.it">
      </div>
    </section>
    
  </header>
  
  <section class="container mt-3">
    <section class="row text-center">
      <h2 class="lead display-4 mb-4">Articoli piu recenti</h2>
      
      

      
      
      <div class="container">
        <section class="row">
          <article class="col-12 position-relative ">
            <div #swiperRef="" class="swiper mySwiper">
              <div class="swiper-wrapper">
                  @foreach ($articles as $article)
                  <div class="swiper-slide swiper-custom">
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