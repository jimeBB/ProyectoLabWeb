
@extends('layouts.main')

@section('content')
<h1>Registra usuario</h1>
<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <div>
        <label for="">Nombre</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="">Apellido</label>
        <input type="text" name="lname">
    </div>
    <div>
        <label for="">Fecha de nacimiento</label>
        <input type="date" name="birthday">
    </div>
    <div>
        <label for="">Correo</label>
        <input type="text" name="email">
    </div>
    <div>
        <label for="">Contraseña</label>
        <input type="password" name="password">
    </div>
    <div class="form-label-group mt-3">
        <select class="form-control" name="role">
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select>
    </div>
    <div>
        <input type="submit" value="Store">
    </div>
</form>
@endsection