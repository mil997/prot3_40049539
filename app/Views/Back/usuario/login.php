<!-- Formulario de Inicio de Sesión -->

<div class="container text-white py-5">
  <h2>Iniciar sesión</h2>

  <!-- Mensaje de error -->
  <?php if(session()->getFlashdata('msg')): ?>
    <div class="alert alert-warning">
      <?= session()->getFlashdata('msg'); ?>
    </div>
  <?php endif; ?>

  <!-- Inicio del formulario -->
  <form method="post" action="<?= base_url('/enviarlogin') ?>">

  <!-- Protección CSRF -->
    <?= csrf_field(); ?>

    <div class="mb-3">
      <label for="correo" class="form-label">Correo electrónico</label>
      <input type="email" class="form-control" id="correo" name="email" required>
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="password" name="pass" required>
    </div>

    <input type="submit" value="Ingresar" class="btn btn-success">
    <a href="<?= base_url('login'); ?>" class="btn btn-danger">Cancelar</a>

    <div class="mt-3">
      <span>¿Aún no se registró? <a href="<?= base_url('/registro'); ?>">Registrarse aquí</a></span>
    </div>

  </form>
</div>

<!-- Fin del formulario -->