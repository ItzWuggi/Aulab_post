<x-layout>
    <x-masthead/>
    <x-message/>
    <div class="d-flex justify-content-center my-5">
        <a href="@if (Auth::user())
          {{route('article.create')}}@else{{route('login')}}
          @endif" class="btn bottone_1 ">Crea un articolo</a>
    </div>
</x-layout>