@extends('layouts.app')

@section('content')
 <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Registration</h5>
            <form class="form-signin" method="post" action="{{ route('register') }}" >
            	 @csrf
              <div class="form-label-group">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                 @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="name">Name</label>
              </div>

              <div class="form-label-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
               		@error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <label for="email">Email</label>
              </div>

              <div class="form-label-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
               		@error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror	
                <label for="password">Password</label>
              </div>

              <div class="form-label-group">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                <label for="password-confirm">Confirm Password</label>
              </div>

             
              <input  name="submit" class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="register">	
              {{-- <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button> --}}
              <hr class="my-4">
             <a class="btn btn-lg btn-primary btn-block text-uppercase" href="{{ route('login') }}" >Have an account</a>	
              {{-- <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Registration </button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button> --}}
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
