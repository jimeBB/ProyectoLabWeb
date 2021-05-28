@if (Auth::check())
    <!-- Navbar inicio-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- Brand/logo -->
            <a class="navbar-brand" href="{{route('landingpage.index')}}" style="color: darkorange; font-size: x-large; font-weight:bold;">
                <img src="../imgs/logo-prov.png" width="50" height="50" alt="logo">
                El Rincón del Bisquet
            </a>
            <div class="search-bar"><!-- Center this :'v -->
                <form action="{{ route('landingpage.search') }}" method="GET" role="search" class="form-inline my-2 my-lg-0">
                    <input  name = 'termino' class="search-input mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn  btn-search-nav my-2 my-sm-0" type="submit"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                </form>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav log-in-div">
                    @if (Auth::user()->role=="admin")
                        <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}"><button class="btn btn-primary btn-crear-resena" }> Dashboard </button></li></a>
                    @endif
                    <li class="nav-item"><a class="nav-link" href="{{ url('/logout') }}"><button class="btn btn-primary btn-crear-resena" }> logout </button></li></a>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('resenas.create') }}">
                            <button type="button" class="btn btn-primary btn-crear-resena">Crear reseña</button>
                        </a>
                    </li>
                    <li class="nav-item nav-item-profile">
                        <a class="nav-link">
                            <svg
                                xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Navbar loggeado Final-->

    <!-- Navbar no loggeado inicio-->
@else
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- Brand/logo -->
            <a class="navbar-brand" href="{{route('landingpage.index')}}" style="color: darkorange; font-size: 25; font-weight:bold;">
                <img src="../imgs/logo-prov.png" width="50" height="50" alt="logo">
                El Rincón del Bisquet
            </a>
            <div class="search-bar mx-4">
            <form action="{{ route('landingpage.search') }}" method="GET" role="search"  class="form-inline my-2 my-lg-0">
                <input name = 'termino' class="search-input mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn  btn-search-nav my-2 my-sm-0" type="submit"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>
            </form>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>

                <ul class="navbar-nav log-in-div">
                    <li class="nav-item"><a class="nav-link" href= "{{ route('auth.login')}} " ><button type="button"
                                class="btn btn-primary btn-log-in">Log in</button></a></li>
                    <li class="nav-item"><a class="nav-link" href = "{{ route('auth.register')}} "><button type="button"
                                class="btn btn-primary btn-log-in">Register</button></li></a>
                    <li class="nav-item nav-item-profile">
                        <a class="nav-link" href="#">
                            <svg
                                xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
@endif
