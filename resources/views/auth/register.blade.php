<x-layout>
<x-header
title="Registrati"
/>

<div class="container  m-5"> 
    <div class="row justify-content-center">
        <div class="col-10 border shadow rounded">
            <form class="m-5 " action="{{route('register')}}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control " id="name" name="name" value="{{old('name')}}">
                    @error('name')
                    <div class="alert alert-danger">{{$message}}</div>                        
                    @enderror
                </div>

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
                  
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Conferma Password</label>
                    <input type="Password" class="form-control " id="password_confirmation" name="password_confirmation" >
                    @error('password_confirmation')
                    <div class="alert alert-danger">{{$message}}</div>                        
                    @enderror
                </div>
               
               
                <button type="submit" class="btn btn-primary">Registrati</button>

                <p>Sei già Registrato ? <a href="{{route('login')}}">Accedi</a></p>
              </form>

        </div>
    </div>
</div>
</x-layout>