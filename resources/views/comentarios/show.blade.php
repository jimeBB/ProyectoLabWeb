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

<table>
    <thead>
        <tr>
            <th>Reseña</th>
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Texto</th>
            <th>Likes</th>
           
        </tr>
    </thead>
    <tbody>
    @foreach($comentario->resena as $resena)
        <tr>
          <td>{{ $resena->titulo }}</td>
          <td>{{ $comentario->nombre }}</td>
            <td>{{ $comentario->fecha }}</td>
            <td>{{ $comentario->texto }}</td>
            <td>{{ $comentario->likes}}</td>
   
           
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
