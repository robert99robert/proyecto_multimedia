<?php print_r($equipos1)?>
<?php print_r($equipos2)?>
<?php print_r($juegos)?>
<?php echo $cabecera?>
<?php echo $navbar2?>
<div class="chartCard" style="position: absolute; height: 600px; width: 400px; margin-left:-203px; margin-top: 220px">
      <div class="chartBox">
        <canvas id="graficaJuego"></canvas>
      </div>
</div>
<?php echo $navbar?>
<?php echo $graficoVacio?>
  






<div class="chartCard" style="position: absolute; height: 600px; width: 400px; margin-left:-403px; margin-top: 320px">
      <div class="chartBox">
        <canvas id="graficaEquipo1"></canvas>
      </div>
</div>

<div class="chartCard" style="position: absolute; height: 600px; width: 400px; margin-left:403px; margin-top: 220px">
      <div class="chartBox">
        <canvas id="graficaEquipo2"></canvas>
      </div>
</div>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
    // setup 
    const data = {
      labels: ['Pro. Nucleo(s)', 'Pro. GHz', 'R.A.M. MBs', 'R.A.M. MHz'],
      datasets: [{
        label: '<?php foreach ($juegos as $juego):?>
            <?php echo $juego['titulo']?>
            <?php endforeach;?>',
        data: [
          <?php foreach ($juegos as $juego):?>
            <?php echo $juego['cant_nucleo']?>, <?php echo $juego['ghz']?>, <?php echo $juego['cap_mb_ram']?>, <?php echo $juego['mhz']?>, 12, 3, 9
            <?php endforeach;?>
        ],
        backgroundColor: [
          'rgba(255, 26, 104, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(0, 0, 0, 0.2)'
        ],
        borderColor: [
          'rgba(255, 26, 104, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(0, 0, 0, 1)'
        ],
        borderWidth: 1
      }]
    };

    // config 
    const config = {
      type: 'bar',
      data,
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('graficaJuego'),
      config
    );
    </script>


    <script>
    // setup //gráfica del equipo1 
    const data = {
      labels: ['Pro. Nucleo(s)', 'Pro. GHz', 'R.A.M. MBs', 'R.A.M. MHz'],
      datasets: [{
        label: '<?php foreach ($equipos1 as $equipo1):?>
            <?php echo $equipo1['cod_equip']?>
            <?php endforeach;?>',
        data: [
          <?php foreach ($equipos1 as $equipo1):?>
            <?php echo $equipo1['cant_nucleo']?>, <?php echo $equipo1['ghz']?>, <?php echo $equipo1['cap_mb_ram']?>, <?php echo $equipo1['mhz']?>, 12, 3, 9
            <?php endforeach;?>
        ],
        backgroundColor: [
          'rgba(255, 26, 104, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(0, 0, 0, 0.2)'
        ],
        borderColor: [
          'rgba(255, 26, 104, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(0, 0, 0, 1)'
        ],
        borderWidth: 1
      }]
    };

    // config 
    const config = {
      type: 'bar',
      data,
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    };

    // render init block
    const myChart1 = new Chart(
      document.getElementById('graficaEquipo1'),
      config
    );
    </script>

    
    <script>
    // setup //gráfica del equipo2
    const data = {
      labels: ['Pro. Nucleo(s)', 'Pro. GHz', 'R.A.M. MBs', 'R.A.M. MHz'],
      datasets: [{
        label: '<?php foreach ($equipos2 as $equipo2):?>
            <?php echo $equipo2['cod_equip']?>
            <?php endforeach;?>',
        data: [
          <?php foreach ($equipos2 as $equipo2):?>
            <?php echo $equipo2['cant_nucleo']?>, <?php echo $equipo2['ghz']?>, <?php echo $equipo2['cap_mb_ram']?>, <?php echo $equipo2['mhz']?>, 12, 3, 9
            <?php endforeach;?>
        ],
        backgroundColor: [
          'rgba(255, 26, 104, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(0, 0, 0, 0.2)'
        ],
        borderColor: [
          'rgba(255, 26, 104, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(0, 0, 0, 1)'
        ],
        borderWidth: 1
      }]
    };

    // config 
    const config = {
      type: 'bar',
      data,
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('graficaEquipo2'),
      config
    );
    </script>
    
<?php echo $piepagina?>