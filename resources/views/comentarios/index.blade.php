@extends('layouts.main')

@section('content')
<h1>Lista de comentarios</h1>
<p>
    <a href="{{ route('comentarios.create') }}">Crea un comentario</a>
</p>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Fecha</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($comentario as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nombre }}</td>
                <td>{{ $item->fecha }}</td>
                <td>
                    <a href="{{ route('comentarios.show', ['comentario' => $item]) }}">
                        Show
                    </a> |
                    <a href="{{ route('comentarios.edit', ['comentario' => $item]) }}">
                        Update
                    </a>
                    <form action="{{ route('comentarios.destroy', ['comentario' => $item]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection