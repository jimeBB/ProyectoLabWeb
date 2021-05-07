@extends('layouts.show')

@section('content')
@if (Auth::check())

<!-- Navbar inicio-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="{{ route('landingpage.index') }}"><img src="../imgs/logo-prov.png" width="48" height="48" alt="logo"></a>
        <div class="search-bar">
        <form class="form-inline my-2 my-lg-0">
            <input class="search-input mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn  btn-search-nav my-2 my-sm-0" type="submit"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg></button>
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
                <li class="nav-item"><a class="nav-link" href="{{ url('/logout') }}"><button class="btn btn-primary btn-crear-resena" }"> logout </button></li></a>
                <li class="nav-item"><a class="nav-link" href="{{ route('resenas.create') }}">
                    <button type="button" class="btn btn-primary btn-crear-resena">Crear reseña</button></a></li>
                <li class="nav-item"><a class="nav-link" href="#"></a></li>
                            <li class="nav-item">
                                <span class="mini-profilepic" role="link" tabindex="0" style="width: 40px; height: 40px;">
                                    <img alt="Foto del perfil" class="image-profile" data-testid="user-avatar" draggable="false" src="imgs/profilepic.jpeg"></span>
                              </ul>

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
            <a class="navbar-brand" href="{{ route('landingpage.index') }}"><img src="../imgs/logo-prov.png" width="48" height="48" alt="logo"></a>
            <div class="search-bar">
            <form class="form-inline my-2 my-lg-0">
                <input class="search-input mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn  btn-search-nav my-2 my-sm-0" type="submit"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg></button>
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
                    <li class="nav-item"><a class="nav-link" href= "{{ route('auth.login')}} "><button type="button"
                                class="btn btn-primary btn-log-in">Log in</button></a></li>
                    <li class="nav-item"><a class="nav-link" href = "{{ route('auth.register')}} "><button type="button"
                                class="btn btn-primary btn-log-in">Sign in</button></li></a>
                    <li class="nav-item nav-item-profile"> <a class="nav-link" href="#"><svg
                                xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg></a></li>

                </ul>
            </div>
        </div>
    </nav>
    @endif

    <!-- Navbar Final-->

    <!-- Body -->
    <div id="body-container">
        <div id="review-container"> 
            <div class="info">
                <h1 style="display:inline;">{{$resena->titulo}}</h1>
                <h2 style="display:inline;">{{$resena->nombre}}</h3>
                <h3 style="display:inline;">{{$resena->fecha_creacion}}</h3>
            </div><br>
            <div class="tags">
                <h1 style="display:inline;">Etiquetas:</h1>
                <h2 style="display:inline;">{{$resena->categoria}}</h2>
                
            </div>
            <div class="review-holder">
                <div class="text">
                    <p>
                        {{$resena->texto}}

                    </p>
                </div>
                
            </div>
            <!--<div class="reactions">
                <h1 style="display:inline;">{{$resena->likes}}<h1>
                <h1 style="display:inline;">#likes</h1>
                <h1 style="display:inline;">#comentarios</h1>
                <h1 style="display:inline;">#compartir</h1>
            </div>-->

            <div class="reactions">
                <h1 style="display:inline;" class="like">
                    {{$resena->likes}}
                    <img src="../imgs/likes.png" class="icon-act">
                    <span class="tooltiptext">Like</span>
                </h1>
                <h1 style="display:inline;" class="comments">
                    20 
                    <img src="../imgs/comment.png" class="icon-act">
                    <span class="tooltiptext">Comments</span>
                </h1>
                <h1 style="display:inline;" class="share">
                    44 
                    <img src="../imgs/share.png" class="icon-act">
                    <span class="tooltiptext">Share</span>
                </h1>
            </div>
        </div>
    </div>

    <!--Comment section-->
    <div id="body-container">
        <div id="comments-section">
        @if (Auth::check())
            <form action="{{ route('comentarios.store' , ['resena' => $resena])}}" method="POST">
                @csrf
                <div class="user-comment-np">
                    <h1>¡Escribe un comentario!</h1>
                    <textarea name ="texto" required></textarea>
                
                    <div class="buttons">
                        <a class="nav-link" href="#" style="display:inline;">
                            <input type="submit" value="Comentar">
                        </a>
                    </div>
                </div>
            </form>
        @else
            <div class="user-comment">
                <h1>¡Escribe un comentario!</h1>
            
                <div class="buttons">
                    <a class="nav-link" href="{{ route('auth.login')}} " style="display:inline;">
                    <button type="button" class="btn btn-primary btn-log-in">
                        Log in
                        
                    </button>
                    </a>
                    <a class="nav-link" href="{{ route('auth.register')}} " style="display:inline;">
                        <button type="button" class="btn btn-primary btn-log-in">
                            Sign up
                        </button>
                    </a>
                </div>
            </div>
        @endif    
            
       
        @foreach($resena->comentario as $comentario)
            <div class="generic-comment">
                <div class="comment-info">
                    <img src="imgs/profile.png" style="display:inline;">
                    <div>
                        <h1 style="display:inline;">{{$comentario->nombre}}</h1>
                        <h1 style="display:inline;">{{$comentario->likes}}</h1>
                        <h1 style="display:inline;">{{$comentario->fecha}}</h1>
                    </div>
                </div>

                <div class="comment-text">
                    <div class="text-container">
                        <p>
                            {{$comentario->texto}}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection