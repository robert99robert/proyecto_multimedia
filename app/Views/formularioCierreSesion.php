<?php echo $cabecera?>
<?php echo $navbar?>



<div class="card">
        <div class="card-body">
                <h5 class="card-title">Cierre de Sesión</h5>
                <p class="card-text">
                <form action="<?php echo base_url(); ?>/CerradorSesiones/cierreSesion" method="post">
        
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="conditions" name="conditions" value="1">
                    <label class="form-check-label" for="conditions">¿Deseas cerrar esta sesión?</label>
                 </div>
                    <input type="submit" class="btn btn-primary" name="sendForm" value="Aceptar"/>
                </form>
                </p>
        </div>
    </div>
    <?php echo $piepagina?>