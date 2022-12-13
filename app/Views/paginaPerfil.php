<?php echo $cabecera?>
<?php echo $navbar?>
<?php $session = session();?>

<div class="container mt-1">
  <div class="row" style="background-color:#f0f5f5" >
    <div class="col-sm-6" style="background-color: white">
    <br>
      <h2>Perfil</h2>
        <div class="container p-5 my-5 border bg-white"><?php echo "Correo: " .$session->get('email')?><br>
          <?php echo "Nombre: " .$session->get('name')?><br>
          <?php echo "Tipo de usuario: " .$session->get('tipo_usuario')?>
        </div>
      <hr class="d-sm-none">
    </div>

  <div class="col-sm-6">
    <br>
      <h5 class="card-title">¿Desea ingresar una imagen?</h5>
        <p class="card-text">
        <form method="post" action="<?=site_url('guardarImagen')?>" enctype="multipart/form-data">
      <div class="form_group">
            <input id="imagen" class="form-control-file" type="file" name="imagen">
      </div>
        <br>
        <button class="btn btn-success" type="submit">Guardar</button>
      </form>
    </p>
  </div>
</div>

<?php echo $piepagina?>