<?php $session = session() ?>
<?php echo $cabecera ?>
<?php echo $navbar ?>
<h5>Usuario</h5>
      
      <table class="table table-light">
        <thead class="thead-light">
          <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Tipo de Usuario</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <td><?php echo $session->get('id')?></td>
            <td><?php echo $session->get('name')?></td>
            <td><?php echo $session->get('email')?></td>
            <td><?php echo $session->get('tipo_usuario')?></td>
          </tr>


        </tbody>
      </table>
<?php echo $piepagina ?>
