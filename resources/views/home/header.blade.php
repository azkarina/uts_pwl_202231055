
<header>
  
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}"><span class="text-primary">Mental</span>-Care</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item {{ request()->is('about') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('about') }}">About Us</a>
            </li>
            <li class="nav-item {{ request()->is('appointment') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('home') }}#appointment">Appointment</a>
            </li>
            <li class="nav-item {{ request()->is('resources') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('home') }}#resources">Resources</a>
            </li>
            
          

            @if (Route::has('login'))
            
            @auth

            <li class="nav-item">
              <a class="nav-link" href="{{ url('myappointment') }}">My Appointment</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown">
                    {{ Auth::user()->name }} <!-- Nama user -->
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a>
<<<<<<< HEAD
                    @if(Auth::user()->role === 'admin')
                        <a class="dropdown-item" href="{{ route('admin.dashboard') }}">Admin Panel</a>
                    @endif
=======
                    
>>>>>>> 4ab8d38 (revisi)
                    <div class="dropdown-divider"></div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                </div>
            </li>   
            @else
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
            </li>
            @endauth
            @endif

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>