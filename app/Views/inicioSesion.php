<?php echo $cabecera?>
<?php echo $navbar?>
<div class="card">
        <div class="card-body">
                <h5 class="card-title">Accede a tu cuenta</h5>
                <p class="card-text">
                
                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-warning">
                       <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif;?>
                <form action="<?php echo base_url(); ?>/IniciadorSesiones/loginAuth" method="post">
                    <div class="form-group mb-3">
                        <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="password" placeholder="Password" class="form-control" >
                    </div>
                    
                    <div class="d-grid">
                         <button type="submit" class="btn btn-success">Acceder</button>
                    </div>     
                </form>
                </p>
        </div>
    </div>
<?php echo $piepagina?>