@extends('layouts.tuto')
@section('content')
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </nav>
        <div>
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Solicitudes Recibidas</h6>
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

                                @foreach ($solicitud as $s)

                                    <tr>
                                        <th scope="row">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h2 class="card-title">{{ $s->propuesta->titulo }}</h2>
                                                    <p class="card-text">{{ $s->descripcion }}</p>


                                                </div>
                                                <div class="footer-post">
                                                    Categoria:
                                                    Posted on {{ $s->propuesta->created_at->format('d/m/Y') }} Por:
                                                    {{ $s->propuesta->user->name }}
                                                     Solicitado por: {{ $s->user->name }}

                                                    <a href="" class="btn btn-primary right-post"
                                                        style="font-size: 18px;">Asignar Tema
                                                        <i class="far fa-edit"></i>
                                                    </a>
                                                   

                                                    <a class="right-post">&ensp;{{ $s->propuesta->estado }} &ensp;</a>


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
