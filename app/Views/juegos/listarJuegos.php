<?php echo $cabecera?>
<?php echo $navbar?>
    <div class="container" style="background-color: white;">
      <h5 style="background-color: white">Lista de Juegos</h5>
      <div class="row">
        <table id="serverSideTable" class="dataTable display cell-border compact hover ">
          <thead class="thead-light">
            <tr>
              <th>Cód. Juego</th>
              <th>Imagen</th>
              <th>Título</th>
              <th>Cód. R.A.M.</th>
              <th>Cód. Procesador</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
    <canvas id="myChart" width="400" height="400"></canvas>
<script>
  var ctx= document.getElementById("myChart").getContext("2d");
  var myChart= new Chart(ctx,{
    type:"bar",
    data:{
      labels:['col1','col2','col3'],
      datasets:[{
        labels:'Num datos',
        data:[10,9,15],
        backgroundColor:[
          'rgb(66, 134, 244)',
          'rgb(74, 135, 72)',
          'rgb(229, 89, 50)'
          
        ]
      }]
    },
    options:{
      scales:{
        yAxes:[{
          ticks:{
            beginAtZero:true
          }
        }]
      }
    }
  });
</script>
<img class="img-fluid" src="../public/uploads/1666724747_70ab35d61f635ffb5dcd.jpg" alt="caballo">
<script>
  $(document).ready(function(){
    $('#serverSideTable').DataTable( {
      "processing":true,
      "serverSide":true,
      "ajax":"./php/server_processing_juego.php",
      language:{
        url:'./Spanish.json'
      }
    });
  });
</script>
<?php echo $piepagina?>