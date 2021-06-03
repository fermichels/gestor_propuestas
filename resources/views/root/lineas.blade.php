@extends('layouts.app2')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"> {{ isset($lineas->id) ? 'Actualizar Línea de Investigacion' : 'Registrar  Línea de Investigacion' }}</div>

                        <div class="card-body ">
                            <form method="POST" action="{{ route('lineas') }}">
                                @csrf

                                <input type="hidden" name="id" id="id" value="{{ isset($lineas->id) ? $lineas->id : '' }}">
                                <div class="form-group row">
                                    <label for="name" class="col">{{ __('Nombre') }}</label>

                                    <div class="col-md-10 mb-10">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name" required 
                                            autocomplete="name" autofocus
                                            value="{{ isset($lineas->name) ? $lineas->name : '' }}"
                                            required autocomplete="name" >

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="description" class="col  ">{{ 'Descripción' }}</label>

                                    <div class="col-md-10">
                                        <textarea id="description" type="text"
                                            class="form-control @error('description') is-invalid @enderror"
                                            name="description" autocomplete="description"
                                            value="{{ isset($lineas->description) ? $lineas->description : '' }}"
                                             required autocomplete="description">
                                             {{ isset($lineas->description) ? $lineas->description : '' }}</textarea>

                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ isset($lineas->id) ? 'Actualizar' : 'Registrar' }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div>


                    </div>

                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Lineas de Investigación</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Acciones</th>


                            </tr>
                        </thead>
                        <tbody style="color:grey;">
                            @foreach ($linea as $l)
                                <tr>
                                    <th scope="row">
                                        <span class="d-inline-block text-truncate text-shadow" style="max-width: 200px; min-width: 5;">
                                            {{ $l->id }}
                                        </span>
                                    </th>
                                    <th scope="row">
                                        <span class="d-inline-block text-truncate text-shadow" style="max-width: 200px; min-width: 5;">
                                            {{ $l->name }}
                                        </span>
                                    </th>
                                    <th scope="row">
                                        <span class="d-inline-block text-truncate" style="max-width: 180px; min-width: 5;">
                                            {{ $l->description }}
                                        </span>
                                    </th>


                                    <td>
                                        <a href="{{ route('editLineas', $l->id) }}" class="btn btn-sm btn-warning"
                                            style="width: 35px; font-size: 18px;">
                                            <i class="far fa-edit"></i>
                                        </a>

                                        {{-- <a href="{{ route('deletLineas', $l->id) }}"
                                            class="btn btn-sm btn-danger" style="width: 35px; font-size: 18px;">
                                            <i class="fas fa-trash-alt"></i>
                                        </a> --}}
                                        <a href="{{ route('deletLineas', $l->id) }}" class="btn btn-sm btn-danger"
                                            style="width: 35px; font-size: 18px;"
                                            onclick="return confirm('Deseas eliminar la Linea?');"><i
                                                class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
