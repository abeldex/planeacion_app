<!DOCTYPE html>
<html lang="es">
  <head>
    <base href="http://148.227.28.120/planeacion_app/">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="TheAdmin - Responsive admin and web application ui kit">
    <meta name="keywords" content="admin, dashboard, web app, sass, ui kit, ui framework, bootstrap">

    <title>Sistema de Planeacion | FACITE</title>

    <!-- Styles -->
    <link href="assets/css/core.min.css" rel="stylesheet">
    <link href="assets/css/app.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/uas.png">
    <link rel="icon" href="assets/img/uas.png">
  </head>

  <body>

    <!-- Preloader  -->
    <div class="preloader">
      <div class="spinner-dots">
        <span class="dot1"></span>
        <span class="dot2"></span>
        <span class="dot3"></span>
      </div>
    </div>
 
    <!-- Sidebar -->
    <aside class="sidebar sidebar-expand-lg sidebar-light sidebar-sm sidebar-color-info">

      <header class="sidebar-header bg-info">
        <span class="logo">
          <a href="index.php"><img src="assets/img/logo-light.png" alt="logo"></a>
        </span>
        <span class="sidebar-toggle-fold"></span>
      </header>

      <nav class="sidebar-navigation">
        <ul class="menu menu-sm menu-bordery">

          <li class="menu-item active">
            <a class="menu-link" href="../planeacion_app/">
              <span class="icon ti-home"></span>
              <span class="title">Inicio</span>
            </a>
          </li>

          <li class="menu-item">
            <a class="menu-link" href="metas/">
              <span class="icon ti-receipt"></span>
              <span class="title">Metas POA</span>
            </a>
          </li>   
          <li class="menu-item">
            <a class="menu-link" href="actividades/">
              <span class="icon ti-calendar"></span>
              <span class="title">Actividades</span>
            </a>
          </li>          

          <li class="menu-item">
            <a class="menu-link" href="departamento/">
              <span class="icon ti-settings"></span>
              <span class="title">Departamento</span>
            </a>
          </li>

        </ul>
      </nav>

    </aside>
    <!-- END Sidebar -->



    <!-- Topbar -->
    <header class="topbar">
      <div class="topbar-left">
        <span class="topbar-btn sidebar-toggler"><i>&#9776;</i></span>
        

        <ul class="topbar-btns">

        </ul>
      </div>

      <div class="topbar-right">

        <ul class="topbar-btns">
          <li class="dropdown">
            <span class="topbar-btn" data-toggle="dropdown"><img class="avatar" src="assets/img/uas.png" alt="..."></span>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="#"><i class="ti-user"></i> Perfil</a>
              <a class="dropdown-item" href="#"><i class="ti-settings"></i> Configuracion</a>
              <a class="dropdown-item" href="#"><i class="ti-help"></i> Ayuda</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"><i class="ti-power-off"></i> Salir</a>
            </div>
          </li>
        </ul>

       

      </div>
    </header>
    <!-- END Topbar -->