@extends('layouts.regis')



@section('content')
    <div class="card-body">

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

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
                <label>Ingrese su fecha de nacimiento</label>
                <input type="date" name="birthday" class="form-control" required>
            </div>

            <div class="form-label-group mt-3">
                <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
            </div>

            <div class="form-label-group mt-3">
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirma la contraseña" required>
            </div>

            <hr class="my-4">
            <input class="btn btn-lg btn-primary btn-block text-uppercase mt-4" type="submit" value="Registrarse">

            <div class="flex items-center justify-end mt-4">
                <a class="btn" href="{{ url('auth/facebook/redirect') }}"
                    style="background-color: #3B5499; color: #ffffff; padding: 8px; width: 100%; text-align: center; display: block; border-radius:4px;">
                    Register with Facebook
                </a>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="btn" href="{{ url('auth/github/redirect') }}"
                    style="background-color: transparent; color: #000; padding: 8px; width: 100%; text-align: center; display: block; border-radius:4px; border: 1px solid">
                    Register with Github
                </a>
            </div>
            <p class="my-3">Ya tienes cuenta? <a href="{{url('login')}}">Log in</a></p>
        </form>
    </div>
@endsection
