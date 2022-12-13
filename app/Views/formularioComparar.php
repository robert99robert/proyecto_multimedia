<?php echo $cabecera?>
<?php echo $navbar2?>
<?php echo $navbar?>
    <div class="card">
        <div class="card-body">
        <h5 class="card-title">Formulario para seleccionar equipos y juego.</h5>
        <p class="card-text">
        <form method="post" action="<?=site_url('comparador')?>" enctype="multipart/form-data">
        
        <div class="form-group">
            <label for="compania_ram">Equipo 1</label>
            <select id="compania_ram" class="form-control" name="cod_equipo_1">
            <?php foreach($equipos as $equipo):?>
                <option value="<?php echo $equipo['cod_equip']?>">
                    <?php echo $equipo['cod_equip']. ", Compañia Pro.: ".$equipo['compania_pro']. ", Modelo Pro.: ".$equipo['modelo_pro']. ", Cant. de Nucleo(s): ".$equipo['cant_nucleo']. ", GHz: ".$equipo['ghz']. ", Comp. R.A.M.: ".$equipo['compania_ram']. ", Cap. MB(s) R.A.M.: ".$equipo['cap_mb_ram']. ", Tipo R.A.M.: ".$equipo['tipo_ram']. ", MHz: ".$equipo['mhz']?>
                </option>
            <?php endforeach;?>
            </select>
        </div>
        <div class="form-group">
            <label for="cap_mb_ram">Equipo 2</label>
            <select id="compania_ram" class="form-control" name="cod_equipo_2">
            <?php foreach($equipos as $equipo):?>
                <option value="<?php echo $equipo['cod_equip']?>">
                    <?php echo $equipo['cod_equip']. ", Compañia Pro.: ".$equipo['compania_pro']. ", Modelo Pro.: ".$equipo['modelo_pro']. ", Cant. de Nucleo(s): ".$equipo['cant_nucleo']. ", GHz: ".$equipo['ghz']. ", Comp. R.A.M.: ".$equipo['compania_ram']. ", Cap. MB(s) R.A.M.: ".$equipo['cap_mb_ram']. ", Tipo R.A.M.: ".$equipo['tipo_ram']. ", MHz: ".$equipo['mhz']?>
                </option>
            <?php endforeach;?>
            </select>
        </div>
        <div class="form-group">
            <label for="tipo_ram">Juego</label>
            <select id="compania_ram" class="form-control" name="cod_juego">
            <?php foreach($juegos as $juego):?>
                <option value="<?php echo $juego['cod_juego']?>">
                    <?php echo $juego['titulo']?>
                </option>
            <?php endforeach;?>
            </select>
        <button class="btn btn-success" type="submit">Guardar</button>
        </form>

            </p>
        </div>
    </div>
<?php echo $piepagina?>