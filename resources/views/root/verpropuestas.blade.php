@extends('layouts.app2')
@section('content')

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
                                        <h2 class="card-title ">{{ $p->titulo }}</h2>
                                        <p class="card-text">{{ $p->descripcion }}</p>
                                        <a href="{{ route('editPropuesta', $p->id) }}" class="btn btn-sm btn-warning"
                                            style="width: 35px; font-size: 18px;">
                                            <i class="far fa-edit"></i>
                                        </a>
                                        <a href="{{ route('deletPropuesta', $p->id) }}"
                                            class="btn btn-primaryr"
                                            onclick="return confirm('Deseas eliminar la Propuesta?');"><i
                                                class="fas fa-trash-alt"></i></a>
                                    </div>
                                    <div class="footer-post">
                                        Categoria:
                                        <a href="#">{{ $p->linea->name }}</a>
                                        Posted on {{ $p->created_at->format('d/m/Y') }}
                                        
                                            <a class="right-post">{{ $p->estado }} </a>
                                     
                                        
                                    </div>
                                    
                                </div>
                      
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection