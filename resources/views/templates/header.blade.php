<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Favicons -->
    <link href="{{ asset('img/OXILIVE.ico') }}" rel="icon">
    <link href="{{ asset('img/OXILIVE.ico') }}" rel="apple-touch-icon">
    <!-- Bootstrap 5.3.2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- SweetAlert2 11.10.1 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.1/dist/sweetalert2.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Bootstrap Icons 1.11.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- Datatables 1.13.7 CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>OXILIVE S.A de C.V</title>
</head>
<?php $_SESSION['puesto'] = 1; ?>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ route('main') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('img/LOGO_OXILIVE.jpg') }}" alt="">
                <span class="d-none d-lg-block">OXILIVE</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->
        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <!-- aqui empiesan las secciones paracada nivel de usuario -->
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <img src="" id="fot" alt="Foto de perfil" style="width: 40px; height: 40px;"
                            class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">

                        </span>
                    </a> <!-- End Profile Iamge Icon -->
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <span>

                            </span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="">
                                <i class="bi bi-gear"></i>
                                <span>Configuración</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#"
                                onclick="cerrar(this.value)">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Cerrar sesión</span>
                            </a>
                        </li>
                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->
            </ul>
        </nav><!-- End Icons Navigation -->
    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <!-- Módulo Dashboard -->
            <x-list-item icon="bi bi-grid" name="Dashboard" route="main" isTab="n" />

            @switch ($_SESSION['puesto'])
                //Administrador
                @case(1)
                    @include('templates.navbar-items.bancos')
                    @include('templates.navbar-items.admin')
                @break

                @case(2)
                    @include('templates.navbar-items.capital-humano')
                @break

                @case(3)
                    @include('templates.navbar-items.sistemas')
                @break

                @case(4)
                    @include('templates.navbar-items.almacen')
                @break
            @endswitch
        </ul>
    </aside>
    <!-- JQuery 3.7.1 JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        function mostrarImagen(event) {
            var input = event.target;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var fot = document.getElementById("fot");
                    fot.src = e.target.result;
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script>
        function cerrar(codigo) {
            Swal.fire({
                title: '¿Estas seguro de cerrar sesión?',
                cancelButtonText: 'Cancelar',
                icon: 'warning',
                buttons: true,
                showCancelButton: true,
                dangerMode: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Cerrar sesión',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    cerr(codigo)
                }
            })
        }

        function cerr(codigo) {
            parametros = {
                id: codigo
            };
            $.ajax({
                data: parametros,
                url: "",
                type: "POST",
                beforeSend: function() {},
                success: function() {
                    Swal.fire({
                        icon: 'success',
                        title: 'Se cerro la sesión',
                        showConfirmButton: false,
                        timer: 1500,
                    }).then(function() {
                        window.location = '';
                    });
                },
            });
        }
    </script>
    <script>
        var verMasBtn = document.getElementById('verMasBtn');
        verMasBtn.addEventListener('click', function(event) {
            event.preventDefault();
            var notificacionesOcultas = document.querySelectorAll('.notification-item.hidden');
            notificacionesOcultas.forEach(function(item) {
                item.classList.remove('hidden');
            });
            verMasBtn.style.display = 'none'; // Oculta el botón "Ver más"
        });
    </script>
    <!-- Datatables 1.13.7 JS -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <!-- Template Main JS File -->
    <script defer src="{{ asset('js/main.js') }}"></script>
    <!-- Bootstrap 5.3.2 JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!-- SweetAlert2 11.10.1 JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.1/dist/sweetalert2.all.min.js"></script>
    <!--APEXCHARTS.COM-->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
