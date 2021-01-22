@extends('layouts.app2')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">

            <div class="card">
                <div class="card-header">{{ __('Modificar propuestas') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('propuestas') }}">
                        @csrf

                        <input type="hidden" name="id" id="id">
                        <div class=" form-group row">
                            <label for="titulo" class="col-md-4 col-form-label text-md-right">{{ __('Titulo') }}</label>

                            <div class="col-md-6">
                                <input id="titulo" type="text" class="form-control @error('titulo') is-invalid @enderror"
                                    name="titulo" required autocomplete="titulo" autofocus>

                                @error('titulo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>
                        <div class=" form-group row">
                            <label for="titulo"
                                class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>

                            <div class="col-md-6">
                                <textarea id="description" type="text"
                                    class="form-control @error('description') is-invalid @enderror" name="description"
                                    autocomplete="description" required autocomplete="description">
                                                            </textarea>

                                @error('titulo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Linea</label>

                            <div class="col-md-6">
                                <select name="linea_id" id="linea_id" class="form-control @error('linea_id') is-invalid @enderror"
                                    required>
                                    <option value="">Selecciones una Línea de Investigación</option>
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
                        <h6 class="m-0 font-weight-bold text-primary">Propuestas de tema</h6>
                    </div>
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
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <h2 class="card-title">{{ $p->titulo }}</h2>
                                                        <p class="card-text">{{ $p->descripcion }}</p>
                                                        <a href="#" class="btn btn-primarya"><i
                                                                class="fas fa-pencil-ruler"></i></a>
                                                        <a href="#" class="btn btn-primaryr"><i
                                                                class="fas fa-trash-alt"></i></a>
                                                    </div>
                                                    <div class="card-footer text-muted">
                                                        Categoria:
                                                        <a href="#">{{ $p->linea->name }}</a>
                                                        Posted on {{ $p->created_at->format('d/m/Y') }} Por:
                                                        {{ $p->user->name }}
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


    @endsection
