<?php echo $cabecera?>
<?php echo $navbar?> 
<div class="container" style="background-color:white">
<h5>Lista de R.A.M.s</h5>
      <table class="table table-light" id="tablaRam">
        <thead class="thead-light">
          <tr>
            <th>Cod</th>
            <th>Capacidad MBs</th>
            <th>Tipo</th>
            <th>Mhz</th>
            <th>Compañia</th>
            <th>Precio Chileno</th>
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
            <td><?php echo $ram['clp_ram']?></td>
            <td>
              <a href="<?=base_url('editarRam/'.$ram['cod_ram']);?>"class="btn btn-warning" type="button">Editar</a>
              <a href="<?=base_url('borrarRam/'.$ram['cod_ram']);?>"class="btn btn-danger" type="button">Borrar</a>
            </td>
          </tr>

        <?php endforeach;?>

        </tbody>
      </table>
</div>
<script>
  var tabla = document.querySelector("#tablaRam");
  var dataTable = new DataTable(tabla);
</script>
<?php echo $piepagina?>
    