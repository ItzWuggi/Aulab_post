<x-layout>
    <div class="container">
        <div class="row justify-content-center ">
          <div class="col-12 col-md-6 ">
            <form 
            class="rounded-4 shadow bg-light-subtle p-4 my-5" 
            method="POST" 
            action="{{route('register')}}"
            >
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label">Inserisci la tua email</label>
              <input name="email" type="email" class="form-control" id="email" >
            </div>
            
            <div class="mb-3">
              <label for="name" class="form-label">Inserisci il tuo nome</label>
              <input name="name" type="text" class="form-control" id="name">
            </div>
            
            <div class="mb-3">
              <label for="password" class="form-label">Inserisci la tua password</label>
                <input type="password" name="password" class="form-control me-3" id="password" value=""> 
            </div>
            
            <div class="mb-3">
              <label for="password_confirmation" class="form-label">Conferma password</label>
              
              <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
            </div>
            
            <button type="submit" class="btn btn-success">Registrati</button>
          </form>
          
        </div>
      </div>
    </div>
</x-layout>