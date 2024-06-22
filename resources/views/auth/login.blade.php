<x-layout>
    <x-header
    title="Accedi"
    />
    <div class="container  m-5"> 
        <div class="row justify-content-center">
            <div class="col-12 border shadow rounded">
                <form class="m-5 " action="{{route('login')}}" method="POST">
                    @csrf
    
                
    
                    <div class="mb-3">
                      <label for="email" class="form-label">Email address</label>
                      <input type="email" class="form-control " id="email" name="email" value="{{old('email')}}">
                      @error('email')
                      <div class="alert alert-danger">{{$message}}</div>                        
                      @enderror
                    </div>
    
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control " id="password" name="password" >
                        @error('password')
                        <div class="alert alert-danger">{{$message}}</div>                        
                        @enderror
                    </div>
                      
                   
                   
                   
                    <button type="submit" class="btn btn-primary">Registrati</button>
    
                    <p>Non hai un account ? <a href="{{route('register')}}">Registrati</a></p>
                  </form>
    
            </div>
        </div>
    </div>
    </x-layout>