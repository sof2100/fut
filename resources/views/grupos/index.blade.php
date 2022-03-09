@extends('adminlte::page')

@section('title', 'Jugadores')

@section('content_header')
    <h1>grupos</h1>
@stop

@section('content')

<div>
  <a href="grupos/create" class="btn btn-success margen">Registrar grupo</a> <br>   
</div>

<div class="container-fluid ">  
  <div class="table-responsive card">         
  <table class="table">
    <thead class="thead-light">
      <tr>

        <th class="center">Nombre</th>
        <th class="center">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($grupos as $grupo)
                <td class="center">{{$grupo->nombre}}</td>
                <td class="center">
                  <form action="{{ route ('grupos.destroy',$grupo->id)}}" method="post">
                  <a href="grupos/{{$grupo->id}}/edit" class="btn btn-warning fas fa-pen"></a>     
                  @csrf                                
                  @method('delete')
                   <button type="submit" class="btn btn-danger far fa-trash-alt"></button>
                  </form>
                  </td>
          </tr>    
            @endforeach
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