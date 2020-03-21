<-- simpan 
<div class="modal fade login" id="loginModal">
<div class="modal-dialog login animated">
<div class="modal-content">
                     
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  </div>
  
  <div class="modal-body">
  <div class="box">
  <div class="content">

  <div class="division">
    <div class="line l"></div>
    <span>BASIL</span>
    <div class="line r"></div>
  </div>
                                
  <div class="error"></div>
  <div class="form loginBox" >
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

      <button type="submit" class="btn btn-default btn-login">
      {{ __('Login') }}
      </button>                            
      
      @if (Route::has('password.request'))
        <a class="btn btn-link text-lowercase text-secondary" href="{{ route('password.request') }}">
      {{ __('Forgot Your Password?') }}
        </a>
      @endif
    </form>
  </div>
  </div>
  </div>
                        
  <div class="box">
  <div class="content registerBox" style="display:none;">
  <div class="form">
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

    <input type="text" name="role" value="MANAGER" hidden="true">

    <button type="submit" class="btn btn-default btn-login">
      {{ __('Register') }}
    </button>
    </form>              
  </div>
  </div>
  </div>

  </div>
                    
  <div class="modal-footer">
  <div class="forgot login-footer">
    <span>Looking to
    <a href="javascript: showRegisterForm();">create an account</a>
    ?</span>
  </div>                  
  <div class="forgot register-footer" style="display:none">
    <span>Already have an account?</span>
    <a href="javascript: showLoginForm();">Login</a>
  </div>
  </div>

</div>
</div>
</div>
-->