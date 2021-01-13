@extends('master.layout')
@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Área Personal</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Área Personal/Mis Propuestas</li>
    </ol>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="/home" ><i class="fas fa-home"></i> Inicio <span class="sr-only">(current)</span></a>
          </li>
        <li class="nav-item active">
          <a class="nav-link" href="/notificaciones" ><i class="far fa-bell"></i> Notificaciones <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/mensajes" ><i class="fas fa-envelope"></i> Mensajes <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/propuestas" ><i class="far fa-edit"></i> Mis Propuestas <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/asignados" ><i class="fas fa-clipboard-list"></i> Trabajos Asignados<span class="sr-only">(current)</span></a>
          </li>
        
      </ul>
    </div>
  </nav>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
          <li class="nav-item active create">
            <a class="nav-link" href="/nuevapropuesta" ><i class="far fa-plus-square"></i> Crear Propuesta</a>
          </li>
        
      </ul>
    </div>
  </nav>
  <div class="card mb-4">
    <div class="card-body">
        <h2 class="card-title">Ejemplo Tema</h2>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis
            aliquid atque, nulla? Quos cum ex quis
            soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus,
            veniam magni quis! Lorem ipsum dolor sit
            amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis
            soluta, a laboriosam. Dicta expedita corporis
            animi vero voluptate voluptatibus possimus, veniam magni quis! Lorem ipsum dolor sit amet,
            consectetur adipisicing elit. Reiciendis
            aliquid atque, nulla? Quos cum ex quis soluta,a laboriosam. Dicta expedita corporis animi
            vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#" class="btn btn-primarya"><i class="fas fa-pencil-ruler"></i></a>
            <a href="#" class="btn btn-primaryr"><i class="fas fa-trash-alt"></i></a>
    </div>
    <div class="card-footer text-muted">
        Categoria:
        <a href="#">Ingienieria</a>
        Posted on January 1, 2020
    </div>
</div>
<div class="card mb-4">
    <div class="card-body">
        <h2 class="card-title">Ejemplo Tema</h2>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis
            aliquid atque, nulla? Quos cum ex quis
            soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus,
            veniam magni quis! Lorem ipsum dolor sit
            amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis
            soluta, a laboriosam. Dicta expedita corporis
            animi vero voluptate voluptatibus possimus, veniam magni quis! Lorem ipsum dolor sit amet,
            consectetur adipisicing elit. Reiciendis
            aliquid atque, nulla? Quos cum ex quis soluta,a laboriosam. Dicta expedita corporis animi
            vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#" class="btn btn-primarya"><i class="fas fa-pencil-ruler"></i></a>
            <a href="#" class="btn btn-primaryr"><i class="fas fa-trash-alt"></i></a>
    </div>
    <div class="card-footer text-muted">
        Categoria:
        <a href="#">Ingienieria</a>
        Posted on January 1, 2020
    </div>
</div>

@endsection
                