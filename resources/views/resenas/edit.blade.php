@extends('layouts.main')

@section('content')
<style>
h1, label {
    font-family: arial, sans-serif;
}
input[type=text] {
  border: none;
  border-bottom: 1px solid black;
}
</style>
<h1>¿Te equivocaste?... cámbialo.</h1>
<form action="{{ route('resenas.update', ['resena' => $resena]) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="">Nombre</label>
        <input type="text" name="nombre" value="{{ $resena->nombre }}">
    </div><br>
    <div>
        <label for="">Título</label>
        <input type="text" name="titulo" value="{{ $resena->titulo }}">
    </div><br>
    <div>
        <label for="">Fecha</label>
        <input type="date" name="fecha_creacion" value="{{ $resena->fecha_creacion }}">
    </div><br>
    <div>
        <label for="">Categoría</label>
        <input type="text" name="categoria" value="{{ $resena->categoria }}">
    </div><br>
    <div>
        <label for="">Texto</label>
        <input type="text" name="texto" value="{{ $resena->texto }}">
    </div><br>
    <div>
        <label for="">Likes</label>
        <input type="text" name="likes" value="{{ $resena->likes }}">
    </div><br>
    <div>
        <label for="">Usuario ID</label>
        <input type="text" name="usuario_id" value="{{ $resena->usuario_id }}">
    </div><br>
    <div>
        <input type="submit" value="Store">
    </div>
</form>
@endsection
