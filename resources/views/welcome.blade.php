<x-layout>
    <x-masthead/>
    <x-message/>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 justify-content-center">
                <div>
                    <a href="@if (Auth::user())
                    {{route('article.create')}}@else{{route('login')}}
                    @endif" class="btn bottone_1 ">Crea un articolo</a>
                </div>    
            </div>
            <div class="d-flex justify-content-center my-5">
                @foreach ($articles as $article )
                
                <div class="col-8 col-md-5 col-lg-3 my-3 p-3">
                    <div class="card d-block mx-auto">
                        
                        @if($article->image)
                        <img src="{{Storage::url($article->image)}}" class="card-img-top shadow" alt="...">
                        @else
                        <img src="{{Storage::url('/img/default-image.jpg')}}" class="card-img-top shadow" alt="...">
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
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>