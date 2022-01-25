@extends('layouts.alum')
<title>Mi tema</title>
@section('content')




<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Mi tema</h6>
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
                                        {{ $t->propuesta->linea->name }}</a>
                                        <br>
                                        tutor: 
                                        {{ $t->propuesta->user->name }}
                                        <br>
                                        Contacto del tutor: 
                                        <a href="">{{ $t->propuesta->user->celular }}

                                     
                                     


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
