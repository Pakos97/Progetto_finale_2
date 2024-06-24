<x-layout>
    <x-header
    title="the aulab post"
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
                          <p class="card-text small text-muted"> Categoria : 
                            <a href="{{route('article.byCategory', $article->category)}}">{{ $article->category->name }}</a>
                          <p class="card-text"><small class="text-body-secondary">Aggiornato da : <a href="{{route('article.byUser', $article->user)}}">{{ $article->user->name}}</a> il : {{ $article->updated_at }}</small></p>
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