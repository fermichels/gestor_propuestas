@extends('layouts.alum')
<title>Solicitar tema</title>
@section('content')
    <!-- Content Row  -->
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

                    <div class="card-header">{{ __('solicitartema') }}</div>

                    <div class="card-body col-md-11">
                    
                        <form method="POST" action="{{ route('solicitartema') }}">
                            @csrf



                            <input type="hidden" name="propuesta_id" value="{{ $propuestas->id }}">

                            <input type="hidden" name="tutor_id" value="{{ $propuestas->user_id }}">


                            <div class=" form-group row">
                                <label for="descripcion"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>

                                <div class="col-md-6">
                                    <textarea id="descripcion" type="text"
                                        class="form-control @error('descripcion') is-invalid @enderror" name="descripcion"
                                        autocomplete="descripcion"
                                        value="{{ isset($solicitar->description) ? $solicitar->descripcion : '' }}"
                                        required autocomplete="descripcion">
                                                                {{ isset($solicitar->descripcion) ? $solicitar->descripcion : '' }}</textarea>

                                    @error('descripcion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="chkPassport"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Trabajar em Duo?') }}
                                    <input type="checkbox" id="chkPassport" />
                                </label>






                            </div>
                            <div id="dvPassport" style="display: none" class="col-md-6 offset-md-4">
                                {{ __('Selecione con quien trabajarás:') }}
                                <select name="user_id_2" id="user_id_2"
                                    class="form-control @error('user_id_2') is-invalid @enderror">
                                    <option value="{{ isset($user->id) ? $user->name : '' }}"></option>
                                    @foreach ($user as $u)
                                        <option value="{{ $u->id }}">{{ $u->name }}</option>
                                    @endforeach
                                   
                                </select>






                            </div>
                            <br/>




                            <div>



                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ isset($solicitar->id) ? 'Actualizar' : 'Registrar' }}
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </form>



                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
