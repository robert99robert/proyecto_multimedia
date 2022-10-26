<?php echo $cabecera?>
<?php echo $navbar?>

  <h5>Lista de Equipos</h5>      
      <table class="table table-light">
        <thead class="thead-light">
          <tr>
            <th>Código del Requisito Recomendado</th>
            <th>Código de la R.A.M.</th>
            <th>Código del Procesador</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>

        <?php foreach($requisitosRecomendados as $requisitoRecomendado): ?>
          <tr>
            <td><?php echo $requisitoRecomendado['cod_requi_recom']?></td>
            <td><?php echo $requisitoRecomendado['cod_ram']?></td>
            <td><?php echo $requisitoRecomendado['cod_pro']?></td>
            <td>Editar

              <a href="<?=base_url('borrarRequisitoRecomendado/'.$requisitoRecomendado['cod_requi_recom']);?>"class="btn btn-danger" type="button">Borrar</a>

            </td>
          </tr>

        <?php endforeach;?>

        </tbody>
      </table>
<?php echo $piepagina?>