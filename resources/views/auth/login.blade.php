<x-layout>
    <header class="container-fluid ">
        <section class="row ">
            <article class="col-12 ">
                <h1 class=" text-center justify-content-center">Login</h1>
            </article>
        </section>
    </header>
    
    
    <main class="container-fluid">
        <section class="row justify-content-center align-items-center">
            <article class="col-12 col-md-8">
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>    
                <button type="submit" class="btn btn-primary">Login</button>
                <p class="mt-3">Non hai ancora  un account? Registrati da questo <a href="{{route('register')}}">link</a></p>
            </form>
        </article>
    </section>
</main>
</x-layout>
