
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
<form action="{{ route('usuarios.update', ['usuario' => $usuario])}}" method="POST">
    @csrf
    @method('PUT')
    <h1>Editando a {{$usuario->nombre}} </h1>
    <div>
        <label for="">Correo Electrónico</label>
        <input type="text" name="correo" value="{{$usuario->nombre}}">
    </div><br>
    <div>
        <label for="">Nombre</label>
        <input type="text" name="nombre" value="{{$usuario->nombre}}">
    </div><br>
    <div>
        <label for="">Apellido</label>
        <input type="text" name="apellido" value="{{$usuario->apellido}}">
    </div><br>
    <div>
        <label for="">Fecha de Nacimiento</label>
        <input type="date" name="fecha_nacimiento" value="{{$usuario->cumpleanos}}">
    </div><br>
    <div>
        <label for="">Contraseña</label>
        <input type="password" name="contrasena">
    </div><br>
    <div>
        <label for="">Confirmación</label>
        <input type="password" name="confirmacion">
    </div><br>
    <div>
        <input type="submit" value="Registrarse">
    </div><br>
</form>
@endsection
