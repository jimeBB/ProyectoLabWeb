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

.regresar:link, .regresar:visited {
  border: solid 1px;
  font-family: arial, sans-serif;
  background-color: black;
  color: white;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

.regresar:hover, .regresar:active {
  background-color: white;
  color: black;
  border: solid 1px;
}
</style>
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

<a href="{{ route('usuarios.index') }}" class="regresar">Regresar</a>

@endsection
