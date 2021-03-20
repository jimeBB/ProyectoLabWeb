@extends('layouts.show')

@section('content')
 <!-- Navbar inicio-->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- Brand/logo -->
            <a class="navbar-brand" href=""><img src="../imgs/logo-prov.png" width="48" height="48" alt="logo"></a>
            <div class="search-bar">
            <form class="form-inline my-2 my-lg-0">
                <input class="search-input mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn  btn-search-nav my-2 my-sm-0" type="submit"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>
            </form>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"           data-bs-target="#navbarTogglerDemo02"aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>

                <ul class="navbar-nav log-in-div">
                    <li class="nav-item"><a class="nav-link" href="#"><button type="button"
                                class="btn btn-primary btn-log-in">Log in</button></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><button type="button"
                                class="btn btn-primary btn-log-in">Sign in</button></li></a>
                    <li class="nav-item nav-item-profile"><a class="nav-link" href="#"><svg
                                xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" /></svg></a></li>
                </ul>
            </div>
        </div>
    </nav>

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
            <div class="reactions">
                <h1 style="display:inline;">{{$resena->likes}}<h1>
                <h1 style="display:inline;">#likes</h1>
                <h1 style="display:inline;">#comentarios</h1>
                <h1 style="display:inline;">#compartir</h1>
            </div>
        </div>
    </div>

    <!--Comment section-->
    <div id="body-container">
        <div id="comments-section">
            
            <div class="user-comment" style="display:none;">
                <h1>¡Escribe un comentario!</h1>
            
                <div class="buttons">
                    <a class="nav-link" href="#" style="display:inline;">
                    <button type="button" class="btn btn-primary btn-log-in">
                        Log in
                    </button>
                    </a>
                    <a class="nav-link" href="#" style="display:inline;">
                        <button type="button" class="btn btn-primary btn-log-in">
                            Sign up
                        </button>
                    </a>
                </div>
            </div>
            <form action="{{ route('comentarios.store' )}}" method="POST">
                @csrf
            <div class="user-comment-np" style="display:inline;">
                <h1>¡Escribe un comentario!</h1>
                <textarea name ="texto"></textarea>
                <div>
                    <label for="">Resena id</label>
                    <input type="text" name="resenaid">
                </div><br>
                <div class="buttons">
                    <a class="nav-link" href="#" style="display:inline;">
                        <input type="submit" value="Store">
                    </a>
                </div>
            </div>
        </form>

            <div class="generic-comment">
                <div class="comment-info">
                    <img src="imgs/profile.png" style="display:inline;">
                    <div>
                        <h1 style="display:inline;">Nombre de usuario</h1>
                        <h1 style="display:inline;">-</h1>
                        <h1 style="display:inline;">fecha</h1>
                    </div>
                </div>

                <div class="comment-text">
                    <div class="text-container">
                        <p>
                            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection