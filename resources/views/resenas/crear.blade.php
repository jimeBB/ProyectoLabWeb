
@extends('layouts.create')

@section('content')
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
<form action="{{ route('resenas.store') }}" method="POST">
    @csrf
    <div id="body-container">
        <div id="review-container"> 
            <div class="info">
                <h1>Crear reseña</h1>
                <div class="form-group">
                    <input type="text" name="titulo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Título" required>
                    <small id="emailHelp" class="form-text text-muted">Ponle un título cool.</small>
                </div>
            </div><br>
            <div class="info-name">
                <div class="form-group" style="margin-bottom:10px;">
                    <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre de Usuario" required>
                </div>
            </div><br>
            <div class="info-likes">
                <div class="form-group" style="margin-bottom:10px;">
                    <input type="number" name="likes" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Información de Likes" required>
                </div>
            </div><br>
            <div class="info-id">
                <div class="form-group" style="margin-bottom:10px;">
                    <input type="number" name="usuario_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Id de usuario" required>
                </div>
            </div><br>
            <div class="form-group" style="margin-bottom:30px;">
                    <input class="form-control" type="date" name="fecha_creacion" value="2011-08-19" id="example-date-input" required>
            </div>

            <div class="tags">
                <h1 style="display:inline;">Categoría:</h1>
                <select class="form-select" name="categoria" aria-label="Default select example" required>
                  <option selected>Escoge una categoría</option>
                  <option value="1">Cine</option>
                  <option value="2">Videojuegos</option>
                  <option value="3">Libros</option>
                  <option value="4">Series de TV</option>
                </select>
            </div>

            <div class="review-holder">
                <h1 style="display:inline;">Escribe tu reseña</h1>
                <div class="text">
                    <textarea name="texto" type="texto" required></textarea>
                </div>
            </div>
            <div class="image-uploader">
                <h1 style="display:inline;">Sube una imagen para la portada</h1>
                <input type="file" id="img" name="url" accept="image/*" required>
            </div>
        </div>

    </div>
    <div id="button-container">
        <div class="buttons">
            <a class="nav-link" href="#">
                <input type="submit" value="Publicar" class="btn-publicar"></input>
            </a>
        </div><br>
    </div>
</form>
@endsection
