@extends('layouts.main')

@section('content')
<h1>Edita tu comentario aqui!</h1>
<form action="{{ route('comentarios.update', ['comentario' => $comentario]) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="">Nombre</label>
        <input type="text" name="nombre" value="{{ $comentario->nombre }}">
    </div>
    <div>
        <label for="">Fecha</label>
        <input type="date" name="fecha" value="{{ $comentario->fecha }}">
    </div>
    <div>
        <label for="">Texto</label>
        <input type="text" name="texto" value="{{ $comentario->texto }}">
    </div>
    <div>
        <label for="">Likes</label>
        <input type="text" name="likes" value="{{ $comentario->likes }}">
    </div>
    <div>
        <input type="submit" value="Store">
    </div>
</form>
@endsection