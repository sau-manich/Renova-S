<?php
require_once '../../Controlador/UsuarioControlador.php';
$controlador = new Controlador();

// Procesar envío del formulario de creación
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_POST['id'])) {
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $contrasena = isset($_POST['contrasena']) ? $_POST['contrasena'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $rol = isset($_POST['rol']) ? $_POST['rol'] : '';

    $resultado = $controlador->crearRegistro($nombre, $contrasena, $email, $rol);

    if ($resultado) {
        // echo "Registro creado exitosamente.";
    } else {
        // echo "Error al crear el registro.";
    }
}

// Procesar envío del formulario de edición
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $idEditar = $_POST['id'];
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $contrasena = isset($_POST['contrasena']) ? $_POST['contrasena'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $rol = isset($_POST['rol']) ? $_POST['rol'] : '';

    $resultado = $controlador->editarRegistro($idEditar, $nombre, $contrasena, $email, $rol);

    if ($resultado) {
        echo "Registro editado exitosamente.";
    } else {
        echo "Error al editar el registro.";
    }
}

// Obtener registros
$registros = $controlador->obtenerRegistros();

// Procesar acciones de editar y eliminar
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['editar'])) {
        $idEditar = $_GET['editar'];
        $registroEditar = $controlador->obtenerRegistro($idEditar);
        if ($registroEditar) {
            // Mostrar formulario de edición
            echo '<h2>Editar Registro</h2>';
            echo '<form method="POST" action="">';
            echo '<input type="hidden" name="id" value="' . $registroEditar['id'] . '">';
            echo 'Nombre: <input type="text" name="nombre" value="' . $registroEditar['nombre'] . '"><br>';
            echo 'Contraseña: <input type="password" name="contrasena" value="' . $registroEditar['contrasena'] . '"><br>';
            echo '<input type="submit" value="Editar">';
            echo '</form>';
        } else {
            echo "No se encontró el registro a editar.";
        }
    } elseif (isset($_GET['eliminar'])) {
        $idEliminar = $_GET['eliminar'];
        $resultado = $controlador->eliminarRegistro($idEliminar);
        if ($resultado) {
            // echo "Registro eliminado exitosamente.";
            header("Refresh:0; url=usuario.php"); // Redireccionar a la página actual
            exit();
        } else {
            // echo "Error al eliminar el registro.";
        }
    }
}
?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Google Analytics</title>
    <link rel="apple-touch-icon" href="../Source/app-assets/images/ico/apple-icon-120.png">
    <link rel="icon" type="image/x-icon" href="https://logos-world.net/wp-content/uploads/2021/02/Google-Analytics-Emblem.png" />
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../Source/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../Source/app-assets/vendors/css/extensions/swiper.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../Source/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../Source/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../Source/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../Source/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../Source/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../Source/app-assets/css/themes/semi-dark-layout.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../Source/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../Source/app-assets/css/pages/page-user-profile.css">
    <link rel="stylesheet" type="text/css" href="../Source/app-assets/css/pages/faq.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../Source/assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern dark-layout 2-columns  navbar-sticky footer-static menu-collapsed " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="dark-layout">

    <!-- BEGIN: Header-->
    <div class="header-navbar-shadow"></div>
    <nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top navbar-dark">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon bx bx-menu"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav bookmark-icons">
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html" data-toggle="tooltip" data-placement="top" title="Bandeja de entrada"><i class="ficon bx bx-envelope"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-toggle="tooltip" data-placement="top" title="Mensaje"><i class="ficon bx bx-chat"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html" data-toggle="tooltip" data-placement="top" title="Tareas"><i class="ficon bx bx-check-circle"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calendar.html" data-toggle="tooltip" data-placement="top" title="Calendario"><i class="ficon bx bx-calendar-alt"></i></a></li>
                        </ul>
                        <!-- <ul class="nav navbar-nav">
                            <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon bx bx-star warning"></i></a>
                                <div class="bookmark-input search-input">
                                    <div class="bookmark-input-icon"><i class="bx bx-search primary"></i></div>
                                    <input class="form-control input" type="text" placeholder="Explore Frest..." tabindex="0" data-search="template-search">
                                    <ul class="search-list"></ul>
                                </div>
                            </li>
                        </ul> -->
                    </div>
                    <ul class="nav navbar-nav float-right">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a></li>
                        <!-- <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon bx bx-search"></i></a>
                            <div class="search-input">
                                <div class="search-input-icon"><i class="bx bx-search primary"></i></div>
                                <input class="input" type="text" placeholder="Explore Frest..." tabindex="-1" data-search="template-search">
                                <div class="search-input-close"><i class="bx bx-x"></i></div>
                                <ul class="search-list"></ul>
                            </div>
                        </li> -->
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon bx bx-bell bx-tada bx-flip-horizontal"></i><span class="badge badge-pill badge-danger badge-up">4</span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header px-1 py-75 d-flex justify-content-between"><span class="notification-title">4 nuevas notificaciones</span><span class="text-bold-400 cursor-pointer">Marcar todo como leido</span></div>
                                </li>
                                <li class="scrollable-container media-list"><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-center">
                                            <div class="media-left pr-0">
                                                <div class="avatar mr-1 m-0"><img src="../Source/app-assets/images/portrait/small/hombre.png" alt="avatar" height="39" width="39"></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading"><span class="text-bold-500">Recordarles que en 5 minutos llega la</span> PIZZA..!! <br> Terminemos por hoy las actividades. </h6><small class="notification-text">Mar 15 12:32pm</small>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="d-flex justify-content-between read-notification cursor-pointer">
                                        <div class="media d-flex align-items-center">
                                            <div class="media-left pr-0">
                                                <div class="avatar mr-1 m-0"><img src="../Source/app-assets/images/portrait/small/mujer.png" alt="avatar" height="39" width="39"></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading"><span class="text-bold-500">Los registros ya fueron actualizados</span> <br> REVISAR</h6><small class="notification-text">Mar 15 11:15am</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between cursor-pointer">
                                        <div class="media d-flex align-items-center py-0">
                                            <div class="media-left pr-0"><img class="mr-1" src="../Source/app-assets/images/icon/sketch-mac-icon.png" alt="avatar" height="39" width="39"></div>
                                            <div class="media-body">
                                                <h6 class="media-heading"><span class="text-bold-500">Actualizacion del sistema</span></h6><small class="notification-text">MarkSIS v2.1.21 </small>
                                            </div>
                                            <div class="media-right pl-0">
                                                <div class="row border-left text-center">
                                                    <div class="col-12 px-50 py-75 border-bottom">
                                                        <h6 class="media-heading text-bold-500 mb-0">Actualizar</h6>
                                                    </div>
                                                    <div class="col-12 px-50 py-75">
                                                        <h6 class="media-heading mb-0">Posponer</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between cursor-pointer">
                                        <div class="media d-flex align-items-center">
                                            <div class="media-left pr-0">
                                                <div class="avatar bg-primary bg-lighten-5 mr-1 m-0 p-25"><span class="avatar-content text-primary font-medium-2">LD</span></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading"><span class="text-bold-500">Nuevo usuario</span> Registrado</h6><small class="notification-text">1 hrs ago</small>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item p-50 text-primary justify-content-center" href="javascript:void(0)">LEER TODAS LAS NOTIFICACIONES</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name">Scarleth Cabezas Vargas</span><span class="user-status text-muted">Lic. Fisioterapia</span></div><span><img class="round" src="../Source/app-assets/images/portrait/small/mujer.png" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right pb-0"><a class="dropdown-item" href="#"><i class="bx bx-user mr-50"></i> Editar Perfil</a><a class="dropdown-item" href="#"><i class="bx bx-envelope mr-50"></i> Mi bandeja</a><a class="dropdown-item" href="#"><i class="bx bx-check-square mr-50"></i> Tareas</a><a class="dropdown-item" href="#"><i class="bx bx-message mr-50"></i> Mensajes</a>
                                <div class="dropdown-divider mb-0"></div><a class="dropdown-item" href="../login.php"><i class="bx bx-power-off mr-50"></i> Cerrar sesión</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="#">
                    <h3 class="text-center"><img src="v2/img/baner2.png" width="175" style="margin-left: 5px;"></h3>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary" data-ticon="bx-disc"></i></a></li>
            </ul>
        </div>
        <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="#">
                        <h3 class="text-center"><img src="../Source/img/logoMenu.png" width="170" style="margin-left: 11px"></h3>
                        </a></li>
                    <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary" data-ticon="bx-disc"></i></a></li>
            </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
                <li class=" navigation-header"><span>Menu</span>
                </li>
                <li class=" nav-item"><a href="tablero.php"><i class="bx bxl-microsoft"></i><span class="menu-title">Tablero</span></a>
                </li>
                <li class=" nav-item"><a href="consulta.php"><i class="bx bxs-book-bookmark mr-50"></i><span class="menu-title">Consultas</span></a>
                </li>
                <li class=" nav-item"><a href="venta.php"><i class="bx bxs-store mr-50"></i><span class="menu-title">Ventas</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="bx bxs-id-card"></i></i><span class="menu-title">Paciente</span></a>
                    <ul class="menu-content">
                        <li><a href="paciente.php"><i class="bx bxs-user-plus"></i><span class="menu-title">Registro</span></a>
                        </li>
                        <li><a href="historial.php"><i class="bx bxs-contact"></i><span class="menu-title">Historial</span></a>
                        </li>
                        <li><a href="pago.php"><i class="bx bxs-credit-card"></i><span class="menu-title">Pagos</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span>INTERNO</span>
                </li>
                <li class=" nav-item"><a href="personal.php"><i class="bx bxs-contact"></i><span class="menu-title">Personal</span></a>
                </li>
                <li class=" nav-item"><a href="plan.php"><i class="bx bxs-component"></i><span class="menu-title">Plan / paquete</span></a>
                </li>
                <li class=" nav-item"><a href="inventario.php"><i class="bx bxs-cart"></i><span class="menu-title">Inventario</span></a>
                </li>
                <li class=" navigation-header"><span>AVANZADOS</span>
                </li>
                <li class=" nav-item"><a href="reporte.php"><i class="bx bxs-bar-chart-alt-2"></i><span class="menu-title">Reportes</span></a>
                </li>
                <li class=" nav-item"><a href="ajuste.php"><i class="bx bx-wrench"></i><span class="menu-title">Ajustes</span></a>
                </li>
                <li class=" nav-item active"><a href=""><i class="bx bxs-user-circle"></i><span class="menu-title">Usuarios</span></a>
                </li>
                <li class=" navigation-header"><span>RESPALDO</span>
                </li>
                <li class=" nav-item"><a href="respaldo.php"><i class="bx bxs-data"></i><span class="menu-title">Backup</span></a>
                </li>
            </ul>
            </ul>
        </div>
    </div>
    </div>
    <!-- END: Main Menu-->


     <!-- BEGIN: Content-->
     <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h5 class="content-header-title float-left pr-1 mb-0">Usuario</h5>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb p-0 mb-0">
                                    <li class="breadcrumb-item"><a href="tablero.php"><i class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Tablero</a>
                                    </li>
                                    <li class="breadcrumb-item active">Usuario
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="row">
                        <div class="col-md-5 col-12">
                            <section class="faq-search">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card faq-bg bg-transparent box-shadow-0 p-1 p-md-5">
                                            <div class="card-content">
                                                <div class="card-body p-0">
                                                    <h1 class="faq-title text-center mb-3">Usuario</h1>
                                                    <form method="POST" action="">
                                                        <fieldset class="faq-search-width form-group position-relative w-50 mx-auto">
                                                            <input type="text" class="form-control round form-control-lg shadow pl-2" id="nombre" name="nombre" placeholder="Ingrese su Nombre" required>
                                                        </fieldset>
                                                        <center>
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="d-inline-block mr-2 mb-1">
                                                                <fieldset>
                                                                    <div class="radio radio-success radio-glow">
                                                                        <input type="radio" id="radioGlow1" value="Administrador" name="rol" required>
                                                                        <label for="radioGlow1">Administrador</label>
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                            <li class="d-inline-block mr-2 mb-1">
                                                                <fieldset>
                                                                    <div class="radio radio-success radio-glow">
                                                                        <input type="radio" id="radioGlow2" value="Secretario" name="rol" required>
                                                                        <label for="radioGlow2">Secretario</label>
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                            <li class="d-inline-block mr-2 mb-1">
                                                                <fieldset>
                                                                    <div class="radio radio-success radio-glow">
                                                                        <input type="radio" id="radioGlow3" value="Empleado" name="rol" required>
                                                                        <label for="radioGlow3">Empleado</label>
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                        </ul>
                                                        </center>
                                                        <fieldset class="faq-search-width form-group position-relative w-50 mx-auto">
                                                            <input type="email" class="form-control round form-control-lg shadow pl-2" id="email" name="email" placeholder="Ingrese su Email" required>
                                                        </fieldset>
                                                        <fieldset class="faq-search-width form-group position-relative w-50 mx-auto">
                                                            <input type="password" class="form-control round form-control-lg shadow pl-2" id="contrasena" name="contrasena" placeholder="Ingrese su Contraseña" required>
                                                            <button class="btn btn-success round position-absolute d-none d-sm-block" type="submit"><i class="bx bxs-plus-circle"></i></button>
                                                        </fieldset>
                                                    </form>
                                                    <p class="card-text text-center mt-3 font-medium-1 text-muted">
                                                        Tambien puedes buscar en la lista..</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-md-7 col-12">
                            <div class="row">
                                <div class="col-xl-4 col-sm-6 col-12">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="row no-gutters">
                                                <div class="col-lg-8 col-12">
                                                    <div class="card-body">
                                                        <p class="card-text text-ellipsis">
                                                            ADMINISTRADOR <br> admin@gmail.com
                                                        </p>
                                                        <button type="button" class="btn btn-outline-info">
                                                            Eliminar todos
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-12">
                                                    <img src="../Source/img/credencial.png" width="140" style="margin-left:-25px; margin-top:20px">
                                                    <p style="color:white">El capitan :V</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    foreach ($registros as $registro) {
                                        echo '<div class="col-xl-4 col-sm-6 col-12">';
                                            echo '<div class="card">';
                                                echo '<div class="card-content">';
                                                    echo '<div class="row no-gutters">';
                                                        echo '<div class="col-lg-8 col-12">';
                                                            echo '<div class="card-body">';
                                                                echo '<p class="card-text text-ellipsis">'  . $registro['rol'] . '<br>'  . $registro['email'] . '</p>';
                                                                echo '<button type="button" class="btn btn-outline-danger"> <a style="color: white; text-decoration: none;" href="?eliminar=' . $registro['id'] . '">Eliminar</a> </button>';
                                                            echo '</div>';
                                                        echo '</div>';
                                                        echo '<div class="col-lg-4 col-12">';
                                                            echo '<img src="../Source/img/mujer.png" width="125" style="margin-left:-25px">';
                                                            echo '<p style="color:white">' . $registro['nombre'] . '</p>';
                                                        echo '</div>';
                                                    echo '</div>';
                                                echo '</div>';
                                            echo '</div>';
                                        echo '</div>';

                                        // echo '<tr>';
                                        // echo '<td>' . $registro['id'] . '</td>';
                                        // echo '<td>' . $registro['nombre'] . '</td>';
                                        // echo '<td>' . $registro['contrasena'] . '</td>';
                                        // echo '<td>';
                                        // echo '<a href="?editar=' . $registro['id'] . '">Editar</a>';
                                        // echo '<a href="?eliminar=' . $registro['id'] . '">Eliminar</a>';
                                        // echo '</td>';
                                        // echo '</tr>';
                                    }
                                    ?>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic Horizontal form layout section end -->
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-dark">
        <p class="clearfix mb-0"><span class="float-left d-inline-block">2023 &copy; MARKSIS</span><span class="float-right d-sm-inline-block d-none">Desarrollado por s@u!_m@n!ch</span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="bx bx-up-arrow-alt"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="../Source/app-assets/vendors/js/vendors.min.js"></script>
    <script src="../Source/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
    <script src="../Source/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
    <script src="../Source/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../Source/app-assets/vendors/js/extensions/swiper.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../Source/app-assets/js/scripts/configs/vertical-menu-dark.js"></script>
    <script src="../Source/app-assets/js/core/app-menu.js"></script>
    <script src="../Source/app-assets/js/core/app.js"></script>
    <script src="../Source/app-assets/js/scripts/components.js"></script>
    <script src="../Source/app-assets/js/scripts/footer.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../Source/app-assets/js/scripts/pages/faq.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>