
<ul>
  <?php if (Session::getInstance()->get('kt_login_level') == '1') { ?>
    <li <?php if ($this->botonpanel == 1) { ?>class="activo" <?php } ?>>
      <a href="/administracion/panel">
        <i class="fas fa-info-circle"></i> 
        Información de la Página
      </a>
    </li>
  <?php } ?>
  <li class="nav-item <?php if ($this->botonpanel == 2) { ?>active<?php } ?>">
    <a href="/administracion/publicidad" class="nav-link">
      <div class="nav-icon">
        <i class="far fa-images"></i>
      </div>
      <span class="nav-text">Administrador de Publicidad</span>
      <div class="nav-indicator"></div>
    </a>
  </li>
  <li <?php if ($this->botonpanel == 3) { ?>class="activo" <?php } ?>>
    <a href="/administracion/contenido">
      <i class="fas fa-file-invoice"></i> 
     Administrador de Contenidos
    </a>
  </li>
  <li <?php if ($this->botonpanel == 5) { ?>class="activo" <?php } ?>>
    <a href="/administracion/blog">
      <i class="fas fa-file-invoice"></i> 
     Administrador de Blogs
    </a>
  </li>
  <li <?php if ($this->botonpanel == 6) { ?>class="activo" <?php } ?>>
    <a href="/administracion/clientes">
      <i class="fas fa-file-invoice"></i> 
     Administrador de Clientes
    </a>
  </li>

  <?php if (Session::getInstance()->get('kt_login_level') == '1') { ?>
    <li <?php if ($this->botonpanel == 4) { ?>class="activo" <?php } ?>>
      <a href="/administracion/usuario">
        <i class="fas fa-users"></i> 
        Administrar Usuarios
      </a>
    </li>
  <?php } ?>
</ul>