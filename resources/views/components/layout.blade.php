<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- link swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <title>Presto.it</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="d-flex  flex-column min-vh-100" >
  
  <x-navbar></x-navbar>
  
  <main class="flex-grow-1">
    <div class="container my-5">
      {{$slot}}
    </div> 
  </main>
  
  <footer>
    
    <div class="container p-4">
    </footer>
    <x-footer/>
  </div>
  
   
 
   
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    </body>
</html>