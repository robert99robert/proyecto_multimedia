<?php echo $cabecera?>
<?php echo $navbar?>
    Formulario paa enviar un Correo
    <div class="card">
        <div class="card-body">
        <h5 class="card-title">Ingresar datos de la R.A.M.</h5>
        <p class="card-text">
        <form method="POST" action="<?=site_url('enviarCorreo')?>" enctype="multipart/form-data">
        
        <div class="form-group">
            <label for="name">Nombre</label>
            <input id="name" class="form-control" type="text" name="name" value="" required="">
            
        </div>
        <div class="form-group">
            <label for="email">Correo</label>
            <input id="email" class="form-control" type="email" name="email" required="">
            
        </div>
        <div class="form-group">
            <label for="asunto">Asunto</label>
            <input id="asunto" class="form-control" type="text" name="asunto" required="">
            
        </div>
        <div class="form-group">
            <label for="msg">Mensaje</label>
            <textarea id="msg" class="form-control"  name="msg" required=""></textarea>
            
        </div>
        <button class="btn btn-success" type="submit" name="enviar">Enviar</button>
        </form>

            </p>
        </div>
    </div>
<?php echo $piepagina?>