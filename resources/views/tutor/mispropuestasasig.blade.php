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
                        <a class="nav-link" href="/propuestas"><i class="far fa-bell"></i> Crear/Modificar Propuesta<span
                                class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="/verpropuestas"><i class="fas fa-home"></i> Propuestas<span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/mispropuestasasig"><i class="fas fa-home"></i> Mis Propuestas
                            Asignadas<span class="sr-only">(current)</span></a>
                    </li>

                </ul>
            </div>
        </nav>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Mi temas Asignados</h6>
        </div>
    
        <div class="card-body">
            <div class="">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <th scope="col" style="text-align: right">A-Z</th>

                        </tr>
                    </thead>
                    <tbody style="color: grey">

                        @foreach ($tema as $t)
                            <tr>
                                <th scope="row">
                                    <div class="card">
                                        <div class="card-body">
                                            <h2 class="card-title">{{ $t->propuesta->titulo }}</h2>
                                            <p class="card-text">{{ $t->propuesta->descripcion }}</p>


                                        </div>
                                        <div class="footer-post">
                                            Categoria:
                                            <a>{{ $t->propuesta->linea->name }}</a>

                                            <br> Alumno:
                                            {{ $t->user->name }}







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



@endsection
