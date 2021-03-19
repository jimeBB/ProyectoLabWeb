@extends('layouts.main')

@section('content')
<style>
h1 {
    font-family: arial, sans-serif;
}
p {
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
<table>
    <thead>
        <tr>
            <th>Reseña</th>
            <th>Autor</th>
            <th>Fecha</th>
            <th>Categoria</th>
            <th>Likes</th>
            <th>Usuario</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $resena->id }}</td>
            <td>{{ $resena->nombre }}</td>
            <td>{{ $resena->fecha_creacion }}</td>
            <td>{{ $resena->categoria }}</td>
            <td>{{ $resena->likes}}</td>
            <td>{{ $resena->usuario->nombre}}</td>
        </tr>
    </tbody>
</table>
<h1>{{ $resena->titulo }}</h1>
<p>{{ $resena->texto }} </p>

@endsection