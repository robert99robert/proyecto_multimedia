<?php echo $cabecera?>
<?php echo $navbar?>
    Formulario para editar una R.A.M.
    <div class="card">
        <div class="card-body">
        <h5 class="card-title">Actualice los datos de la R.A.M.</h5>
        <p class="card-text">
        <form method="post" action="<?=site_url('actualizarRam')?>" enctype="multipart/form-data">
        <input type="hidden" name="cod_ram" value="<?php echo $ram['cod_ram']?>" >
        <div class="form-group">
            <label for="compania_ram">Compañia</label>
            <input id="compania_ram" class="form-control" type="text" name="compania_ram" value="<?php echo $ram['compania_ram']?>">
            <span class='text-danger'><?= display_error($validation, 'compania_ram');?></span>
        </div>
        <div class="form-group">
            <label for="cap_mb_ram">Capacidad MBs</label>
            <input id="cap_mb_ram" class="form-control" type="text" name="cap_mb_ram" value="<?php echo $ram['cap_mb_ram']?>">
            <span class='text-danger'><?= display_error($validation, 'cap_mb_ram');?></span>
        </div>
        <div class="form-group">
            <label for="tipo_ram">Tipo</label>
            <input id="tipo_ram" class="form-control" type="text" name="tipo_ram" value="<?php echo $ram['tipo_ram']?>">
            <span class='text-danger'><?= display_error($validation, 'tipo_ram');?></span>
        </div>
        <div class="form-group">
            <label for="mhz">Mhz</label>
            <input id="mhz" class="form-control" type="text" name="mhz" value="<?php echo $ram['mhz']?>">
            <span class='text-danger'><?= display_error($validation, 'mhz');?></span>
        </div>
        <div class="form-group">
            <label for="clp_ram">Precio Chileno</label>
            <input id="clp_ram" class="form-control" type="text" name="clp_ram" value="<?php echo $ram['clp_ram']?>">
            <span class='text-danger'><?= display_error($validation, 'clp_ram');?></span>
        </div>
        <button class="btn btn-success" type="submit">Actualizar</button>
        </form>
            </p>
        </div>
    </div>
<?php echo $piepagina?>