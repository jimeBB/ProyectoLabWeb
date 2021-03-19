@extends('layouts.regis')

@section('content')
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
    </div>
@endsection
