@extends('layouts.main')

@section('content')
<table>
    <thead>
        <tr>
            <th>Reseña</th>
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Texto</th>
            <th>Likes</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $comentario->id }}</td>
            <td>{{ $comentario->nombre }}</td>
            <td>{{ $comentario->fecha }}</td>
            <td>{{ $comentario->texto }}</td>
            <td>{{ $comentario->likes}}</td>
        </tr>
    </tbody>
</table>
@endsection