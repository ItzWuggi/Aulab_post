<x-layout>
    <div class="container">
        <div class="row justify-content-center ">
          <div class="col-12 col-md-6 ">
            <form 
            class="rounded-4 shadow bg-light-subtle p-4 my-5" 
            method="POST" 
            action="{{route('product.store')}}"
            enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Nome dell'articolo</label>
              <input name="name" type="text" class="form-control" id="name" value="{{old('name')}}" >
              
            </div>
            
            <div class="mb-3">
              <label for="description" class="form-label">Descrizione dell'articolo</label>
              <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{old('description')}}</textarea>
            </div>
            
            <div class="mb-3">
              <label for="price" class="form-label">Prezzo dell'articolo</label>
              <div class="d-flex">
                <input type="text" name="price" class="form-control me-3" id="price" value="{{old('price')}}"> <span>$</span>
              </div>
            </div>
            
            <div class="mb-3">
              <label for="img" class="form-label">Aggiungi un'immagine dell'articolo</label>
              
              <input type="file" name="img" class="form-control me-3" id="img">
              
            </div>
            
            <button type="submit" class="btn btn-success">Invia dati dell'articolo</button>
          </form>
          
        </div>
      </div>
    </div>
    </x-layout>