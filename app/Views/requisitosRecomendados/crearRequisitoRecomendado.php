<?php echo $cabecera?>
<?php echo $navbar?>
    Formulario para crear un Requisito Recomendado

    <!-- ?= $validation->listErrors() ?> -->

    <div class="card">
        <div class="card-body">
        <h5 class="card-title">Ingresar datos del Requisito Recomendado</h5>
        <p class="card-text">
        <!--<?php if(isset($validation)):?>
            <?=$validation->listErrors();?>
        <?php endif;?>-->
        <form method="post" action="<?=site_url('guardarRequisitoRecomendado')?>" enctype="multipart/form-data">
        
        <div class="form-group">
        <label for="cod_ram">R.A.M.</label>
        <select id="cod_ram" class="form-control" name="cod_ram">
        <?php foreach($rams as $ram): ?>
            <option value="<?php echo $ram['cod_ram']?>">
                <?php echo $ram['compania_ram']." ".$ram['tipo_ram']." ".$ram['cap_mb_ram']."MB ".$ram['mhz']."MHz"?>
            </option>
            
        <?php endforeach;?>
        </select>
        </div>
        <div class="form-group">
        <label for="cod_pro">Procesador</label>
        <select id="cod_pro" class="form-control" name="cod_pro">
        <?php foreach($procesadores as $procesador): ?>
            <option value="<?php echo $procesador['cod_pro']?>">
                <?php echo $procesador['compania_pro']." ".$procesador['modelo_pro']." ".$procesador['cant_nucleo']."Nucleos ".$procesador['ghz']."GHz"?>
            </option>
        <?php endforeach;?>
        </select>
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