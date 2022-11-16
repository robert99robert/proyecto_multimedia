<?php echo $cabecera?>
<?php echo $navbar?> 
    <div class="container" style="background-color: white">
    <div style="margin: 0 auto">Lista de R.A.M.s</div>
      <div class="row">
        <table id="serverSideTable" class="dataTable display cell-border compact hover ">
          <thead class="thead-light">
            <tr>
              <th>Compañia</th>
              <th>Capacidad MBs</th>
              <th>Tipo</th>
              <th>Mhz</th>
              <th>Código</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
<script>
  $(document).ready(function(){
    $('#serverSideTable').DataTable( {
      buttons: [
        'copy', 'excel', 'pdf'
    ],
      "processing":true,
      "serverSide":true,
      "ajax":"./php/server_processing_ram.php",
      language:{
        url:'./Spanish.json'
      }
    });
  });
</script>
<?php echo $piepagina?>
    