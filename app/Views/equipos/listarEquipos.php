<?php echo $cabecera?>
<?php echo $navbar?> 
    <div class="container" style="background-color: white;">
      <h5 style="background-color: white">Lista de Equipos</h5>
      <div class="row">
        <table id="serverSideTable" class="dataTable display cell-border compact hover ">
          <thead class="thead-light">
            <tr>
              <th>Cod. Equipo</th>
              <th>Cod. R.A.M.</th>
              <th>Cod. Procesador</th>
              <th>ID</th>
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
      "ajax":"./php/server_processing_equipo.php",
      language:{
        url:'./Spanish.json'
      }
    });
  });
</script>
<?php echo $piepagina?>