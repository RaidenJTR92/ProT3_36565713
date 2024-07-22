<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card my-4">
        <div class="card-header">
          <h3 class="text-center">Iniciar Sesión</h3>
        </div>

          <!--Mensaje de Error-->
          <?php if (session()->getFlashdata('msg')):?>
            <div class="alert alert-warning">
              <?= session()->getFlashdata('msg')?>
          </div>
          <?php endif;?>
        <div class="card-body">
           <!--Inicio del Formulario de Login-->
          <form method="post" action="<?php echo base_url('/enviarlogin')?>">
            <!-- Action apunta al script de validación en el servidor -->
            <div class="form-group my-3">
              <label for="email">E-mail</label>
              <input type="email" class="form-control" id="email" name="email" required placeholder="Ingrese su email">
            </div>
            <div class="form-group my-3">
              <label for="password">Contraseña</label>
              <input type="password" class="form-control" id="password" name="pass" required placeholder="Ingrese su contraseña">
            </div>
             <!--Botones nuevos del Login-->
            <input type="submit" value="Ingresar" class="btn btn-success">
              <a href="<$php echo base_url('login');?>" class="btn btn-danger">Cancelar</a>
              <br><span>¿Aún no se registró?<a href="<?php echo base_url('/registro');?>"> Registrarse aquí</a></span>
          <!--Botones Cambiados por el imput del video
            <button type="submit" class="btn btn-success btn-block mb-4">Ingresar</button>
            <button type="button" class="btn btn-danger btn-block mb-4" onclick="cancelar()">Cancelar</button> -->
          </form>
        </div>
      </div>
    </div>
  </div>
</div>