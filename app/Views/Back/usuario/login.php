<!-- Formulario de Registro -->

<div class="container py-5">
  <h2>Iniciar sesion</h2>
  <form action="procesar_registro.php" method="POST">
    <div class="mb-3">
      <label for="correo" class="form-label">Correo electrónico</label>
      <input type="email" class="form-control" id="correo" name="correo" required>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <button type="submit" class="btn btn-success">Ingresar</button>
    <button type="button" class="btn btn-secondary">Cancelar</button>
    <div class="container py-4 p-0">
      <br"><span">¿Aún no se registró? <a href="<?php echo base_url('/registro');?>">Registrarse aquí</a></span>
    </div>
  </form>
</div>

<!-- Fin del formulario de Registro -->