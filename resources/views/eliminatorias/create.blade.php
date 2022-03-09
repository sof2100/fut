

@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Equipos</h1>
@stop

@section('content')
<div class="col-xs-12 col-sm-12 col-md-12 form">
  <p class="col-xs-12 col-sm-12 col-md-12 text-center form-title">CUARTOS</p>
  <form class="form-inline" action="/eliminatorias" class="was-validated" method="POST" >
    @csrf
    <!-- nombre -->
    <div class="form-group col-xs-12 col-sm-6 col-md-6 form">
      <label class="control-label col-xs-12 col-sm-4 col-md-4" >EQUIPO A:</label>
      <div class="col-xs-12 col-sm-8 col-md-8">
        <input type="text" class="form-control"  name="a" required>
      </div>
    </div>
    <!-- apellidos -->
    <div class="form-group col-xs-12 col-sm-6 col-md-6 form">
        <label class="control-label col-xs-12 col-sm-4 col-md-4" >equipo B:</label>
        <div class="col-xs-12 col-sm-8 col-md-8">
          <input type="text" class="form-control"  name="b" required>
        </div>
      </div>
      <div class="form-group col-xs-12 col-sm-6 col-md-6 form">
      <label class="control-label col-xs-12 col-sm-4 col-md-4" >EQUIPO C:</label>
      <div class="col-xs-12 col-sm-8 col-md-8">
        <input type="text" class="form-control" name="c" required>
      </div>
    </div>
    <!-- apellidos -->
    <div class="form-group col-xs-12 col-sm-6 col-md-6 form">
        <label class="control-label col-xs-12 col-sm-4 col-md-4" >equipo D:</label>
        <div class="col-xs-12 col-sm-8 col-md-8">
          <input type="text" class="form-control"  name="d" required>
        </div>
      </div>
      <div class="form-group col-xs-12 col-sm-6 col-md-6 form">
      <label class="control-label col-xs-12 col-sm-4 col-md-4" >EQUIPO E:</label>
      <div class="col-xs-12 col-sm-8 col-md-8">
        <input type="text" class="form-control"  name="e" required>
      </div>
    </div>
    <!-- apellidos -->
    <div class="form-group col-xs-12 col-sm-6 col-md-6 form">
        <label class="control-label col-xs-12 col-sm-4 col-md-4" >equipo F:</label>
        <div class="col-xs-12 col-sm-8 col-md-8">
          <input type="text" class="form-control"  name="f" required>
        </div>
      </div>
      <div class="form-group col-xs-12 col-sm-6 col-md-6 form">
      <label class="control-label col-xs-12 col-sm-4 col-md-4" >EQUIPO G:</label>
      <div class="col-xs-12 col-sm-8 col-md-8">
        <input type="text" class="form-control" name="g" required>
      </div>
    </div>
    <!-- apellidos -->
    <div class="form-group col-xs-12 col-sm-6 col-md-6 form">
        <label class="control-label col-xs-12 col-sm-4 col-md-4" >equipo H:</label>
        <div class="col-xs-12 col-sm-8 col-md-8">
          <input type="text" class="form-control"   name="h" required>
        </div>
      </div>
      <p class="col-xs-12 col-sm-12 col-md-12 text-center form-title">SEMIFINAL</p>
      <div class="form-group col-xs-12 col-sm-6 col-md-6 form">
      <label class="control-label col-xs-12 col-sm-4 col-md-4" >EQUIPO AVSB:</label>
      <div class="col-xs-12 col-sm-8 col-md-8">
        <input type="text" class="form-control"  name="avsb" required>
      </div>
    </div>
    <!-- apellidos -->
    <div class="form-group col-xs-12 col-sm-6 col-md-6 form">
        <label class="control-label col-xs-12 col-sm-4 col-md-4" >equipo CVSD:</label>
        <div class="col-xs-12 col-sm-8 col-md-8">
          <input type="text" class="form-control"   name="cvsd" required>
        </div>
      </div>
      <div class="form-group col-xs-12 col-sm-6 col-md-6 form">
      <label class="control-label col-xs-12 col-sm-4 col-md-4" >EQUIPO EVSF:</label>
      <div class="col-xs-12 col-sm-8 col-md-8">
        <input type="text" class="form-control" name="evsf" required>
      </div>
    </div>
    <!-- apellidos -->
    <div class="form-group col-xs-12 col-sm-6 col-md-6 form">
        <label class="control-label col-xs-12 col-sm-4 col-md-4" >equipo GVSH:</label>
        <div class="col-xs-12 col-sm-8 col-md-8">
          <input type="text" class="form-control"  name="gvsh" required>
        </div>
      </div>
      <p class="col-xs-12 col-sm-12 col-md-12 text-center form-title">FINAL</p>
      <div class="form-group col-xs-12 col-sm-6 col-md-6 form">
      <label class="control-label col-xs-12 col-sm-4 col-md-4" >EQUIPO ABVSCD:</label>
      <div class="col-xs-12 col-sm-8 col-md-8">
        <input type="text" class="form-control"  name="abvscd" required>
      </div>
    </div>
    <!-- apellidos -->
    <div class="form-group col-xs-12 col-sm-6 col-md-6 form">
        <label class="control-label col-xs-12 col-sm-4 col-md-4" >equipo EFVSGH:</label>
        <div class="col-xs-12 col-sm-8 col-md-8">
          <input type="text" class="form-control"   name="efvsgh" required>
        </div>
      </div>
      <p class="col-md-12 text-center form-title">CAMPEON</p>
      <div class="form-group col-xs-12 col-sm-6 col-md-6 form">
      <label class="control-label col-xs-12 col-sm-4 col-md-4" >EQUIPO CAMPEON:</label>
      <div class="col-xs-12 col-sm-8 col-md-8">
        <input type="text" class="form-control"  name="campeon" required>
      </div>
    </div>
    <button type="submit" class="btn btn-success">registrar</button>
    <a href="/eliminatorias" class="btn btn-danger">cancelar</a>
    
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop