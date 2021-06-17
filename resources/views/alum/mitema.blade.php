@extends('layouts.alum')
@section('content')
    <main>
        <!-- Content Row  -->
        <div class="container-fluid">


            <div class="row">
                @foreach ($lineas as $l)

                    <div class="col-xl-3 col-md-6">
                        <div class="card  text-dark ">
                            <div class="card-body">{{ $l->description }}</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                
                                <a class="small text-dark stretched-link" href="{{ route('alum/lineasalum', $l->id) }}">{{ $l->name }}</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @endsection
