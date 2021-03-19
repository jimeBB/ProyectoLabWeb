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
<h1>Lista de Reseñas</h1>
<p>
    <a href="{{ route('resenas.create') }}" class="botones">Escribir Reseña</a>
    <a href="{{ route('comentarios.index') }}" class="botones">Ver Comentarios</a>
    <a href="{{ route('users.index') }}" class="botones">Ver Usuarios</a>
</p>
<p></p>

<table>
    <thead>
        <tr>
            <th>Reseña</th>
            <th>Autor</th>
            <th>Título</th>
            <th>Fecha</th>
            <th>Categoría</th>
            <th>usuario</th>
            <th>Opciones</th>
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
                    <table>
                        <td>
                            <a href="{{ route('resenas.show', ['resena' => $item]) }}">
                                Leer
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('resenas.edit', ['resena' => $item]) }}">
                                Editar
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('resenas.destroy', ['resena' => $item]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Eliminar">
                            </form>
                        </td>
                    </table>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
