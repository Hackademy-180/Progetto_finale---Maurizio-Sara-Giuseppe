<x-layout>

 
    <main class="container-fluid">
        <section class="row justify-content-center align-items-center">
            <article class="col-12 col-md-7">
           <form method="POST" action="{{route('register')}}">
            <h1 class=" text-center justify-content-center p-4 lead display-1">Dettaglio</h1>
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome utente</label>
            <input type="name" class="form-control" id="name" aria-describedby="emailHelp" name="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Conferma password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
        </div>                  
        <button type="submit" class="btn-custom btn btn-danger">c</button>
        <p class="mt-3">Hai già un account? Accedi da questo <a href="{{route('login')}}" class="btn-custom-2 btn btn-danger">link</a></p>
    </form>

        </article>
   
    <article class="col-12 col-md-1">
      <div class=" borderborder-end border-warning">
    </div>
    </article>
        <article class="col-12 col-md-4">
              <img src="{{ asset('media/immagine-registere-presto.jpg') }}" class="" alt="...">
        </article>
    </section>
</main>

</x-layout>
