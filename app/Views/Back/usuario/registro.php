<!-- Formulario de registro -->

<?php $validation = \Config\Services::validation(); ?>

<div class="container text-white mb-3 py-3">
  <div class="row">
    <div class="col">

<form method="post" action="<?= base_url('enviar-form') ?>">
  <?= csrf_field(); ?>

  <!-- Mensajes -->

  <?php if (session()->getFlashdata('fail')): ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
  <?php endif ?>
  <?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
  <?php endif ?>

  <!-- Nombre -->

  <div class="mb-3">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" required>
    <?php if($validation->getError('nombre')): ?>
      <div class="alert alert-danger"><?= $validation->getError('nombre') ?></div>
    <?php endif ?>
  </div>

  <!-- Apellido -->

  <div class="mb-3">
    <label for="apellido">Apellido</label>
    <input type="text" class="form-control" id="apellido" name="apellido" required>
    <?php if($validation->getError('apellido')): ?>
      <div class="alert alert-danger"><?= $validation->getError('apellido') ?></div>
    <?php endif ?>
  </div>

  <!-- Email -->

  <div class="mb-3">
    <label for="email">Correo electrónico</label>
    <input type="email" class="form-control" id="email" name="email" required>
    <?php if($validation->getError('email')): ?>
      <div class="alert alert-danger"><?= $validation->getError('email') ?></div>
    <?php endif ?>
  </div>

  <!-- Usuario -->

  <div class="mb-3">
    <label for="usuario">Usuario</label>
    <input type="text" class="form-control" id="usuario" name="usuario" required>
    <?php if($validation->getError('usuario')): ?>
      <div class="alert alert-danger"><?= $validation->getError('usuario') ?></div>
    <?php endif ?>
  </div>

  <!-- Contraseña -->

  <div class="mb-3">
    <label for="pass">Contraseña</label>
    <input type="password" class="form-control" id="pass" name="pass" required>
    <?php if($validation->getError('pass')): ?>
      <div class="alert alert-danger"><?= $validation->getError('pass') ?></div>
    <?php endif ?>
  </div>

  <input type="submit" value="Guardar" class="btn btn-success">
  <input type="reset" value="Cancelar" class="btn btn-danger">

     </form>
    </div>
  </div>
</div>

<!-- Fin del formulario -->