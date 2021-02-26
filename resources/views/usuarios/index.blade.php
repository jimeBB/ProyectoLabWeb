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

    .escribir:link, .escribir:visited {
    border: solid 1px;
    font-family: arial, sans-serif;
    background-color: black;
    color: white;
    padding: 10px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    }

    .escribir:hover, .escribir:active {
    background-color: white;
    color: black;
    border: solid 1px;
    }
</style>
<h1>Usuarios</h1>
<p>
    <a href="{{ route('usuarios.create') }}" class="escribir">Crear Usuario</a>
    <a href="{{ route('comentarios.index') }}" class="escribir">Ver Comentarios</a>
    <a href="{{ route('resenas.index') }}" class="escribir">Ver Reseñas</a>
</p>
<p></p>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Correo</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuario as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->correo }}</td>
                <td>
                    <table>
                        <td>
                            <a href="{{ route('usuarios.show', ['usuario' => $item]) }}">
                                Ver más
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('usuarios.edit', ['usuario' => $item]) }}">
                                Editar
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('usuarios.destroy', ['usuario' => $item]) }}" method="post">
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
