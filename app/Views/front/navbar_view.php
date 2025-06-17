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

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <?php if(session()->perfil_id == 1): ?>
      <div class="btn btn-secondary active btnUser btn-sm">
        <a href="">ADMIN: <?php echo session('nombre'); ?> </a>
      </div>
    <?php endif; ?>

    <a class="navbar-brand" href="#"></a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link fw-bold text-black" href="quienes_somos">Quiénes Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold text-black" href="acercade">Acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold text-black" href="registro">Registrarse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold text-black" href="login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold text-black" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesión</a>
        </li>
      </ul>
    </div>

    <?php if(session()->perfil_id == 2): ?>
      <div class="btn btn-secondary active btnUser btn-sm">
        <a href="">CLIENTE: <?php echo session('nombre'); ?> </a>
      </div>
    <?php endif; ?>

    <!-- Navbar para los clientes logueados -->

    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link fw-bold text-black" href="quienes_somos">Quiénes Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold text-black" href="acercade">Acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold text-black" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesión</a>
        </li>
      </ul>
    </div>
    <form class="d-flex" role="search">
        <input class="form-control me-2 fw-bold" type="search" placeholder="Buscar" aria-label="Search"/>
        <button class="btn btn-outline-success fw-bold" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>
<!-- Fin de la barra de navegación -->