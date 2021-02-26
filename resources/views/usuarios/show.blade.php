@extends('layouts.main')

@section('content')

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Correo Electrónico</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha de Nacimiento</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $usuario->id }}</td>
            <td>{{ $usuario->correo }}</td>
            <td>{{ $usuario->nombre }}</td>
            <td>{{ $usuario->apellido }}</td>
            <td>{{ $usuario->cumpleanos }}</td>
        </tr>
    </tbody>
</table>

<a href="{{ route('usuarios.index') }}">Regresar</a>

@endsection
