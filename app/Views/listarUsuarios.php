<?php echo $cabecera?>
<?php echo $navbar?> 
<h5>Lista de Usuarios</h5>
    <div class="container" style="background-color: white;>
      <div class="row">
        <table id="serverSideTable" class="display">
          <thead class="thead-light">
            <tr>
              <th>ID</th>
              <th>Email MBs</th>
              <th>Nombre</th>
              <th>Tipo de Usuario</th>
              <th>Estado</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
<script>
  $(document).ready(function(){
    $('#serverSideTable').DataTable( {
      "processing":true,
      "serverSide":true,
      "ajax":"./php/server_processing_usuario.php",
      language:{
        url:'./Spanish.json'
      }
    });
  });
</script>
<?php echo $piepagina?>