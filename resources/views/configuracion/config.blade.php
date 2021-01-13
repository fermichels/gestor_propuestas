@extends('master.layout')
@section('content')

<div class="container-fluid">
    <h1 class="mt-4">Configuración</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Configuración</li>
    </ol>
</div>

  <form class="px-4">
    <div class="form-group">
      <label for="exampleFormControlInput1">Nombre y Apellido</label>
      <input class="form-control" id="exampleFormControlInput1" placeholder=" Nombre y Apellido">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Documento</label>
        <input class="form-control" id="exampleFormControlInput1" readonly>
      </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Email</label>
        <input class="form-control" id="exampleFormControlInput1" type="email">
      </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Contraseña</label>
        <input class="form-control" id="exampleFormControlInput1" type="password">
      </div>
    <a href="" class="btn btn-primarya">Actualizar  <i class="far fa-save"></i></a>
    <a href="" class="btn btn-primaryr">Cancelar  <i class="far fa-window-close"></i></a>
  </form>


    
@endsection