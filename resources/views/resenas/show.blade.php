@extends('layouts.main')

@section('content')
<table>
    <thead>
        <tr>
            <th>Reseña</th>
            <th>Nombre</th>
            <th>Titulo</th>
            <th>Fecha</th>
            <th>Categoria</th>
            <th>Texto</th>
            <th>Likes</th>
            <th>Usuario ID</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $resena->id }}</td>
            <td>{{ $resena->nombre }}</td>
            <td>{{ $resena->titulo }}</td>
            <td>{{ $resena->fecha_creacion }}</td>
            <td>{{ $resena->categoria }}</td>
            <td>{{ $resena->texto }}</td>
            <td>{{ $resena->likes}}</td>
            <td>{{ $resena->usuario_id}}</td>
        </tr>
    </tbody>
</table>
@endsection