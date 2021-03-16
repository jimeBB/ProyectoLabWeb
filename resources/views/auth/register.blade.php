@extends('layouts.regis')



@section('content')

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="card-body">
        <h5 class="card-title text-center">Registro de usuario</h5>
        <hr class="my-4">
        <form action="{{ route('auth.do-register') }}" method="POST">
            @csrf

            <div class="form-label-group mt-3">
                <input type="text" name="name" class="form-control" placeholder="Nombre" required>
            </div>
            <div class="form-label-group mt-3">
                <input type="text" name="lname" class="form-control" placeholder="Apellido" required>
            </div>
            <div class="form-label-group mt-3">
                <input type="email" name="email" class="form-control" placeholder="Correo Electrónico" required>
            </div>
            <div class="form-label-group mt-3">
                <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
            </div>

            <div class="form-label-group mt-3">
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirma la contraseña" required>
            </div>
            <div class="form-label-group mt-3">
                <label>Ingrese su fecha de nacimiento</label>
                <input type="date" name="birthday" class="form-control" required>
            </div>
            <hr class="my-4">
            <input class="btn btn-lg btn-primary btn-block text-uppercase mt-4" type="submit" value="Registrarse">
        </form>
    </div>
@endsection
