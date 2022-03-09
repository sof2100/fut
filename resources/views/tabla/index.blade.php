@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Tabla de posiciones</h1>
@stop

@section('content')

<div class="container">
    <div class="col-md-12">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <table class="table-responsive table">
                        <tr>
                            <th>No</th>
                            <th></th>
                            <th>equipo</th>
                            <th>pj</th>
                            <th>pg</th>
                            <th>pe</th>
                            <th>pp</th>
                            <th>gf</th>
                            <th>gc</th>
                            <th>df</th>
                            <th>puntos</th>
                        </tr>
                        @forelse($equipos as $equipo)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="imagenes/{{$equipo->imagen}}" width="5%" class="logo">
                              </td>
                            <td>{{ $equipo->nombre }}</td>
                            
                            <td>{{ $equipo->partidos }}</td>
                            <td>{{ $equipo->ganado }}</td>
                            <td>{{ $equipo->empatado }}</td>
                            <td>{{ $equipo->perdido }}</td>
                            <td>{{ $equipo->gf }}</td>
                            <td>{{ $equipo->gc }}</td>
                            <td></td>
                            <td>{{ $equipo->puntos }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">sin equipos</td>
                        </tr>
                    @endforelse
                    {{-- @forelse($partidos as $partido)
                    <tr>
                        <td>{{ $partidos->equipo->nombre }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">sin equipos</td>
                    </tr>
                @endforelse --}}
                    </table>
    
                </div>
            </div>
        </div>

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