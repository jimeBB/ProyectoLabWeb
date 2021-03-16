@extends('layouts.main')

@section('content')
<style>
h1 {
    font-family: arial, sans-serif;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;

}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

.botones:link, .botones:visited {
  border: solid 1px;
  font-family: arial, sans-serif;
  background-color: black;
  color: white;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

.botones:hover, .botones:active {
  background-color: white;
  color: black;
  border: solid 1px;
}
</style>
<h1>Lista de comentarios</h1>
<p>
    <a href="{{ route('comentarios.create') }}"class="botones">Crea un comentario</a>
    <a href="{{ route('users.index') }}" class="botones">Ver Usuarios</a>
    <a href="{{ route('resenas.index') }}" class="botones">Ver Reseñas</a>
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
                        Mostrar
                    </a> |
                    <a href="{{ route('comentarios.edit', ['comentario' => $item]) }}">
                        Editar
                    </a>
                    <form action="{{ route('comentarios.destroy', ['comentario' => $item]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Eliminar">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
