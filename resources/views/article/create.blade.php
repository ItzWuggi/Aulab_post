<x-layout>
    <div class="container">
        <div class="row justify-content-center ">
          <div class="col-12 col-md-6 ">
            <form 
            class="rounded-4 shadow bg-light-subtle p-4 my-5" 
            method="POST" 
            action="{{route('article.store')}}"
            enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Nome dell'articolo</label>
              <input name="title" type="text" class="form-control" id="title" value="{{old('title')}}" >
              
            </div>
            <div class="mb-3">
              <label for="subtitle" class="form-label">Sottotitolo dell'articolo</label>
              <input name="subtitle" type="text" class="form-control" id="subtitle" value="{{old('subtitle')}}" >
              
            </div>
            
            <div class="mb-3">
              <label for="body" class="form-label">Descrizione dell'articolo</label>
              <textarea name="body" class="form-control" id="body" cols="30" rows="10">{{old('body')}}</textarea>
            </div>
            
            <div class="mb-3">
              <label for="image" class="form-label">Aggiungi un'immagine dell'articolo</label>
              
              <input type="file" name="image" class="form-control me-3" id="image">
              
            </div>

            <div class="mb-3">
              <label class="form-label">Categoria</label>
              <select name="category" id="category" class="form-select shadow" aria-label="Default select example">
                  <option>Seleziona una categoria</option>
                  @foreach ($categories as $category)
                  <option  value="{{$category->id}}">{{$category->name}}</option>
                  @endforeach
              </select>
              <div class="text-danger">@error('category') {{ $message }} @enderror</div>
          </div>
            
            <button type="submit" class="btn btn-success">Invia dati dell'articolo</button>
          </form>
          <x-error/>
          <x-message/>
        </div>
      </div>
    </div>
    </x-layout>