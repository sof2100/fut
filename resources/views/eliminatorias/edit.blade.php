@extends('layouts.plantilla')
@section('titulo','editar')
@section('contenido')
<div class="col-xs-12 col-sm-12 col-md-12 form">
    <p class="col-xs-12 col-sm-12 col-md-12 text-center form-title">CUARTOS</p>
    <form class="form-horizontal" action="/home/{{$eliminatoria->id}}" method="POST" >
      @csrf
      @method('PUT')
      <!-- nombre -->
      <div class="form-group col-xs-12 col-sm-6 col-md-6 form">
        <label class="control-label col-xs-12 col-sm-4 col-md-4" >EQUIPO A:</label>
        <div class="col-xs-12 col-sm-8 col-md-8">
          <input type="text" class="form-control"  name="a" value="{{$eliminatoria->a}}">
        </div>
      </div>
      <!-- apellidos -->
      <div class="form-group col-xs-12 col-sm-6 col-md-6 form">
          <label class="control-label col-xs-12 col-sm-4 col-md-4" >equipo B:</label>
          <div class="col-xs-12 col-sm-8 col-md-8">
            <input type="text" class="form-control"  name="b" value="{{$eliminatoria->b}}">
          </div>
        </div>
        <div class="form-group col-xs-12 col-sm-6 col-md-6 form">
        <label class="control-label col-xs-12 col-sm-4 col-md-4" >EQUIPO C:</label>
        <div class="col-xs-12 col-sm-8 col-md-8">
          <input type="text" class="form-control" name="c" value="{{$eliminatoria->c}}">
        </div>
      </div>
      <!-- apellidos -->
      <div class="form-group col-xs-12 col-sm-6 col-md-6 form">
          <label class="control-label col-xs-12 col-sm-4 col-md-4" >equipo D:</label>
          <div class="col-xs-12 col-sm-8 col-md-8">
            <input type="text" class="form-control"  name="d" value="{{$eliminatoria->d}}">
          </div>
        </div>
        <div class="form-group col-xs-12 col-sm-6 col-md-6 form">
        <label class="control-label col-xs-12 col-sm-4 col-md-4" >EQUIPO E:</label>
        <div class="col-xs-12 col-sm-8 col-md-8">
          <input type="text" class="form-control"  name="e" value="{{$eliminatoria->e}}">
        </div>
      </div>
      <!-- apellidos -->
      <div class="form-group col-xs-12 col-sm-6 col-md-6 form">
          <label class="control-label col-xs-12 col-sm-4 col-md-4" >equipo F:</label>
          <div class="col-xs-12 col-sm-8 col-md-8">
            <input type="text" class="form-control"  name="f" value="{{$eliminatoria->f}}">
          </div>
        </div>
        <div class="form-group col-xs-12 col-sm-6 col-md-6 form">
        <label class="control-label col-xs-12 col-sm-4 col-md-4" >EQUIPO G:</label>
        <div class="col-xs-12 col-sm-8 col-md-8">
          <input type="text" class="form-control" name="g" value="{{$eliminatoria->g}}">
        </div>
      </div>
      <!-- apellidos -->
      <div class="form-group col-xs-12 col-sm-6 col-md-6 form">
          <label class="control-label col-xs-12 col-sm-4 col-md-4" >equipo H:</label>
          <div class="col-xs-12 col-sm-8 col-md-8">
            <input type="text" class="form-control"   name="h" value="{{$eliminatoria->h}}">
          </div>
        </div>
        <p class="col-xs-12 col-sm-12 col-md-12 text-center form-title">SEMIFINAL</p>
        <div class="form-group col-xs-12 col-sm-6 col-md-6 form">
        <label class="control-label col-xs-12 col-sm-4 col-md-4" >EQUIPO AVSB:</label>
        <div class="col-xs-12 col-sm-8 col-md-8">
          <input type="text" class="form-control"  name="avsb" value="{{$eliminatoria->avsb}}">
        </div>
      </div>
      <!-- apellidos -->
      <div class="form-group col-xs-12 col-sm-6 col-md-6 form">
          <label class="control-label col-xs-12 col-sm-4 col-md-4" >equipo CVSD:</label>
          <div class="col-xs-12 col-sm-8 col-md-8">
            <input type="text" class="form-control"   name="cvsd" value="{{$eliminatoria->cvsd}}">
          </div>
        </div>
        <div class="form-group col-xs-12 col-sm-6 col-md-6 form">
        <label class="control-label col-xs-12 col-sm-4 col-md-4" >EQUIPO EVSF:</label>
        <div class="col-xs-12 col-sm-8 col-md-8">
          <input type="text" class="form-control" name="evsf" value="{{$eliminatoria->evsf}}">
        </div>
      </div>
      <!-- apellidos -->
      <div class="form-group col-xs-12 col-sm-6 col-md-6 form">
          <label class="control-label col-xs-12 col-sm-4 col-md-4" >equipo GVSH:</label>
          <div class="col-xs-12 col-sm-8 col-md-8">
            <input type="text" class="form-control"  name="gvsh" value="{{$eliminatoria->gvsh}}">
          </div>
        </div>
        <p class="col-xs-12 col-sm-12 col-md-12 text-center form-title">FINAL</p>
        <div class="form-group col-xs-12 col-sm-6 col-md-6 form">
        <label class="control-label col-xs-12 col-sm-4 col-md-4" >EQUIPO ABVSCD:</label>
        <div class="col-xs-12 col-sm-8 col-md-8">
          <input type="text" class="form-control"  name="abvscd" value="{{$eliminatoria->abvscd}}">
        </div>
      </div>
      <!-- apellidos -->
      <div class="form-group col-xs-12 col-sm-6 col-md-6 form">
          <label class="control-label col-xs-12 col-sm-4 col-md-4" >equipo EFVSGH:</label>
          <div class="col-xs-12 col-sm-8 col-md-8">
            <input type="text" class="form-control"   name="efvsgh" value="{{$eliminatoria->efvsgh}}">
          </div>
        </div>
        <p class="col-md-12 text-center form-title">CAMPEON</p>
        <div class="form-group col-xs-12 col-sm-6 col-md-6 form">
        <label class="control-label col-xs-12 col-sm-4 col-md-4" >EQUIPO CAMPEON:</label>
        <div class="col-xs-12 col-sm-8 col-md-8">
          <input type="text" class="form-control"  name="campeon" value="{{$eliminatoria->campeon}}">
        </div>
      </div>
      <button type="submit" class="btn btn-success">Actualizar</button>
      <a href="/home" class="btn btn-danger">Cancelar</a>
@endsection


@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Equipos</h1>
@stop

@section('content')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop