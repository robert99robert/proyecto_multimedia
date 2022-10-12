<?php echo $cabecera?>
<?php echo $navbar?>

  <h5>Lista de Equipos</h5>      
      <table class="table table-light">
        <thead class="thead-light">
          <tr>
            <th>Código del Equipo</th>
            <th>Valor</th>
            <th>Código de la R.A.M.</th>
            <th>Código del Procesador</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>

        <?php foreach($equipos as $equipo): ?>
          <tr>
            <td><?php echo $equipo['cod_equip']?></td>
            <td><?php echo $equipo['valor']?></td>
            <td><?php echo $equipo['cod_ram']?></td>
            <td><?php echo $equipo['cod_pro']?></td>
            <td>Editar

              <a href="<?=base_url('borrarEquipo/'.$equipo['cod_equip']);?>"class="btn btn-danger" type="button">Borrar</a>

            </td>
          </tr>

        <?php endforeach;?>

        </tbody>
      </table>
<?php echo $piepagina?>