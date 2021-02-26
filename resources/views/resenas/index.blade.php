@extends('layouts.main')

@section('content')
<h1>Lista de Reseñas</h1>
<p>
    <a href="{{ route('resenas.create') }}">Crea un comentario</a>
</p>
<table>
    <thead>
        <tr>
            <th>Reseña</th>
            <th>Nombre</th>
            <th>Título</th>
            <th>Fecha</th>
            <th>Categoría</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($resena as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nombre }}</td>
                <td>{{ $item->titulo }}</td>
                <td>{{ $item->fecha_creacion }}</td>
                <td>{{ $item->categoria }}</td>
                <td>{{ $item->usuario_id }}</td>
                <td>
                    <a href="{{ route('resenas.show', ['resena' => $item]) }}">
                        Show
                    </a> |
                    <a href="{{ route('resenas.edit', ['resena' => $item]) }}">
                        Update
                    </a>
                    <form action="{{ route('resenas.destroy', ['resena' => $item]) }}" method="post">
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