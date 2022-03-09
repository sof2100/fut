@extends('adminlte::page')

@section('title', 'Jugadores')

@section('content_header')
    <h1>Jugadores</h1>
@stop

@section('content')

<div>
    
</div>
<div class="col-12">
  <div class="col-2">
    <a href="/grupos" class="btn btn-primary margen">Volver</a> <br> 
    <div class="dropdown">
      <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
        grupos
      </button>
      <div class="dropdown-menu">
        @foreach ($grupos as $grupo)
        <a href="/grupos/{{$grupo->id}}/equipos" class="btn btn-info">{{$grupo->nombre}}</a>
            @endforeach 
      </div>
    </div>
    <br>
  </div>
</div>
<div class="container-fluid ">  
  <div class="table-responsive card">         
  <table class="table">
    <thead class="thead-light">
      <tr>
        @foreach ($grupos as $grupo)
            <a href="">{{$grupo->nombre}}</a>
        @endforeach
        <th class="center">grupo</th>
      </tr>
    </thead>
    <tbody>
      <th>equipos</th>
    </tbody>
  </table>
</div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/estilo.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


