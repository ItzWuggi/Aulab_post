<x-layout>
    <x-masthead/>
    <div class="container px-0">
        <div class="row mt-5 justify-content-center">
            {{-- foreach con un if interno --}}
            @forelse ($articles as $article)
            <div class="col-8 col-md-5 col-lg-3 my-3 p-3">
                
                <div class="card d-block mx-auto">
                    @if (count($article->images))
                    
                    <img src="" class="card-img-top shadow" alt="...">
                    
                    @else
                    <img src="{{Storage::url('public/img/default-image.jpg')}}" class="card-img-top shadow" alt="...">
                    
                    @endif
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <h5 class="card-title mb-1">{{$article->title}}</h5>
                        </div>
                        <div>
                            <h5 class="card-title mb-1">{{$article->subtitle}}</h5>
                        </div>
                        <div>
                            {{-- <p class="card-text text-truncate">Corpo dell'articolo</p>
                            <a href="{{route('show.articles', compact('article'))}}" class="btn bottone_annuncio2 d-block mx-auto">Vai al dettaglio</a> --}}
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