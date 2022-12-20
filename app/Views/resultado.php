<?php echo $cabecera?>
<?php echo $navbar2?>
<?php echo $navbar?>
<div id="barchart_material" style="width: 900px; height: 500px;"></div>

<div class="module qrcode-container" >
	<div class="qrcode" value="<?php foreach ($juegos as $juego):?>
            <?php echo $juego['titulo']?>
            <?php endforeach;?> " display-label="true" label-position="top" label-font-size="20" style="position: absolute;height: 300px; width: 200px; margin-left:750px; margin-top: -320px">
</div>
</div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', '<?php foreach ($juegos as $juego):?>
            <?php echo $juego['titulo']?>
            <?php endforeach;?>', 'Cód. Equipo: <?php foreach ($equipos1 as $equipo1):?>
            <?php echo $equipo1['cod_equip']?>
            <?php endforeach;?>', 'Cód. Equipo: <?php foreach ($equipos2 as $equipo2):?>
            <?php echo $equipo2['cod_equip']?>
            <?php endforeach;?>'],

          ['Nucleo(s) Pro.', <?php foreach ($juegos as $juego):?>
            <?php echo $juego['cant_nucleo']?>
            <?php endforeach;?>, <?php foreach ($equipos1 as $equipo1):?>
            <?php echo $equipo1['cant_nucleo']?>
            <?php endforeach;?>, <?php foreach ($equipos2 as $equipo2):?>
            <?php echo $equipo2['cant_nucleo']?>
            <?php endforeach;?>],

          ['GHz Pro.', <?php foreach ($juegos as $juego):?>
            <?php echo $juego['ghz']?>
            <?php endforeach;?>, <?php foreach ($equipos1 as $equipo1):?>
            <?php echo $equipo1['ghz']?>
            <?php endforeach;?>, <?php foreach ($equipos2 as $equipo2):?>
            <?php echo $equipo2['ghz']?>
            <?php endforeach;?>],
          ['Capacidad GBs R.A.M.', <?php foreach ($juegos as $juego):?>
            <?php echo $juego['cap_mb_ram']?>
            <?php endforeach;?>, <?php foreach ($equipos1 as $equipo1):?>
            <?php echo $equipo1['cap_mb_ram']?>
            <?php endforeach;?>, <?php foreach ($equipos2 as $equipo2):?>
            <?php echo $equipo2['cap_mb_ram']?>
            <?php endforeach;?>],
          ['GHz R.A.M.', <?php foreach ($juegos as $juego):?>
            <?php echo $juego['mhz']?>
            <?php endforeach;?>, <?php foreach ($equipos1 as $equipo1):?>
            <?php echo $equipo1['mhz']?>
            <?php endforeach;?>, <?php foreach ($equipos2 as $equipo2):?>
            <?php echo $equipo2['mhz']?>
            <?php endforeach;?>]
        ]);

        var options = {
          chart: {
            title: 'Juego Vs. Equipo 1 Vs. Equipo2',
            subtitle: 'Nucleo(s), GHz, Capacidad, Mhz',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
</script>
<?php echo $piepagina?>