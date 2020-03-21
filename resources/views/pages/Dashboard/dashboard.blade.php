<!-- Menghubungkan dengan view template sideBar -->
@extends('pages.indexcustomer')

<!-- isi bagian konten -->
@section('activeDashboard')
active
@endsection

@section('konten')
	
  @if (session('status'))
    <div class="alert alert-success" role="alert">
      {{ session('status') }}
    </div>
  @endif

  <ul class="navbar-nav">
  <!-- Authentication Links -->
    @guest
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
    @if (Route::has('register'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
    @endif
    @else
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }} <span class="caret"></span>
          </a>

        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
       </form>

      </div>
      </li>
    @endguest
  </ul>

@endsection