<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
  <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
          {{ config('app.name', 'Laravel') }}
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          {{-- <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">

          </ul> --}}

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
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
              @else <!-- For Loged -->
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
      </div>
  </div>
</nav>
 
  
<div class="row">
  <nav class="col-sm-1">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="/">WebSiteName</a>
        @auth
          <a class="navbar-brand" href="/">This is link only for Auth</a>
        @endauth 
      </div>
      </div>
      <ul class="navbar-nav mr-auto">
        <li class="active"><a href="/">Home</a></li>
        <li><a href="/DB">DB index</a></li>
        <li><a href="/DB/create">DB create</a></li>
        <li><a href="/BootstrapTest">Bootstrap Test</a></li> 
      </ul>
  </nav>
  <nav class="col-sm-11"> This is my side content</nav>
</div> 