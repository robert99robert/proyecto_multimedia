<?php
$session=session();
?>
<nav class="navbar navbar-expand-xxl navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost/comparador2/public/">Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item dropdown">
      <?php if($session->get('id')!=null and $session->get('tipo_usuario')=='A'): ?> 
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ingreso de Datos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="http://localhost/comparador2/public/crearEquipo">Equipos</a></li>
            <li><a class="dropdown-item" href="http://localhost/comparador2/public/crearRam">R.A.M.s</a></li>
            <li><a class="dropdown-item" href="http://localhost/comparador2/public/crearProcesador">Procesadores</a></li>
            <li><a class="dropdown-item" href="http://localhost/comparador2/public/crearJuego">Juegos</a></li>
          </ul>
      <?php endif ?>
        </li>
        <li class="nav-item dropdown">
        <?php if($session->get('id')!=null and $session->get('tipo_usuario')=='A'):?>
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Lista de Datos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="http://localhost/comparador2/public/listarEquipos">Equipos</a></li>
            <li><a class="dropdown-item" href="http://localhost/comparador2/public/listarRams">R.A.M.s</a></li>
            <li><a class="dropdown-item" href="http://localhost/comparador2/public/listarProcesadores">Procesadores</a></li>
            <li><a class="dropdown-item" href="http://localhost/comparador2/public/listarUsuarios">Usuarios</a></li>
            <li><a class="dropdown-item" href="http://localhost/comparador2/public/listarJuegos">Juegos</a></li>
          </ul>
        <?php endif ?>
        </li>
        <li class="nav-item dropdown" style="align:right">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            #$#
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="http://localhost/comparador2/public/generarQR">QR</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                </ul>
            </li>
            <li><a class="dropdown-item" href="http://localhost/comparador2/public/verPerfil">Perfil</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                </ul>
            </li>
          </ul>
        </li>
      </ul>
      
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
      <?php if($session->get('id')==null): ?>
        <button class="btn btn-warning" type="button"><a href="http://localhost/comparador2/public/creacionSesion">Regístrate</a></button>
        <button class="btn btn-warning" type="button"><a href="http://localhost/comparador2/public/inicioSesion">Ingresa</a></button>
      <?php else: ?>  
        <button class="btn btn-warning" type="button"><a href="http://localhost/comparador2/public/perfil"> <?php echo "Hola ".$session->get('name') ?> </a></button>
        <button class="btn btn-danger" type="button"><a href="http://localhost/comparador2/public/formularioCierreSesion">Cerrar sesión</a></button>
      <?php endif ?>
      </form>
    </div>

  </div>
</nav>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="position: absolute; width:1110px; height:100px" >
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://img.pccomponentes.com/pcblog/1664488800000/cabecera-comparadores.png" class="d-block w-100" alt="..." width="75" height="70">
    </div>
    <div class="carousel-item">
      <img src="https://c.wallhere.com/photos/97/48/video_games_Assassin's_Creed_Middle_earth_Shadow_of_Mordor_collage_Titanfall-162783.png!d" class="d-block w-100" alt="..." width="75" height="70">
    </div>
    <div class="carousel-item">
      <img src="https://c.wallhere.com/photos/4d/61/Fallout_collage_video_games-201516.jpg!d" class="d-block w-100" alt="..." width="75" height="70">
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>