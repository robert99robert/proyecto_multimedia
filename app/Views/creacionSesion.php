<?php echo $cabecera?>
<?php echo $navbar?>
<div class="card">
        <div class="card-body">
                <h5 class="card-title">Ingresa tus Datos</h5>
                <p class="card-text">

                <?php if(isset($validation)):?>
                <div class="alert alert-warning">
                   <?= $validation->listErrors() ?>
                </div>
                <?php endif;?>
                <form action="<?php echo base_url(); ?>/CreadorSesiones/almacenarSesion" method="post">
                    <div class="form-group mb-3">
                        <input type="email" name="email" placeholder="Email" value="<?= set_value('Email') ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="password" placeholder="Contrasena" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="name" placeholder="Nombre" value="<?= set_value('Nombre') ?>" class="form-control" >
                    </div>
                    
                    <div class="form-group mb-3">
                        <input type="password" name="confirmpassword" placeholder="Confirma Contrasena" class="form-control" >
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success">Crear</button>
                    </div>
                </form>
                </p>
        </div>
    </div>
    <?php echo $piepagina?>