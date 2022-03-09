@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Partidos</h1>
@stop

@section('content')
<div>
<a href="partidos/create" class="btn btn-success margen">crear partido</a>
</div>
<div class="container ">  
    <div class="table-responsive card">         
    <table class="table">
      <thead class="thead-light">
        <tr>
            <th class="center">Local</th>
            <th></th>
            <th></th>
            <th></th>
            <th class="center">Visitante</th>
            <th class="center">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($partidos as $partido)
        <tr>
          <th class="center">{{ $partido->id }}</th>
            <th class="center">{{ $partido->equipoA->nombre }}</th>
            <th class="center">{{ $partido->marcador1 }}</th>
            <th class="center"> - </th>
            <th class="center">{{ $partido->marcador2 }}</th>
            <th class="center">{{ $partido->equipoB->nombre }}</th> 
            <th class="center">
             <form action="{{ route ('partidos.destroy',$partido->id)}}" method="post">
              <a href="partidos/{{$partido->id}}/edit" class="btn btn-warning fas fa-pen"></a>
                @csrf                                
                  @method('delete')
             <button type="submit" class="btn btn-danger far fa-trash-alt"></button>
            </form><br>
            
            </th>
        </tr>
        {{-- @empty
                        <tr>
                            <td colspan="6">No hay equipos</td>
                        </tr> --}}
        @endforeach
      </tbody>
    </table>
    <div class="d-flex justify-content-left-end">
      {!! $partidos->links()!!}
    </div>
  </div>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/estilo.css">
    <link rel="stylesheet"  href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
@stop

@section('js')
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap.min.js"></script>
<script>  
   $(document).ready(function() {
    $('#partido').DataTable();
} );
</script>
@stop
