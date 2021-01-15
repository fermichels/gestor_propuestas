@extends('layouts.app2')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header">{{ __('Registrar Usuario') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <input type="hidden" name="id" id="id" value="{{ isset($user->id) ? $user->id : '' }}">
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name', $user->name) }}" required autocomplete="name"
                                        autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="username"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Usuario') }}</label>

                                <div class="col-md-6">
                                    <input id="username" type="text"
                                        class="form-control @error('username') is-invalid @enderror" name="username"
                                        value="{{ old('username', $user->username) }}" required autocomplete="username"
                                        autofocus>

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email', $user->email) }}" autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Tipo usuario</label>

                                <div class="col-md-6">
                                    <select name="tipo" id="tipo" class="form-control @error('tipo') is-invalid @enderror"
                                        value="{{ old('tipo', $user->tipo) }}" required>
                                        <option value="">Selecciones un tipo de usuario</option>
                                        <option value="TUTO" {{ $user->tipo && $user->tipo == 'TUTO' ? 'selected' : '' }}>
                                            Tutor</option>
                                        <option value="ALUM" {{ $user->tipo && $user->tipo == 'ALUM' ? 'selected' : '' }}>
                                            Alumno</option>
                                        <option value="ROOT" {{ $user->tipo && $user->tipo == 'ROOT' ? 'selected' : '' }}>
                                            Admin</option>
                                    </select>
                                    @error('tipo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ isset($user->id) ? 'Actualizar' : 'Registrar' }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>

        <div class="container-fluid">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Usuarios</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Username</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">E-Mail</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody style="color: grey">
                            @foreach ($users as $u)
                                <tr>
                                    <th scope="row">
                                        <span class="d-inline-block text-truncate" style="max-width: 200px; min-width: 5;">
                                            {{ $u->name }}
                                        </span>
                                    </th>
                                    <th scope="row">{{ $u->username }}</th>
                                    <th scope="row">{{ $u->tipo }}</th>
                                    <th scope="row">
                                        <span class="d-inline-block text-truncate" style="max-width: 180px; min-width: 5;">
                                            {{ $u->email }}
                                        </span>
                                    </th>


                                    <td>
                                        <a href="{{ route('editUser', $u->id) }}" class="btn btn-sm btn-warning"
                                            style="width: 55px; font-size: 10px;">
                                            Editar
                                        </a>
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
