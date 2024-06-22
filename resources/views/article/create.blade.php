<x-layout>
    <x-header
    title="Crea Articolo"
    />
    
    <div class="container  m-5"> 
        <div class="row justify-content-center">
            <div class="col-10 border shadow rounded">
                <form class="m-5 " action="{{route('article.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
    
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control " id="title" name="title" value="{{old('title')}}">
                        @error('title')
                        <div class="alert alert-danger">{{$message}}</div>                        
                        @enderror
                    </div>

                    
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo</label>
                        <input type="text" class="form-control " id="subtitle" name="subtitle" value="{{old('subtitle')}}">
                        @error('subtitle')
                        <div class="alert alert-danger">{{$message}}</div>                        
                        @enderror
                    </div>

                    
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control " id="image" name="image">
                      
                    </div>

                    
                    <div class="mb-3">
                        <label for="category" class="form-label">Categoria</label>
                        <select class="form-control " id="category" name="category">
                     <option value="selected disabled">Seleziona categoria</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    </div>

                    <div class="mb-3">
                        <label for="body" class="form-label">Corpo del testo</label>
                       <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{old('body')}}</textarea>
                        @error('body')
                        <div class="alert alert-danger">{{$message}}</div>                        
                        @enderror
                    </div>

    
                   
                    <button type="submit" class="btn btn-primary">Registrati</button>
    
                 
                  </form>
    
            </div>
        </div>
    </div>
    </x-layout>