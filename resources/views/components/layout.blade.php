<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- link swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <x-navbar></x-navbar>
{{$slot}}



<div class="container my-5">

  <footer class="text-white text-center text-lg-start" style="background-color: #23242a;">
   
    <div class="container p-4">
     
      <div class="row mt-4">
      
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">La Nostra Compagnia </h5>

          <p>
           si occupa del miglio rapporto qualita' prezzo sul mercato con venditori controllati e spedizioni veloci
          </p>

          <p>
            con uno sguardo sempre al green, nel riciclo e riuso di oggetti che altrimenti verrebbero butatati
          </p>

          <div class="mt-4">
            <!-- Facebook -->
            <a type="button" class="btn btn-floating btn-warning btn-lg"><i class="fab fa-facebook-f"></i></a>
            <!-- Twitter -->
            <a type="button" class="btn btn-floating btn-warning btn-lg"><i class="fab fa-twitter"></i></a>
            <!-- Google + -->
            <a type="button" class="btn btn-floating btn-warning btn-lg"><i class="fab fa-google-plus-g"></i></a>
            <!-- Linkedin -->
          </div>
        </div>
     

     
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          

          <ul class="fa-ul" style="margin-left: 1.65em;">
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2"> Strada San Giorgio Martire 2/D, 70124 Bari (IT) </span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">Prestoclass@gmail.com</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+0831 543 6454</span>
            </li>
          </ul>
        </div>


       <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <h5 class="text-uppercase mb-4">per problemi col venditore contattaci</h5>

          <div class="form-outline form-white mb-4">
            <input type="email" id="form5Example2" class="form-control" />
            <label class="form-label" for="form5Example2">inserisci la tua email</label>
          </div>

          <button type="submit" class="btn btn-light btn-block">invio</button>
        </div>
      
    </div>
   

    
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2026 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">Presto.com</a>
    </div>
   
  </footer>
  
</div>


        <x-footer/>

    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    </body>
</html>