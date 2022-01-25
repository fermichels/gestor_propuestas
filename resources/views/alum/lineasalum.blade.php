@extends('layouts.alum')
<title>Lineas de investigación</title>
@section('content')
    <main>
        <div class="container-fluid">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item " style="font-size:1.2em">Seleccione una linea de Investigación!</li>
            </ol>
        </div>
        <!-- Content  * -->

       
        <div class="container-fluid">

          
            <div class="row">
                @foreach ($lineas as $l)

                    <div class="col-xl-3 col-md-6">
                        <div class="card  text-dark ">
                            <div class="card-body">{{ $l->description }}</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                
                                <a class="small  stretched-link" href="{{ route('alum/lineasalum', $l->id) }}">{{ $l->name }}</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @endsection
