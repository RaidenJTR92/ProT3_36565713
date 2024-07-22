<div class="container my-5"> <!-- espaciar verticalmente -->
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card my-4"> <!-- espaciar la tarjeta -->
        <div class="card-header">
          <h3 class="text-center">Registro</h3>
        </div>
        <?php $validation = \Config\Services::validation(); ?>
        <form method="post" action="<?php echo base_url('/enviar-form') ?>">
          <?=csrf_field();?>
          <?php if(!empty (session()->getFlashdata('fail'))):?>
            <div class="alert alert-danger"><?=session()->getFlashdata('fail');?></div>
            <?php endif?>
            <?php if(!empty (session()->getFlashdata('success'))):?>
            <div class="alert alert-success"><?=session()->getFlashdata('success');?></div>
            <?php endif?>
        <div class="card-body">
          <form>
            <div class="form-group my-3"> <!-- Agregado my-3 para espaciar los grupos de formulario -->
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" required placeholder="Inserte nombre...">
            <!-- Error -->
             <?php if ($validation->getError('nombre')) { ?>
              <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('nombre'); ?>
              </div>
              <?php } ?>
            </div>
            <div class="form-group my-3"> 
              <label for="apellido">Apellido</label>
              <input type="text" class="form-control" id="apellido" name="apellido" required placeholder="Inserte apellido...">
              <!-- Error -->
               <?php if ($validation->getError('apellido')) { ?>
                <div class='alert alert-danger mt-2'>
                  <?= $error = $validation->getError('apellido'); ?>
                </div>
                <?php } ?>
            </div>
            <div class="form-group my-3"> 
              <label for="email">Correo electrónico</label>
              <input type="email" class="form-control" id="email" name="email" required placeholder="ejemplo@email.com">
              <!-- Error -->
               <?php if ($validation->getError('email')) { ?>
                <div class='alert alert-danger mt-2'>
                  <?= $error = $validation->getError('email'); ?>
                </div>
                <?php } ?>
            </div>
            <div class="form-group my-3"> 
              <label for="usuario">Usuario</label>
              <input type="text" class="form-control" id="usuario" name="usuario" required placeholder="Inserte usuario...">
              <!-- Error -->
               <?php if ($validation->getError('usuario')) { ?>
                <div class='alert alert-danger mt-2'>
                  <?= $error = $validation->getError('usuario'); ?>
                </div>
                <?php } ?>
            </div>
            <div class="form-group my-3"> 
              <label for="password">Contraseña</label>
              <input type="password" class="form-control" id="password" name="pass" required placeholder="Inserte su contraseña...">
              <!-- Error -->
               <?php if ($validation->getError('pass')) { ?>
                <div class='alert alert-danger mt-2'>
                  <?= $error = $validation->getError('pass'); ?>
                </div>
                <?php } ?>
            </div>
            <!-- Botones de Guardar y Cancelar -->
            <!-- Botones cambiados por los del video de explicacion 
            <button type="submit" class="btn btn-success btn-block mb-4">Guardar</button>
            <button type="button" class="btn btn-danger btn-block mb-4" onclick="cancelar()">Cancelar</button> -->
            <input type="submit" value="guardar" class="btn btn-success">
            <input type="reset" value="cancelar" class="btn btn-danger">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
