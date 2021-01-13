<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Área Personal</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">GESTORTFG</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
       
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="/config">Configuración</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/">Salir</a>
                </div>
            </li>
        </ul>
    </nav>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Personal</div>
                        <a class="nav-link" href="/home">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Área Personal
                        </a>
                        <div class="sb-sidenav-menu-heading">Trabajos</div>
                        <a class="nav-link" href="/trealizados">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Trabajos Realizados
                        </a>
                        <a class="nav-link" href="/temas">
                            <div class="sb-nav-link-icon"><i class="fas fa-clipboard"></i></div>
                            Prupuestas de Temas
                        </a>
                        <div class="sb-sidenav-menu-heading">Opciones</div>
                        <a class="nav-link" href="/config">
                            <div class="sb-nav-link-icon"><i class="fas fa-cog"></i></div>
                            Configuración
                        </a>
                        <a class="nav-link" href="/">
                            <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                            Salir
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
               @yield('content')
             
           

                  
               
<!--footer Inicio -->
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
                                <a href=">https://www.facitec.edu.py/" target="_blank" class="cuerpo-footer">https://www.facitec.edu.py/</a>
                            </li>
                            <li>
                                <i class="fab fa-facebook-square "></i>
                                <a href="https://www.facebook.com/facitec.unican/" target="_blank" class="cuerpo-footer"> Facebook</a>
                            </li>
                            <li>
                                <i class="fas fa-phone-square-alt"></i>
                                <a href="tel:Mobile : +595984 942700" target="_blank" class="cuerpo-footer">Mobile : +595984
                                    942700</a>
                            </li>
                            <li>
                                <i class="far fa-envelope"></i>
                                <a href="mailto:secretaria@facitec.edu.py"
                                    target="_blank" class="cuerpo-footer" >secretaria@facitec.edu.py</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> 
            <!--footer end -->

    </div>
    


    </main>

    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
</body>

</html>
