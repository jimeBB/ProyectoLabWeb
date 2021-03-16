
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
<form action="{{ route('users.update', ['user' => $user])}}" method="POST">
    @csrf
    @method('PUT')
    <h1>Editando a {{$user->name}} </h1>
    <div>
        <label for="">Correo Electrónico</label>
        <input type="text" name="correo" value="{{$user->name}}">
    </div><br>
    <div>
        <label for="">Nombre</label>
        <input type="text" name="name" value="{{$user->name}}">
    </div><br>
    <div>
        <label for="">Apellido</label>
        <input type="text" name="lname" value="{{$user->lname}}">
    </div><br>
    <div>
        <label for="">Fecha de Nacimiento</label>
        <input type="date" name="birthday" value="{{$user->birthday}}">
    </div><br>
    <div>
        <label for="">Contraseña</label>
        <input type="password" name="password">
    </div><br>
    <div>
        <label for="">Confirmación</label>
        <input type="password" name="password_confirmation">
    </div><br>
    <div>
        <input type="submit" value="Actualizar">
    </div><br>
</form>
@endsection
