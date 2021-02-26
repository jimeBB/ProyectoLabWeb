
@extends('layouts.main')

@section('content')
<h1>Crea tu comentario aqui!</h1>
<form action="{{ route('comentarios.store') }}" method="POST">
    @csrf
    <div>
        <label for="">Nombre</label>
        <input type="text" name="nombre">
    </div>
    <div>
        <label for="">Fecha</label>
        <input type="date" name="fecha">
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
        <label for="">Resena id</label>
        <input type="text" name="resenaid">
    </div>
    <div>
        <input type="submit" value="Store">
    </div>
</form>
@endsection