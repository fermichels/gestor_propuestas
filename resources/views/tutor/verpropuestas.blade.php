@extends('layouts.tuto')
@section('content')
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/propuestas"><i class="far fa-bell"></i> Crear/Modificar Propuesta <span
                                class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="/verpropuestas"><i class="fas fa-home"></i> Propuestas <span
                                class="sr-only"></span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/mispropuestasasig" ><i class="fas fa-home"></i> Mis Propuestas Asignadas<span class="sr-only">(current)</span></a>
                      </li>


                </ul>
            </div>
        </nav>

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Propuestas de tema</h6>
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

@endsection
