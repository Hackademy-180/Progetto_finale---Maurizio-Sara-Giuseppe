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
  
  <header class="container" >
    <section class="row">
      <div class="header-img col-12 d-flex ">

        {{-- <div class="header-img"> --}}
          {{-- <img class="header-img" src="{{ asset('./media/header-linea-sottostante.png') }}" alt="header presto.it"> --}}
          <div class="col-6"></div>
          <div class="col-6">
            <article class="">
              <form class="d-flex ms-auto pt-5" role="search" action="{{route('article.search')}}" method="GET">
                <div class="input-group">
                  <input type="search" name="query" class="form-control" placeholder=" {{ __('ui.cerca') }}" aria-label="search">
                  <button type="submit" class="input-group-text btn btn-outline-danger" id="basic-addon2">
                    {{ __('ui.cerca') }}
                  </button>
                </div>
              </form>
              <h2 class="d-flex ms-auto pt-3 p-2">{{ __('ui.Vendi presto con Presto.it!!') }}</h2>
            </article>
          </div>
        {{-- </div> --}}
      </div>
    </section>
    
  </header>
  
  <section class="container mt-3">
    <section class="row text-center">
      <h2 class="lead display-4 mb-4">{{ __('ui.Articoli piu recenti') }}</h2>
      
      

      
      
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

      
      <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script> 
      
      
    </x-layout>