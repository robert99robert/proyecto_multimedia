<?php echo $cabecera?>
<?php echo $navbar?>

<h5>Lista de Usuarios</h5>
      
      <table class="table table-light">
        <thead class="thead-light">
          <tr>
            <th>Id</th>
            <th>Nombre</th>

            <th>Tipo de Usuario</th>
            <th>Estado</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>

        <?php foreach($usuarios as $usuario): ?>
          <tr>
            <td><?php echo $usuario['id']?></td>
            <td><?php echo $usuario['name']?></td>

            <td><?php echo $usuario['tipo_usuario']?></td>
            <td><?php echo $usuario['estado']?></td>
            <td>Editar

              <a href="<?=base_url('borrarUsuario/'.$usuario['id']);?>"class="btn btn-danger" type="button">Borrar</a>

            </td>
          </tr>

        <?php endforeach;?>

        </tbody>
      </table>
<?php echo $piepagina?>