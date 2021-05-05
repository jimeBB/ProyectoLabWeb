
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
<h1>Crea tu comentario aqui!</h1>
<form action="{{ route('comentarios.store') }}" method="POST">
    @csrf
    <div>
        <label for="">Nombre</label>
        <input type="text" name="nombre">
    </div><br>
    <div>
        <label for="">Fecha</label>
        <input type="date" name="fecha">
    </div><br>
     <div>
        <label for="">Texto</label>
        <input type="text" name="texto">
    </div><br>
    <div>
        <label for="">Likes</label>
        <input type="text" name="likes">
    </div><br>
    <div>
        <input type="submit" value="Store">
    </div>
</form>
@endsection