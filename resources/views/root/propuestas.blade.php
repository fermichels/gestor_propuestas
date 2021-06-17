@extends('layouts.app2')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">{{ __('Modificar propuestas') }}</div>

                    <div class="card-body col-md-11">
                        <form method="POST" action="{{ route('propuestas') }}">
                            @csrf

                            <input type="hidden" name="id" id="id" value="{{ isset($propuesta->id) ? $propuesta->id : '' }}">
                            <div class=" form-group row">
                                <label for="titulo" class="col-md-4 col-form-label text-md-right">{{ __('Titulo') }}</label>

                                <div class="col-md-6">
                                    <input id="titulo" type="text"
                                        class="form-control @error('titulo') is-invalid @enderror" name="titulo" required
                                        autocomplete="titulo" autofocus
                                            value="{{ isset($propuesta->titulo) ? $propuesta->titulo : '' }}"
                                            required autocomplete="titulo">

                                    @error('titulo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <div class=" form-group row">
                                <label for="descripcion"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>

                                <div class="col-md-6">
                                    <textarea id="descripcion" type="text"
                                        class="form-control @error('descripcion') is-invalid @enderror" name="descripcion"
                                        autocomplete="descripcion" value="{{ isset($propuestas->description) ? $propuestas->descripcion : '' }}"
                                        required autocomplete="descripcion">
                                        {{ isset($propuesta->descripcion) ? $propuesta->descripcion : '' }}</textarea>

                                    @error('descripcion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Linea</label>

                                <div class="col-md-6">
                                    <select name="linea_id" id="linea_id"
                                        class="form-control @error('linea_id') is-invalid @enderror" required>
                                        <option value="{{ isset($lineas->id) ? $lineas->name : '' }}">Selecciones una Línea de Investigación</option>
                                        @foreach ($lineas as $l)
                                            <option value="{{ $l->id }}">{{ $l->name }}</option>
                                        @endforeach


                                    </select>
                                    @error('linea_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ isset($propuestas->id) ? 'Actualizar' : 'Registrar' }}
                                    </button>
                                </div>
                            </div>


                        </form>


                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Propuestas de tema </h6>
                        </div>
                        <div class="container-fluid">
                            <div class="card-body">
                                <div class="">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <th scope="col" style="text-align: right">A-Z</th>

                                            </tr>
                                        </thead>
                                        <tbody style="color: grey">

                                            @foreach ($propuestas as $p)
                                                <tr>
                                                    <th scope="row">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h2 class="card-title">{{ $p->titulo }}</h2>
                                                                <p class="card-text">{{ $p->descripcion }}</p>
                                                                <a href="{{ route('editPropuesta', $p->id) }}" class="btn btn-sm btn-warning"
                                                                    style="width: 35px; font-size: 18px;">
                                                                    <i class="far fa-edit"></i>
                                                                </a>
                                                                <a href="{{ route('deletPropuesta', $p->id) }}"
                                                                    class="btn btn-primaryr"
                                                                    onclick="return confirm('Deseas eliminar la Propuesta?');"><i
                                                                        class="fas fa-trash-alt"></i></a>
                                                            </div>
                                                            <div class="footer-post">
                                                                Categoria:
                                                                <a href="#">{{ $p->linea->name }}</a>
                                                                Posted on {{ $p->created_at->format('d/m/Y') }} Por:
                                                                {{ $p->user->name }}
                                                                
                                                                    <a class="right-post">{{ $p->estado }} </a>
                                                             
                                                                
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                </tr>
                                                </th>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>



                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
