<!-- Formulario de registro -->

<div class="container py-5">
  <h2>Formulario de Registro</h2>
  <form action="procesar_registro.php" method="POST">
    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre" required autocomplete="name">
    </div>
        <div class="mb-3">
      <label for="nombre" class="form-label">Apellido</label>
      <input type="text" class="form-control" id="nombre" name="nombre" required autocomplete="name">
    </div>
    <div class="mb-3">
      <label for="correo" class="form-label">Correo electrónico</label>
      <input type="email" class="form-control" id="correo" name="correo" required autocomplete="email">
    </div>
        <div class="mb-3">
      <label for="nombre" class="form-label">Usuario</label>
      <input type="text" class="form-control" id="nombre" name="nombre" required autocomplete="name">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="password" name="password" required autocomplete="new-password" minlength="6">
    </div>
    <div class="d-flex gap-2">
      <button type="submit" class="btn btn-success">Registrarme</button>
      <button type="button" class="btn btn-secondary" onclick="window.location.href='index.html'">Cancelar</button>
    </div>
  </form>
</div>

<!-- Fin del formulario -->