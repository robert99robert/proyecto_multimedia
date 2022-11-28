<?php
$session=session();
?>
<nav class="navbar navbar-expand-xxl navbar-light bg-light">
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
            <li><a class="dropdown-item" href="http://localhost/comparador2/public/generarQR">###</a>
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
        <button class="btn btn-outline-success" type="submit"><a href="http://localhost/comparador2/public/creacionSesion">Regístrate</a></button>
        <button class="btn btn-outline-success" type="submit"><a href="http://localhost/comparador2/public/inicioSesion">Ingresa</a></button>
      <?php else: ?>  
        <button class="btn btn-outline-success" type="submit"><a href="http://localhost/comparador2/public/perfil"> <?php echo "Hola ".$session->get('name') ?> </a></button>
        <button class="btn btn-outline-success" type="submit"><a href="http://localhost/comparador2/public/formularioCierreSesion">Cerrar sesión</a></button>
      <?php endif ?>
      </form>
    </div>

  </div>
</nav>