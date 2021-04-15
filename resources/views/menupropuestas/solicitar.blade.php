@extends('master.layout')
@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Solicitar Propuesta</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Propuestas/Solicitar</li>
    </ol>
</div>

    
    <div class="form-group">
      <label for="exampleFormControlSelect1">Modo de Trabajo</label>
      <select class="form-control" id="exampleFormControlSelect1">
        <option>Individual</option>
        <option>Dual</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Mensaje</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
    </div>
    <a href="/temas" class="btn btn-primarya">Solicitar   <i class="fas fa-share"></i></a>
    <a href="/temas" class="btn btn-primaryr">Cancelar  <i class="far fa-window-close"></i></a>
  </form>


@endsection
                