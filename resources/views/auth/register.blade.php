<x-layout>


    <form method="POST" action="{{route('register')}}">
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
        <button type="submit" class="btn btn-primary">Registrati</button>
    </form>

</x-layout>
