@extends('layouts.app2')
@section('content')

    <div class="container-fluid">
        <h1 class="mt-4">Área Personal</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Área Personal/Inicio</li>
        </ol>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </nav>
    <main>
        <!-- Content  -->
        <div class="navbar navbar-expand-lg navbar-light bg-light">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4 border-color1">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class=" font-weight-bold text-uppercase color1">
                                    Propuestas</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">45</div>
                            </div>
                            <div class="icon-card">
                                <i class="far fa-file-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4 border-color2 ">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class=" font-weight-bold text-uppercase color2">
                                    Líneas</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">150</div>
                            </div>
                            <div class="icon-card">
                                <i class="far fa-file-pdf"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4 border-color3">
                <div class="card border-left-success2 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class=" font-weight-bold text-uppercase color3">
                                    Usuarios</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">50</div>
                            </div>
                            <div class="icon-card">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>

    </main>

    @endsection
