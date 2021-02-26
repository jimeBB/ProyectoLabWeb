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
        <p></p>
        @foreach($comentario->resena as $resena)
       
          <td>{{ $resena->titulo }}</td>
          <td>{{ $comentario->nombre }}</td>
            <td>{{ $comentario->fecha }}</td>
            <td>{{ $comentario->texto }}</td>
            <td>{{ $comentario->likes}}</td>
    @endforeach
           
        </tr>
    </tbody>
</table>
@endsection
