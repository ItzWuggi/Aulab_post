<x-layout>
    <x-masthead/>
    <div class="container px-0">
      
        <div class="row mt-5 justify-content-center">
            {{-- foreach con un if interno --}}
            @forelse ($articles as $article)
            <div class="col-8 col-md-5 col-lg-3 my-3 p-3">
                <div class="card d-block mx-auto">
                    
                    @if($article->image)
                    <img src="{{Storage::url($article->image)}}" class="card-img-top shadow" alt="...">
                @else
                    <img src="{{Storage::url('/img/default.png')}}" class="card-img-top shadow" alt="...">
                @endif
                    
                    
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <h5 class="card-title mb-1">{{$article->title}}</h5>
                        </div>
                        <div>
                            <h5 class="card-title mb-1">{{$article->subtitle}}</h5>
                        </div>
                        <div>
                            <p class="card-text text-truncate">{{$article->body}}</p>
                            <a href="{{route('article.show', compact('article'))}}" class="btn bottone_annuncio2 d-block mx-auto">Vai al dettaglio</a>
                        </div>
                        <div class="card-footer">
                            <p>Redatto da: {{$article->user->name}}</p>
                            <p>{{$article->category->name}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <h3 class="my-5 text-center ">Non ci sono articoli</h3>
            </div>
            @endforelse
        </div>
    </div>
</x-layout>