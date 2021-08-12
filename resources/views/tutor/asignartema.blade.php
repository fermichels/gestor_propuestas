@extends('layouts.tuto')

@section('content')

    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
        <div class="row justify-content">
            <div class="container-fluid">
                <div class="card">

                    <div class="card-header">{{ __('asignartema') }}</div>

                    <div class="card-body col-md-11">
                        @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                        <form method="POST" action="{{ route('asignartema') }}">
                            @csrf


                            <input type="hidden" name="user_id" id="user_id" value="{{ $solicitud->user->id }}">
                            <input type="hidden" name="solicitud_id" id="solicitud_id" value="{{ $solicitud->id }}">
                            <div class=" form-group row">
                                <label for="user_id"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Alumno') }}</label>

                                <div class="col-md-6">
                                    <input id="user" type="text" disabled='disabled'
                                        class="form-control @error('user') is-invalid @enderror" name="user" required
                                        autocomplete="user" autofocus
                                        value="{{ isset($solicitud->user->name) ? $solicitud->user->name : '' }}" required
                                        autocomplete="user">

                                    @error('user')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <input type="hidden" name="user_id_2" id="user_id_2" value="{{ $solicitud->user_id_2 }}">
                            <div class=" form-group row">
                                <label for="user_id_2"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Alumno 2') }}</label>

                                <div class="col-md-6">
                                    <input id="user" type="text" disabled='disabled'
                                        class="form-control @error('user') is-invalid @enderror" name="user" required
                                        autocomplete="user" autofocus
                                        value="{{ isset($solicitud->user_id_2) ? $solicitud->user_id_2 : '' }}" required
                                        autocomplete="user">

                                    @error('user')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <input type="hidden" name="propuesta_id" id="propuesta_id"
                                value="{{ $solicitud->propuesta->id }}">
                            <div class=" form-group row">
                                <label for="propuesta_id"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Propuesta') }}</label>

                                <div class="col-md-6">
                                    <input id="propuesta" type="text" disabled='disabled'
                                        class="form-control @error('propuesta') is-invalid @enderror" name="propuesta"
                                        required autocomplete="propuesta" autofocus
                                        value="{{ isset($solicitud->propuesta->titulo) ? $solicitud->propuesta->titulo : '' }}"
                                        required autocomplete="propuesta">

                                    @error('propuesta')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>



                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4 " >
                                    <button type="submit" class="btn btn-primary" >
                                        {{ isset($tema->id) ?: 'Asignar Tema' }}
                                    </button>
                                </div>
                            </div>


                        </form>



                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
