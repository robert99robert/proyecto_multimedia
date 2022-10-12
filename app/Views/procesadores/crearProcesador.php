<?php echo $cabecera?>
<?php echo $navbar?>
    Formulario para crear un procesador

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingresar datos del Procesador</h5>
            <p class="card-text">
            <!--<?php if(isset($validation)):?>
                <?=$validation->listErrors();?>
            <?php endif;?>-->
            <form method="post" action="<?=site_url('guardarProcesador')?>" enctype="multipart/form-data">
        
        <div class="form-group">
            <label for="compania_pro">Compañia</label>
            <input id="compania_pro" class="form-control" type="text" name="compania_pro">
            <?php if(isset($validation)):?>
                <?php if($validation->hasError('compania_pro')):?>
                    <?= $validation->getError('compania_pro');?>
                <?php endif;?>
            <?php endif;?>
        </div>
        <div class="form-group">
            <label for="modelo_pro">Modelo</label>
            <input id="modelo_pro" class="form-control" type="text" name="modelo_pro">
            <?php if(isset($validation)):?>
                <?php if($validation->hasError('modelo_pro')):?>
                    <?= $validation->getError('modelo_pro');?>
                <?php endif;?>
            <?php endif;?>
        </div>
        <div class="form-group">
            <label for="cant_nucleo">Cantidad de nucleos</label>
            <input id="cant_nucleo" class="form-control" type="text" name="cant_nucleo">
            <?php if(isset($validation)):?>
                <?php if($validation->hasError('cant_nucleo')):?>
                    <?= $validation->getError('cant_nucleo');?>
                <?php endif;?>
            <?php endif;?>
        </div>
        <div class="form-group">
            <label for="ghz">Ghz</label>
            <input id="ghz" class="form-control" type="text" name="ghz">
            <?php if(isset($validation)):?>
                <?php if($validation->hasError('ghz')):?>
                    <?= $validation->getError('ghz');?>
                <?php endif;?>
            <?php endif;?>
        </div>
        <button class="btn btn-success" type="submit">Guardar</button>
        </form>

            </p>
        </div>
    </div>

    
<?php echo $piepagina?>