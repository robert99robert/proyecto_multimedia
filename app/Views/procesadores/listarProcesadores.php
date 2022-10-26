<?php echo $cabecera?>
<?php echo $navbar?> 
    <div class="container" style="background-color: white;">
      <h5 style="background-color: white">Lista de Procesadores</h5>
      <div class="row">
        <table id="serverSideTable" class="dataTable display cell-border compact hover ">
          <thead class="thead-light">
            <tr>
              <th>Compañia</th>
              <th>Modelo</th>
              <th>Cantidad de Nucleos</th>
              <th>Ghz</th>
              <th>Código</th>
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
      "ajax":"./php/server_processing_procesador.php",
      language:{
        url:'./Spanish.json'
      }
    });
  });
</script>
<?php echo $piepagina?>