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
  
  <header class="container-fluid px-0">
  <section class="header-img row g-0">
    {{-- <div class=" d-none d-md-block col-12 d-flex"> --}}
      <div class=" col-md-6 d-none d-md-block"></div>
      {{-- Su mobile sparisce, su desktop occupa metà --}}
      <div class=" col-12 d-md-none col-md-6 d-block"><img class="img-fluid" src="{{ asset('/media/header-sinistra.png') }}" alt=""></div>


      {{-- Su mobile piena larghezza, su desktop metà --}}
      <div class=" col-12 col-md-6 d-flex flex-column p-3">

        <form class="d-flex w-100" role="search" 
              action="{{route('article.search')}}" method="GET">
          <div class="input-group">
            <input type="search" name="query" class="form-control" placeholder=" {{ __('ui.cerca') }}" aria-label="search">
            <button type="submit" class="input-group-text btn btn-outline-danger">{{ __('ui.cerca') }}</button>
          </div>
        </form>

        <h2 class="pt-2 fs-4 fs-md-2">
          {{ __('ui.Vendi presto con Presto.it!!') }}
        </h2>

      </div>

    {{-- </div> --}}
  </section>
</header>
  
  <section class="container mt-3">
    <section class="row text-center">
      <h2 class="lead display-4 mb-4">{{ __('ui.Articoli piu recenti') }}</h2>
      
      

      
      
      <div class="container">
        <section class="row">
          <article class="col-12 position-relative">
            <div #swiperRef="" class="swiper mySwiper swiper-height">
              <div class="swiper-wrapper">
                  @foreach ($articles as $article)
                  <div class="swiper-slide swiper-custom">
                      <x-card :article="$article" />
                  </div>
                  
                  @endforeach
                </div>
                <div class="swiper-pagination"></div>
              </div>
              
              <div class="swiper-button-prev text-danger"></div>
              <div class="swiper-button-next text-danger"></div>
            </article>
          </section>
        </div>

        <div class="p-5"></div>
        
        <div class="container promos border border-light-subtle border-2">
          <section class="row align-items-center py-3">
            
            
            <article class="col-4 col-md-3">
              <img class="prom-img rounded" src="{{ asset('./media/immagiepromozionale.png') }}" alt="">
            </article>
            
            <article class="col-8 col-md-9">
              <h2>Con Presto</h2>
              <p class="mb-0 p-2">vendi i tuoi articoli in sicurezza, in modo controllato e veloce </p>
              <div class="nav-item mt-2 mt-lg-0">
                <a href="{{route('create_article')}}" class="btn-custom btn-extra btn-danger d-inline-block">Inserisci annuncio</a>
              </div>
            </article>
            
            
          </section >
        </div>

        <div class="p-5"></div>
        
        
        <div class="container promos border border-light-subtle border-2 ">
          <section class="row align-items-center py-3">
            
            <article class="col-8 col-md-9">
              <h2>Truffe?</h2>
              <p class="mb-0 p-2"> segnala le presunte truffe o raggiri, i nostri admin si metteranno a lavoro per risolvere il problema  </p>
              <div class="nav-item mt-2 mt-lg-0 text-decoration-none">
                <a href="{{route('create_article')}}" class="btn-custom btn-extra btn-danger d-inline-block">segnala</a>
              </div>
            </article>
            
            <article class="col-4 col-md-3">
              <img class="prom-img rounded" src="{{ asset('./media/immaginesicurezza.jpg') }}" alt="">
            </article>
            
            
          </section>
        </div>
        
        
        
        
        
        
        <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
        
        
        <!-- Initialize Swiper -->
        <script>
          var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1, // Mobile: 1 card
            spaceBetween: 20,
            loop: true,
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
            // Media Query via JavaScript (Breakpoints)
            breakpoints: {
              768: {
                slidesPerView: 2, // Tablet: 2 card
                spaceBetween: 25,
              },
              1024: {
                slidesPerView: 3, // Desktop: 3 card
                spaceBetween: 30,
              }
            }
          });
        </script> 
        
        
      </x-layout>