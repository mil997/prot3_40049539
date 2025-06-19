<!-- Barra de navegación -->

<?php
$session = session();
$nombre = $session->get('nombre');
$perfil = $session->get('perfil_id');
?>

<nav class="navbar navbar-expand-lg bg-warning">
  <div class="container-fluid">
  <a class="navbar-brand me-auto barra" href="<?php echo base_url('principal') ?>">
      <img src="<?php echo base_url('assets/img/logopagina.png') ?>" alt="logo" width="75" height="30" class="img-fluid"/>
  </a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

  <?php if ($perfil == 1): ?>
    <div class="btn btn-secondary active btnUser btn-sm">
      <a class="text-white text-decoration-none" href="#">ADMIN: <?php echo $nombre; ?></a>
    </div>
  <?php elseif ($perfil == 2): ?>
    <div class="btn btn-secondary active btnUser btn-sm">
      <a class="text-white text-decoration-none" href="#">CLIENTE: <?php echo $nombre; ?></a>
    </div>
  <?php endif; ?>

<div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav me-auto mb-2 mb-lg-0">

    <!-- Común para todos -->

  <li class="nav-item">
    <a class="nav-link fw-bold text-black" href="quienes_somos">Quiénes Somos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link fw-bold text-black" href="acercade">Acerca de</a>
  </li>

    <!-- Vistas solo para el admin -->

      <?php if ($perfil == 1): ?>
  <li class="nav-item">
    <a class="nav-link fw-bold text-black" href="panel_admin">Panel Admin</a>
  </li>
  <li class="nav-item">
    <a class="nav-link fw-bold text-black" href="usuarios">Usuarios</a>
  </li>
  <li class="nav-item">
    <a class="nav-link fw-bold text-black" href="reportes">Reportes</a>
  </li>
          <?php endif; ?>

    <!-- No logueado -->

          <?php if (!$perfil): ?>
    <li class="nav-item">
      <a class="nav-link fw-bold text-black" href="registro">Registrarse</a>
    </li>
    <li class="nav-item">
      <a class="nav-link fw-bold text-black" href="login">Login</a>
    </li>
          <?php else: ?>

    <!-- Todos los usuarios logueados -->

    <li class="nav-item">
       <a class="nav-link fw-bold text-black" href="<?php echo base_url('/logout'); ?>">Cerrar Sesión</a>
    </li>
          <?php endif; ?>
     </ul>

      <!-- Buscador para todos -->

      <form class="d-flex" role="search">
        <input class="form-control me-2 fw-bold" type="search" placeholder="Buscar" aria-label="Search"/>
        <button class="btn btn-outline-success fw-bold" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>

<!-- Fin de la Barra de navegación -->