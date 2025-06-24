<div class="container mt-5">
    <div class="row justify-content-md-center">
        <div class="col-5">

            <?php if(session()->getFlashdata('msg')): ?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php endif; ?>

            <br><br>

            <?php if(session()->perfil_id == 1): ?>

                <!-- Imagen para el Administrador // tengo que descargar todavía -->

                <div>
                    <img class="center mb-5 mx-5" height="100px" width="100px" src="<?= base_url('assets/img/imagenadmin4.png') ?>">
                </div>
            <?php endif; ?>

            <?php if(session()->perfil_id == 2): ?>

                <!-- Imagen para el Cliente // tengo que descargar todavía --> 

                <div>
                    <img class="center mb-5 mx-5" height="100px" width="100px" src="<?= base_url('assets/img/imagencliente.png') ?>">
                </div>
            <?php endif; ?>

        </div>
    </div>
</div>
