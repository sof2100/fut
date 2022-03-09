
@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Equipos</h1>
@stop

@section('content')
<div>
    <a href="eliminatorias/create" class="btn btn-success margen">crear</a>
   
</div>


<div class="col-md-12" class="table-responsive">
<table class="eliminatorias">  
<tr>
<th class="borde">CUARTOS</th>
<th class="borde">SEMIFINAL</th>
<th class="borde">FINAL</th>
<th class="borde">CAMPEON</th>
</tr>

@foreach ($eliminatorias as $eliminatoria)
  
<tr>
<td></td>
</tr>
  <tr>
      <td class="borde">{{$eliminatoria->a}}</td>
  </tr>      
    <tr>
        <td class="solido"></td>
        <td class="borde">{{$eliminatoria->avsb}}</td>
    </tr>
    <tr>
        <td class="borde">{{$eliminatoria->b}}</td>
        <td class="solido"></td>
    </tr>
    <tr>
        <td ></td>
        <td class="solido"></td>
        <td class="borde">{{$eliminatoria->abvscd}}</td>
      </tr>
    <tr>
      <td class="borde">{{$eliminatoria->c}}</td>
      <td class="solido"></td>
      <td class="solido"></td>
  </tr>
  <tr>
      <td class="solido"></td>
      <td class="borde">{{$eliminatoria->cvsd}}</td>
      <td class="solido"></td>
  </tr>
  <tr>
      <td class="borde">{{$eliminatoria->d}}</td>
      <td></td>
      <td class="solido"></td>
  </tr>
  <tr>
      <td ></td>
      <td ></td>
      <td class="solido"></td>
      <td class="borde">{{$eliminatoria->campeon}}</td>      
  </tr>
  <tr>
      <td class="borde">{{$eliminatoria->e}}</td>
      <td></td>
      <td class="solido"></td>
  </tr>
  <tr>
      <td class="solido"></td>
      <td class="borde">{{$eliminatoria->evsf}}</td>
      <td class="solido"></td>
  </tr>
  <tr>
      <td class="borde">{{$eliminatoria->f}}</td>
      <td class="solido"></td>
      <td class="solido"></td>
  </tr>
  <tr>
      <td></td>
      <td class="solido"></td>
      <td class="borde">{{$eliminatoria->efvsgh}}</td>
    </tr>
  <tr>
    <td class="borde">{{$eliminatoria->g}}</td>
    <td class="solido"></td>
</tr>
<tr>
    <td class="solido"></td>
    <td class="borde">{{$eliminatoria->gvsh}}</td>
</tr>
<tr>
    <td class="borde">{{$eliminatoria->h}}</td>
</tr>
<td> <form action="{{ route ('eliminatorias.destroy',$eliminatoria->id)}}" method="post">
<a href="eliminatorias/{{$eliminatoria->id}}/edit" class="btn btn-warning fas fa-pen"></a>
@csrf                                
@method('delete')
 <button type="submit" class="btn btn-danger far fa-trash-alt"></button>
</form>
</td>
@endforeach
 </table> 
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