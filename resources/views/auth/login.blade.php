<x-layout>
  <div class="container">
    <div class="row justify-content-center ">
      <div class="col-12 col-md-6 ">
        <form 
        class="rounded-4 shadow bg-light-subtle p-4 my-5" 
        method="POST" 
        action="{{route('login')}}"
        >
        @csrf
        <div class="mb-3">
          <label for="email" class="form-label">Inserisci la tua email</label>
          <input name="email" type="email" class="form-control" id="email" >
        </div> 
        <div class="mb-3">
          <label for="password" class="form-label">Inserisci la tua password</label>
            <input type="password" name="password" class="form-control" id="password" value=""> 
        </div>
        <button type="submit" class="btn btn-success">Accedi</button>
      </form>
      
      
    </div>
  </div>
</div>
</x-layout>