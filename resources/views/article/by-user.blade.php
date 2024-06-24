<x-layout>
    <x-header
    title="Articoli di : {{ Auth::user()->name }}"
    />
    
 
    
    <div class="container">
        <div class="row justify-content-evenly">
            @foreach ($articles as $article)
            <div class="col-10 col-md-8">
                <div class="card mb-3" >
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="{{Storage::url( $article->image) }}" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">{{ $article->title }}</h5>
                          <p class="card-text">{{ $article->subtitle }}</p>

                          <a href="{{route('article.byCategory', $article->category)}}" class="text-muted small">#{{ $article->category->name}}</a>
                          <br>
                          <br>
                          <a href="{{route('article.show', $article)}}" class="btn btn-primary">Vai alla notizia</a>
                        
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
                
            @endforeach
        </div>
    </div>
    
    </x-layout>