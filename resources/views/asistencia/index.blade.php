@extends('adminlte::page')

@section('title', 'Equipos')

@section('content_header')
    <h1>asistidores</h1>
@stop

@section('content')

<div>
  <a href="asistencia/create" class="btn btn-success margen">registrar asistidor</a> <br>   
</div>
<div class="container-fluid ">  
  <div class="table-responsive card">         
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th class="center">Jugador</th>
        <th class="center">asistencias</th>
        <th class="center">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($asistencias as $asistencia)
            <tr>
                <td class="center"> {{$asistencia->jugador->nombre}}</td>
                <td class="center"> {{$asistencia->asistencias}}</td>
              <td class="center">
            {{-- <form action="{{ route ('equipos.destroy',$equipo->id)}}" method="post">
              <a href="equipos/{{$equipo->id}}/edit" class="btn btn-warning fas fa-pen"></a>
              
            @csrf                                
            @method('delete')
               <button type="submit" class="btn btn-danger far fa-trash-alt"></button>
              </form> --}}
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


