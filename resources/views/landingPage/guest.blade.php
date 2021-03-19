@extends('layouts.main')

@section('content')
     
@if (Auth::check())

<!-- Navbar inicio-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <!-- Brand/logo -->
        <a class="navbar-brand" href=""><img src="../imgs/logo-prov.png" width="48" height="48" alt="logo"></a>
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
                <li class="nav-item"><a class="nav-link" href="{{ url('/logout') }}""><button class="btn btn-primary btn-crear-resena" }"> logout </button></li></a>
                <li class="nav-item"><a class="nav-link" href="#">
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
            <a class="navbar-brand" href=""><img src="../imgs/logo-prov.png" width="48" height="48" alt="logo"></a>
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
                    <li class="nav-item"><a class="nav-link" href="#"><button type="button"
                                class="btn btn-primary btn-log-in">Log in</button></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><button type="button"
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

    <!-- Body inicio-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

                <div class="row">
                     <!-- Parte central -->
                    <div class="col-md-12">
                        <!-- Navbar de filtrado -->
                        <nav class="nav nav-tools">
                            <a class="nav-link active" aria-current="page" href="#"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg> Top</a>
                            <a class="nav-link" href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-lightning-charge-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z" />
                                </svg> New</a>

                            <a class="nav-link" href="#"> <svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 20 20"><title>Hot</title><path d="M10.31.61a.5.5,0,0,0-.61,0C9.41.83,2.75,6.07,2.75,11.47a8.77,8.77,0,0,0,3.14,6.91.5.5,0,0,0,.75-.64,3.84,3.84,0,0,1-.55-2A7.2,7.2,0,0,1,10,9.56a7.2,7.2,0,0,1,3.91,6.23,3.84,3.84,0,0,1-.55,2,.5.5,0,0,0,.75.64,8.77,8.77,0,0,0,3.14-6.91C17.25,6.07,10.59.83,10.31.61Z"></path>
                            </svg> Hot</a>

                            <div class="dropdown">
                                <a class=" dropdown-toggle nav-link" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Categoría
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Cine</a></li>
                                    <li><a class="dropdown-item" href="#">Videojuegos</a></li>
                                    <li><a class="dropdown-item" href="#">Libros</a></li>
                                    <li><a class="dropdown-item" href="#">Series de TV</a></li>
                                </ul>
                            </div>
                        </nav>
                        @foreach ($resena as $item)
                        <!-- Card Reseña -->
                        <div class="card-container">
                            <article id="" class="card">
                                <div class="row">
                                    <div class="col-md-5">
                                        <figure class="card-image-review">
                                            <a href="">
                                                <!-- Checar como poner imagen -->
                                                <img src=" {{ $item->url }}" class="card-image" alt="""> </a>
                                        </figure>
                                        </div>
                                <div class=" col-md-7">
                                                <div class="review-wrapper">
                                                    <div class="main-review-content">
                                                        <span class="tags">
                                                            <a href="">{{ $item->categoria }}</a> 
                                                        </span>
                                                        <div class="review-header">
                                                            <h2 class="review-title"><a>{{ $item->titulo }}</a></h2>
                                                        </div>

                                                        <div class="review-author-info">

                                                            <!-- Date -->


                                                            <div class="review-author-data">
                                                                <span class="review-author-image">
                                                                    <div class="author-avatar">
                                                                        <img alt=""
                                                                            src="https://secure.gravatar.com/avatar/06dd70be9bfd5eae612c365ff59f94f0?s=32&amp;d=mm&amp;r=g"
                                                                            srcset="https://secure.gravatar.com/avatar/06dd70be9bfd5eae612c365ff59f94f0?s=64&amp;d=mm&amp;r=g 2x"
                                                                            class="avatar avatar-32 photo" height="32"
                                                                            width="32"> <span class="name-author">
                                                                            <a>{{ $item->nombre}}</a></span>
                                                                    </div>
                                                                </span>

                                                                <br>
                                                                <div class="date-review">

                                                                    <span class="posted-on"><time class="review-date-published "> {{ $item->fecha_creacion}} </time></span>
                                                                    <span class="comments-review"><a>Comentarios</a><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-chat-dots-fill"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                                                        </svg> </span>

                                                                    <!-- Author -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="review-content">
                                                            <p></p>
                                                            <p>{{ $item->texto }} […]</p>
                                                            <p></p>
                                                        </div>
                                                        <div class="review-footer ">

                                                            <ul class="review-share">
                                                                <li class="readMore"><a href="" class="more-button ">
                                                                        Leer más</a></li>
                                                                <li><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-hand-thumbs-up-fill share-icon"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.964.22.817.533 2.512.062 4.51a9.84 9.84 0 0 1 .443-.05c.713-.065 1.669-.072 2.516.21.518.173.994.68 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.162 3.162 0 0 1-.488.9c.054.153.076.313.076.465 0 .306-.089.626-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.826 4.826 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.616.849-.231 1.574-.786 2.132-1.41.56-.626.914-1.279 1.039-1.638.199-.575.356-1.54.428-2.59z" />
                                                                    </svg><a class="likes-review"> {{ $item->likes }}</a></li>
                                                                <li><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-facebook share-icon" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                                                    </svg></li>
                                                                <li> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-twitter share-icon" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                                                    </svg></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                    </div>
                            </article>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>

    <!-- Body Final-->

@endsection


