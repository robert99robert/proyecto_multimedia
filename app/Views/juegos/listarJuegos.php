<?php echo $cabecera?>
<div style="position: absolute; background-color:white; height: 300px; width: 200px; margin-left:-203px; margin-top: 220px"><canvas id="myChart" style="display: block; height: 300px; width: 200px"></canvas></div>
<?php echo $navbar?> 
<div class="container" style="background-color:white">
<div class="center"><h5>Lista de Juegos</h5></div>
      <table class="table table-light" id="tablaJuegos">
        <thead class="thead-light">
          <tr>
            <th>Cód. Juego</th>
            <th>Título MBs</th>
            <th>Cód. R.A.M.</th>
            <th>Cód. Pro.</th>
            <th>Imagen</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>

        <?php foreach($juegos as $juego): ?>
          <tr>
            <td><?php echo $juego['cod_juego']?></td>
            <td><?php echo $juego['titulo']?></td>
            <td><?php echo $juego['cod_ram']?></td>
            <td><?php echo $juego['cod_pro']?></td>
            <td>
              <img src="<?=base_url()?>/uploads/<?=$juego['imagen'];?>" width="100" height="100">
            </td>
            <td>
              <a href="<?=base_url('editarJuego/'.$juego['cod_juego']);?>"class="btn btn-warning" type="button">Editar</a>
              <a href="<?=base_url('borrarJuego/'.$juego['cod_juego']);?>"class="btn btn-danger" type="button">Borrar</a>
            </td>
          </tr>

        <?php endforeach;?>

        </tbody>
      </table>
</div>


<?php echo $piepagina?>

<script>
  var tabla = document.querySelector("#tablaJuegos");
  var dataTable = new DataTable(tabla);
</script>

<script>
  var ctx= document.getElementById("myChart").getContext("2d");
  var myChart= new Chart(ctx,{
    type:"bar",
    data:{
      labels:['Cantidad de Juegos'],
      datasets:[{
        labels:['Cantidad de Juegos'],
        data:[<?php echo $count?>],
        backgroundColor:[
          'rgb(66, 134, 244)'
          
        ]
      }]
    },
    options:{
      scales:{
        yAxes:[{
          ticks:{
            beginAtZero:true,
            fontSize:10
          }
        }]
      }
    }
  });
</script>