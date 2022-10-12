<?php echo $cabecera?>
<?php echo $navbar?> 
<h5>Lista de R.A.M.s</h5>
      <table class="table table-light">
        <thead class="thead-light">
          <tr>
            <th>Cod</th>
            <th>Capacidad MBs</th>
            <th>Tipo</th>
            <th>Mhz</th>
            <th>Compañia</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>

        <?php foreach($rams as $ram): ?>
          <tr>
            <td><?php echo $ram['cod_ram']?></td>
            <td><?php echo $ram['cap_mb_ram']?></td>
            <td><?php echo $ram['tipo_ram']?></td>
            <td><?php echo $ram['mhz']?></td>
            <td><?php echo $ram['compania_ram']?></td>
            <td>Editar

              <a href="<?=base_url('borrarRam/'.$ram['cod_ram']);?>"class="btn btn-danger" type="button">Borrar</a>

            </td>
          </tr>

        <?php endforeach;?>

        </tbody>
      </table>
<?php echo $piepagina?>
    