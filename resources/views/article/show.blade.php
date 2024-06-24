<x-layout>
<x-header
title="{{ $article->title }}"
/>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card mb-3">
                <img src="{{Storage::url($article->image)}}" class="img-fluid card-img-top imgshow"  alt="immaggine dell articolo : {{ $article->title }}">
                <div class="card-body">
                  <h5 class="card-title">{{ $article->title}}</h5>
                  <p class="card-text">{{ $article->subtitle}}</p>
                   <a href="{{route('article.byCategory', $article->category)}}" class="text-muted small">#{{ $article->category->name}}</a>
                  <p class="card-text">{{ $article->body}}</p>

                  <p class="card-text"><small class="text-body-secondary">Aggiornato da : <a href="{{route('article.byUser', $article->user)}}">{{ $article->user->name}}</a> il : {{ $article->updated_at }}</small></p>

                  <a href="{{route('article.index')}}" class="btn btn-primary"> Torna alla sezione articoli</a>
                </div>
              </div>
        </div>
    </div>
</div>


</x-layout>