@extends('layouts.app')

@section('content')
 <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin" method="post" autocomplete="off" action="{{ route('login') }}" >
            	 @csrf
              <div class="form-label-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="" required autocomplete="off" autofocus>
                 @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                 @enderror
                <label for="email">E-mail Address</label>
              </div>

              <div class="form-label-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
               		@error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror	
                <label for="password">Password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                	
                <label class="custom-control-label" for="remember">Remember password</label>
        	  </div>

              <input  name="submit" class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="Login">	
              
              {{-- <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button> --}}
              <hr class="my-4">
             <a class="btn btn-lg btn-primary btn-block text-uppercase" href="{{ route('register') }}" >Create new account</a>	
                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
              {{-- <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Registration </button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button> --}}
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
