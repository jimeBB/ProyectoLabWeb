
@extends('layouts.main')

@section('content')
<h1>Escribe tu reseña, experto...</h1>
<form action="{{ route('resenas.store') }}" method="POST">
    @csrf
    <div>
        <label for="">Autor</label>
        <input type="text" name="nombre">
    </div><br>
    <div>
        <label for="">Título</label>
        <input type="text" name="titulo">
    </div><br>
    <div>
        <label for="">Fecha</label>
        <input type="date" name="fecha_creacion">
    </div><br>
    <div>
        <label for="">Categoría</label>
        <t type="text" name="categoria">
    </div><br>
     <div>
        <label for="">Texto</label><br>
        <input type="text" name="texto">
    </div><br>
    <div>
        <label for="">Likes</label>
        <input type="text" name="likes">
    </div><br>
    <div>
        <label for="">ID Usuario</label>
        <input type="text" name="usuario_id">
    </div><br>
    <div>
        <input type="submit" value="Store">
    </div><br>
</form>
@endsection