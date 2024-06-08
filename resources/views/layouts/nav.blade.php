 <!-- Header -->
 <nav class="navbar navbar-expand-lg navbar-light shadow">

    <div class="container d-flex justify-content-between align-items-center">

        <a class="navbar-brand text-success logo align-self-center" href="home">
            <img src="{{ Vite::asset('/resources/images/Logo-sn.png') }}" class="d-block" style="width: 230px; height: auto;">
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="templatemo_main_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

<<<<<<< HEAD
            <div class="collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="navbar-nav ms-auto d-flex justify-content-end">
                    <ul class="nav navbar-nav d-flex align-items-center">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('shop') }}">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href={{ url('about') }}>About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href={{ url('registrasi') }}>Registrasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('login') }}">Login</a>
                        </li>
                    </ul>
                </div>
=======
        <div class="collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
            <div class="navbar-nav ms-auto d-flex justify-content-end">
                <ul class="nav navbar-nav d-flex align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('shop') }}">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ url('about') }}>About</a>
                    </li>
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href={{ url('register') }}>Registrasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('profile') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                           Logout
                        </a>
                    </li>
                    @endguest
                </ul>
>>>>>>> c89161c6f57522d8e4d5b3103cca81aa8fff64ff
            </div>
        </div>
    </div>
</nav>
<!-- Close Header -->

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form login -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
                <!-- End Form login -->
            </div>
        </div>
    </div>
</div>
<!-- Close Login Modal -->
