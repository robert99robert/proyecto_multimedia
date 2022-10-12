<?php echo $cabecera?>
<?php echo $navbar?>
    Formulario para crear una R.A.M.

    <!-- ?= $validation->listErrors() ?> -->

    <div class="card">
        <div class="card-body">
        <h5 class="card-title">Ingresar datos de la R.A.M.</h5>
        <p class="card-text">
        <!--<?php if(isset($validation)):?>
            <?=$validation->listErrors();?>
        <?php endif;?>-->
        <form method="post" action="<?=site_url('guardarRam')?>" enctype="multipart/form-data">
        
        <div class="form-group">
            <label for="compania_ram">Compañia</label>
            <input id="compania_ram" class="form-control" type="text" name="compania_ram">
            <?php if(isset($validation)):?>
                <?php if($validation->hasError('compania_ram')):?>
                    <?= $validation->getError('compania_ram');?>
                <?php endif;?>
            <?php endif;?>
        </div>
        <div class="form-group">
            <label for="cap_mb_ram">Capacidad MBs</label>
            <input id="cap_mb_ram" class="form-control" type="text" name="cap_mb_ram">
            <?php if(isset($validation)):?>
                <?php if($validation->hasError('cap_mb_ram')):?>
                    <?= $validation->getError('cap_mb_ram');?>
                <?php endif;?>
            <?php endif;?>
        </div>
        <div class="form-group">
            <label for="tipo_ram">Tipo</label>
            <input id="tipo_ram" class="form-control" type="text" name="tipo_ram">
            <?php if(isset($validation)):?>
                <?php if($validation->hasError('tipo_ram')):?>
                    <?= $validation->getError('tipo_ram');?>
                <?php endif;?>
            <?php endif;?>
        </div>
        <div class="form-group">
            <label for="mhz">Mhz</label>
            <input id="mhz" class="form-control" type="text" name="mhz">
            <?php if(isset($validation)):?>
                <?php if($validation->hasError('mhz')):?>
                    <?= $validation->getError('mhz');?>
                <?php endif;?>
            <?php endif;?>
        </div>
        <button class="btn btn-success" type="submit">Guardar</button>
        </form>

            </p>
        </div>
    </div>
    <!-- php
    $rules = [
    'compania_ram' => 'required',
    'cap_mb_ram' => 'required',
    'tipo_ram' => 'required',
    'mhz'    => 'required',
            ];
    ?> --> 

    
<?php echo $piepagina?>