@extends('layouts.regis')

@section('content')

    <div class="align-self-center text-center my-3">
        <img src="../imgs/logo-prov.png" width="150px" height="150px"  alt="logo">
        <p style="color: darkorange; font-size: x-large; font-weight:bold;"> El Rincón del Bisquet </p>
    </div>
    <div class="card-body">
        <h5 class="card-title text-center">Ingresar</h5>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <hr class="my-4">
        <form action="{{ route('auth.do-login') }}" method="POST">
            @csrf
            <div class="form-label-group mt-3">
                <input type="email" name="email" class="form-control" placeholder="Correo Electrónico" required>
            </div>

            <div class="form-label-group mt-3">
                <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
            </div>
            <hr class="my-4">
            <input class="btn btn-lg btn-primary btn-block text-uppercase mt-4" type="submit" value="Ingresar">
        </form>

        <div class="flex items-center justify-end mt-4">
            <a class="btn" href="{{ url('auth/facebook/redirect') }}"
                style="background-color: #3B5499; color: #ffffff; padding: 8px; width: 100%; text-align: center; display: block; border-radius:4px;">
                Login with Facebook
            </a>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="btn" href="{{ url('auth/github/redirect') }}"
                style="background-color: transparent; color: #000; padding: 8px; width: 100%; text-align: center; display: block; border-radius:4px; border: 1px solid">
                Login with Github
            </a>
        </div>

        <p class="my-3">No tienes cuenta? Registrate <a href="{{url('register')}}">aquí</a></p>
    </div>
@endsection
