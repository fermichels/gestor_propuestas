<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Gestor de Trabajos Finales</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
</head>

<body>
    <div class="footer-contenedor">
        <div id="app ">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    
                   

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <a class="navbar" href="{{ url('/') }}">
                            {{ config('GESTOR TFG', 'Gestor de trabajos finales de grado') }}
                        </a>
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest


                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="py-4">
                @yield('content')
                <div id="footer-facitec">
                    <div class="footer-contenedor">
                        <div class="footer-contenido">
                            <div class="footer-titulo">
                                <h3 class="titulo-header">Mantente en contacto</h3>
                                <div class="titulo-header2">
                                    <h4>Facultad de Ciencias y Tecnología - Universidad Nacional de Canindeyú
                                    </h4>
                                </div>
                                <ul class="cuerpo-footer">
                                    <li>
                                        <i class="fas fa-globe"></i>
                                        <a href=">https://www.facitec.edu.py/" target="_blank"
                                            class="cuerpo-footer">https://www.facitec.edu.py/</a>
                                    </li>
                                    <li>
                                        <i class="fab fa-facebook-square "></i>
                                        <a href="https://www.facebook.com/facitec.unican/" target="_blank"
                                            class="cuerpo-footer"> Facebook</a>
                                    </li>
                                    <li>
                                        <i class="fas fa-phone-square-alt"></i>
                                        <a href="tel:Mobile : +595984 942700" target="_blank"
                                            class="cuerpo-footer">Mobile : +595984
                                            942700</a>
                                    </li>
                                    <li>
                                        <i class="far fa-envelope"></i>
                                        <a href="mailto:secretaria@facitec.edu.py" target="_blank"
                                            class="cuerpo-footer">secretaria@facitec.edu.py</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

    </div>
</body>

</html>
