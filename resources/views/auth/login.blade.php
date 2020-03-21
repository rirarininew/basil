<!-- Menghubungkan dengan view template index -->
@extends('pages.indexfront')
@section('kontenfront')
<div class="container">

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">Small modal</button>

<div class="modal fade bd-example-modal-sm" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">BASIL LOGIN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('login') }}" accept-charset="UTF-8">
        @csrf

          <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

          @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror

    
          <input id="password" class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" required autocomplete="current-password">

          @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror                          
      
          <button type="submit" class="btn btn-primary btn-md btn-block">LOGIN</button>
          @if (Route::has('password.request'))
          <a class="btn btn-link text-lowercase text-secondary btn-block btn-sm" href="{{ route('password.request') }}">
          forgot your password ?
          </a>
          @endif
      </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-link btn-sm btn-block" data-toggle="modal" data-dismiss="modal" data-target="#RegisterModal">Looking to create account?</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-sm" id="RegisterModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">BASIL REGISTER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('register') }}">    
        @csrf

        <input id="name" type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror

        <input id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

        @error('email')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror

        <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

        @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror

        <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

        <input type="text" name="role" value="manager" hidden="true">

        <button type="submit" class="btn btn-primary btn-md btn-block">REGISTER</button>
      </form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-link btn-sm btn-block" data-toggle="modal" data-dismiss="modal" data-target="#LoginModal">Already have an account? LOGIN</button>
      </div>
      </div>
    </div>
  </div>
</div>


</div>
@endsection

