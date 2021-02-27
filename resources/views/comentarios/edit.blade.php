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
<h1>Edita tu comentario aqui!</h1>
<form action="{{ route('comentarios.update', ['comentario' => $comentario]) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="">Nombre</label>
        <input type="text" name="nombre" value="{{ $comentario->nombre }}">
    </div><br>
    <div>
        <label for="">Fecha</label>
        <input type="date" name="fecha" value="{{ $comentario->fecha }}">
    </div><br>
    <div>
        <label for="">Texto</label>
        <input type="text" name="texto" value="{{ $comentario->texto }}">
    </div><br>
    <div>
        <label for="">Likes</label>
        <input type="text" name="likes" value="{{ $comentario->likes }}">
    </div><br>
    <div>
        <input type="submit" value="Store">
    </div>
</form>
@endsection