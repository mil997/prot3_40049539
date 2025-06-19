<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="style.css"/>
    <script src="assets/js/bootstrap.bundle.min.js" ></script>
</head>
<body>

<!-- Formulario de registro -->

<div class="container text-white py-5">
  <h2>Formulario de Registro</h2>

<?php $validation = \Config\Services::validation(); ?>
<form method="post" action="<?php echo base_url('/enviar-form') ?>">

<!-- Genarar token, para evitar el robo de cookies -->

<?=csrf_field();?>
 <?=csrf_field();?>
 <?php if (!empty (session()->getFlashdata('fail'))):?>
  <div class="alert alert-danger"><?=session()->getFlashdata('fail');?></div>
  <?php endif?>
   <?php if (!empty (session()->getFlashdata('success'))):?>
  <div class="alert alert-danger"><?=session()->getFlashdata('success');?></div>
  <?php endif?>

    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre" required autocomplete="name">
    </div>

          <!-- error -->

        <?php if($validation->getError('nombre')) {?>
          <div class='alert alert-danger mt-2'>
            <?= $error = $validation->getError('nombre'); ?>
          </div>
        <?php }?>

    <div class="mb-3">
      <label for="nombre" class="form-label">Apellido</label>
      <input type="text" class="form-control" id="nombre" name="nombre" required autocomplete="name">
    </div>

          <!-- error -->

        <?php if($validation->getError('apellido')) {?>
          <div class='alert alert-danger mt-2'>
            <?= $error = $validation->getError('apellido'); ?>
          </div>
        <?php }?>

    <div class="mb-3">
      <label for="correo" class="form-label">Correo electrónico</label>
      <input type="email" class="form-control" id="correo" name="correo" required autocomplete="email">
    </div>

          <!-- error -->

        <?php if($validation->getError('email')) {?>
          <div class='alert alert-danger mt-2'>
            <?= $error = $validation->getError('email'); ?>
          </div>
        <?php }?>

    <div class="mb-3">
      <label for="nombre" class="form-label">Usuario</label>
      <input type="text" class="form-control" id="nombre" name="nombre" required autocomplete="name">
    </div>

          <!-- error -->

        <?php if($validation->getError('usuario')) {?>
          <div class='alert alert-danger mt-2'>
            <?= $error = $validation->getError('usuario'); ?>
          </div>
        <?php }?>

    <div class="mb-3">
      <label for="password" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="password" name="password" required autocomplete="new-password" minlength="6">
    </div>

          <!-- error -->

        <?php if($validation->getError('contraseña')) {?>
          <div class='alert alert-danger mt-2'>
            <?= $error = $validation->getError('contraseña'); ?>
          </div>
        <?php }?>

    <div class="d-flex gap-2">
      <input type="submit" value="Guardar" class="btn btn-success">
      <input type="reset"  value="Cancelar" class="btn btn-danger">
    </div>
  </form>
</div>

<!-- Fin del formulario -->