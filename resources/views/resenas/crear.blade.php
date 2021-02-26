
@extends('layouts.main')

@section('content')
<h1>Escribe tu reseña, experto...</h1>
<form action="{{ route('resenas.store') }}" method="POST">
    @csrf
    <div>
        <label for="">Nombre</label>
        <input type="text" name="nombre">
    </div>
    <div>
        <label for="">Título</label>
        <input type="text" name="titulo">
    </div>
    <div>
        <label for="">Fecha</label>
        <input type="date" name="fecha_creacion">
    </div>
    <div>
        <label for="">Categoría</label>
        <input type="text" name="categoria">
    </div>
     <div>
        <label for="">Texto</label>
        <input type="text" name="texto">
    </div>
    <div>
        <label for="">Likes</label>
        <input type="text" name="likes">
    </div>
    <div>
        <label for="">ID Usuario</label>
        <input type="text" name="usuario_id">
    </div>
    <div>
        <input type="submit" value="Store">
    </div>
</form>
@endsection