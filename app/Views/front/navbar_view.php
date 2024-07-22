<!--Navegación-->
<?php
$session = session();
$nombre = $session->get('nombre');
$perfil_id = $session->get('perfil_id');
?>

<nav class="navbar navbar-expand-lg bg-body-green">
  <div class="container-fluid">
    <a class="navbar-nav me-auto barra" href="http://localhost/ProT3_36565713/">
      <img src="<?php echo base_url('assets/img/Requiemlogo.png')?>" alt="marca" width="75" height="30" class="img-fluid"/>
    </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php if(session()->get('perfil_id') == 1): ?>
      <div class="btn btn-secondary active btnUser btn-sm">
        <a href="">ADMIN: <?php echo session('nombre'); ?></a>
      </div>
      <a class="navbar-brand" href="#"></a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href='registro'>Registrarse</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href='login'>Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/logout'); ?>" tabindex="-1" aria-disabled="true">Cerrar Sesión</a>
          </li>
        </ul>
      </div>
    <?php elseif(session()->get('perfil_id') == 2): ?>
      <div class="btn btn-info active btnUser btn-sm">
        <a href="">CLIENTE: <?php echo session('nombre'); ?></a>
      </div>
      <!-- Navbar para CLIENTES que pueden comprar -->
      <a class="navbar-brand" href="#"></a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href='catalogo'>Catálogo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/logout'); ?>" tabindex="-1" aria-disabled="true">Cerrar Sesión</a>
          </li>
        </ul>
      </div>
    <?php else: ?>
      <!-- Navbar para CLIENTES no logueados -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="quienes_somos">Quiénes Somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="acercade">Acerca de</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registro">Registrarse</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login">Login</a>
          </li>
        </ul>
        <form class="d-flex" role="buscar">
          <input class="form-control me-2" type="search" placeholder="buscar" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    <?php endif; ?>
  </div>
</nav>
