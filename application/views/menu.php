
      <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="<?=base_url()?>assets/img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">Martín Daprotis</h1>
              <!--p>Ingeniero en sistemas</p-->
            </div>
          </div>

          <!-- Sidebar Navidation Menus--><span class="heading">Menú principal</span>
          <ul class="list-unstyled">
            <?php if ($rol == 'SUPERUSER' or $rol == 'ESTABLECIMIENTO' or $rol == 'MAESTRO' or $rol == 'TUTOR') {?>
                    <li class="active"><a href="<?=base_url()?>welcome/eventos"> <i class="icon-home"></i>Eventos </a></li>
            <?php }?>
            <?php if ($rol == 'SUPERUSER' or $rol == 'ESTABLECIMIENTO' or $rol == 'MAESTRO' or $rol == 'TUTOR') {?>
                    <li><a href="<?=base_url()?>welcome/buscar_alumno"> <i class="fa fa-user"></i>Alumnos </a></li>
            <?php }?>
            <?php if ($rol == 'SUPERUSER' or $rol == 'ESTABLECIMIENTO' or $rol == 'MAESTRO' or $rol == 'TUTOR') {?>
                    <li><a href="<?=base_url()?>welcome/buscar_maestros"> <i class="fa fa-graduation-cap"></i>Maestros </a></li>
            <?php }?>
            <?php if ($rol == 'SUPERUSER' or $rol == 'ESTABLECIMIENTO' or $rol == 'MAESTRO' or $rol == 'TUTOR') {?>
                    <li><a href="<?=base_url()?>welcome/buscar_clases"> <i class="fa fa-group"></i>Clases </a></li>
            <?php }?>
            <?php if ($rol == 'SUPERUSER' or $rol == 'ESTABLECIMIENTO' or $rol == 'MAESTRO' or $rol == 'TUTOR') {?>
                    <li><a href="<?=base_url()?>welcome/buscar_aulas"> <i class="fa fa-group"></i>Aulas </a></li>
            <?php }?>
            <?php if ($rol == 'SUPERUSER' or $rol == 'ESTABLECIMIENTO' or $rol == 'MAESTRO' or $rol == 'TUTOR') {?>
                    <li><a href="<?=base_url()?>welcome/buscar_establecimientos"> <i class="fa fa-building"></i>Establecimientos </a></li>
            <?php }?>
            <?php if ($rol == 'SUPERUSER' or $rol == 'ESTABLECIMIENTO' or $rol == 'MAESTRO' or $rol == 'TUTOR') {?>
                    <li><a href="<?=base_url()?>welcome/deberes_tareas"> <i class="icon-grid"></i>Tareas </a></li>
            <?php }?>
            <?php if ($rol == 'SUPERUSER' or $rol == 'ESTABLECIMIENTO' or $rol == 'MAESTRO' or $rol == 'TUTOR') {?>
                    <li><a href="<?=base_url()?>welcome/estadisticas"> <i class="fa fa-bar-chart"></i>Estadísticas </a></li>
            <?php }?>
            <?php if ($rol == 'SUPERUSER' or $rol == 'ESTABLECIMIENTO' or $rol == 'MAESTRO' or $rol == 'TUTOR') {?>
                    <li><a href="<?=base_url()?>welcome/menu_semanal"> <i class="fa fa-cutlery"></i>Menú semanal </a></li>
            <?php }?>
            <?php if ($rol == 'SUPERUSER' or $rol == 'ESTABLECIMIENTO' or $rol == 'MAESTRO' or $rol == 'TUTOR') {?>
                    <li><a href="<?=base_url()?>welcome/circulares"> <i class="fa fa-commenting-o"></i>Circulares </a></li>
            <?php }?>
            <?php if ($rol == 'SUPERUSER' or $rol == 'ESTABLECIMIENTO' or $rol == 'MAESTRO' or $rol == 'TUTOR') {?>
                    <li><a href="<?=base_url()?>welcome/galeria"> <i class="icon-picture"></i>Galería </a></li>
            <?php }?>
            <?php if ($rol == 'SUPERUSER' or $rol == 'ESTABLECIMIENTO' or $rol == 'MAESTRO' or $rol == 'TUTOR') {?>
                    <li><a href="<?=base_url()?>welcome/contacto"> <i class="fa fa-phone"></i>Contacto </a></li>
            <?php }?>
                    <!--li><a href="charts.html"> <i class="fa fa-bar-chart"></i>Charts </a></li>
                    <li><a href="forms.html"> <i class="icon-padnote"></i>Forms </a></li>
                    <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Example dropdown </a>
                      <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="#">Page</a></li>
                        <li><a href="#">Page</a></li>
                        <li><a href="#">Page</a></li>
                      </ul>
                    </li>
                    <li><a href="login.html"> <i class="icon-interface-windows"></i>Login page </a></li-->
          </ul>
          <!--span class="heading">Extras</span>
          <ul class="list-unstyled">
            <li> <a href="#"> <i class="icon-flask"></i>Demo </a></li>
            <li> <a href="#"> <i class="icon-screen"></i>Demo </a></li>
            <li> <a href="#"> <i class="icon-mail"></i>Demo </a></li>
            <li> <a href="#"> <i class="icon-picture"></i>Demo </a></li>
          </ul-->
        </nav>
