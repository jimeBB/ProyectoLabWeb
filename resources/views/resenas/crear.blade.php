
@extends('layouts.create')

@section('content')
    @include('layouts.navbar')

<form action="{{ route('resenas.store') }}" method="POST" action="" enctype="multipart/form-data" >
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

            <div class="tags">
                <h1 style="display:inline;">Categoría:</h1>
                <select class="form-select" name="categoria" aria-label="Default select example" required>
                  <option selected value="otros">Escoge una categoría</option>
                  <option value="cine">Cine</option>
                  <option value="videojuegos">Videojuegos</option>
                  <option value="libros">Libros</option>
                  <option value="tvseries">Series de TV</option>
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
                <input name="url" type="file" id="img"  required>
            </div>
        </div>

    </div>
    <div id="button-container">
        <div class="buttons">
            <a class="nav-link" href="#">
                <input type="submit" value="Publicar" class="btn-publicar" />
            </a>
        </div><br>
    </div>
</form>
@stop
