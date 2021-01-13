@extends('master.layout')
@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Área Personal</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Área Personal/Nueva Propuesta</li>
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
                <a class="nav-link" href="#" ><i class="far fa-edit"></i> Mis Propuestas <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#" ><i class="fas fa-clipboard-list"></i> Trabajos Asignados<span class="sr-only">(current)</span></a>
              </li>
            
          </ul>
        </div>
      </nav>
      <form>
        <div class="form-group">
          <label for="exampleFormControlInput1">Nombre</label>
          <input class="form-control" id="exampleFormControlInput1" placeholder="Nombre del tema ">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Categoria</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>Algoritmos y Complejidad</option>
            <option>Interacción Humano-Computador</option>
            <option>Seguridad y Aseguramiento de la Información</option>
            <option>Gestión de la Información</option>
            <option>Sistemas Inteligentes</option>
            <option>Desarrollo basado en plataformas</option>
            <option>Lenguajes de programación</option>
            <option>Ingieniería de software</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Descripción</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
        </div>
        <a href="/propuestas" class="btn btn-primarya">Guardar  <i class="far fa-save"></i></a>
        <a href="propuestas" class="btn btn-primaryr">Cancelar  <i class="far fa-window-close"></i></a>
      </form>
@endsection
            