<?php echo $cabecera?>
<?php echo $navbar?>

<h5>Lista de Procesadores</h5>
      
      <table class="table table-light">
        <thead class="thead-light">
          <tr>
            <th>Cod</th>
            <th>Modelo</th>
            <th>Cantidad de Nucleos</th>
            <th>Ghz</th>
            <th>Compañia</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>

        <?php foreach($procesadores as $procesador): ?>
          <tr>
            <td><?php echo $procesador['cod_pro']?></td>
            <td><?php echo $procesador['modelo_pro']?></td>
            <td><?php echo $procesador['cant_nucleo']?></td>
            <td><?php echo $procesador['ghz']?></td>
            <td><?php echo $procesador['compania_pro']?></td>
            <td>Editar

              <a href="<?=base_url('borrarProcesador/'.$procesador['cod_pro']);?>"class="btn btn-danger" type="button">Borrar</a>

            </td>
          </tr>

        <?php endforeach;?>

        </tbody>
      </table>
<?php echo $piepagina?>