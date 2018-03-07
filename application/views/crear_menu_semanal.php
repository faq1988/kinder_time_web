  <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom"><i class="fa fa-cutlery"></i> Crear menú</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <!--div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?=base_url()?>">KinderTime</a></li>
              <li class="breadcrumb-item active">Contacto            </li>
            </ul>
          </div-->
          <!-- Forms Section-->
          
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
                <!-- Basic Form-->
                
                <div class="col-lg-12">
                  <div class="col d-flex justify-content-center">
                  
                <div class="card">
                   
                    <!--div class="card-header d-flex align-items-center">
                      <h3 class="h4">Contacto</h3>
                    </div-->
                    <div class="card-body">
                      <p>Por favor ingrese los datos requeridos para agregar un nuevo menú</p>
                      <form action="<?=base_url()?>Menu_semanal_controller/agregar_menu" method="POST">
                         <div class="form-group">       
                          <label class="form-control-label">Fecha</label>
                          <input type="date" name="fecha" value="<?php echo set_value('fecha'); ?>" placeholder="Fecha" class="form-control">
                          <?php echo form_error('fecha', '<span style="color:red">', '</span>'); ?>
                        </div>
                         <div class="form-group">       
                          <label class="form-control-label">Desayuno</label>
                          <input type="text" name="desayuno" value="<?php echo set_value('desayuno'); ?>" placeholder="Desayuno" class="form-control">
                          <?php echo form_error('desayuno', '<span style="color:red">', '</span>'); ?>
                        </div>
                         <div class="form-group">       
                          <label class="form-control-label">Almuerzo</label>
                          <input type="text" name="almuerzo" value="<?php echo set_value('almuerzo'); ?>" placeholder="Almuerzo" class="form-control">
                          <?php echo form_error('almuerzo', '<span style="color:red">', '</span>'); ?>
                        </div>
                         <div class="form-group">       
                          <label class="form-control-label">Merienda</label>
                          <input type="text" name="merienda" value="<?php echo set_value('merienda'); ?>" placeholder="Merienda" class="form-control">
                          <?php echo form_error('merienda', '<span style="color:red">', '</span>'); ?>
                        </div>
                         <div class="form-group">       
                          <label class="form-control-label">Cena</label>
                          <input type="text" name="cena" value="<?php echo set_value('cena'); ?>" placeholder="Cena" class="form-control">
                          <?php echo form_error('cena', '<span style="color:red">', '</span>'); ?>
                        </div>
                       
                        <center>
                        <div class="form-group">       
                          <input type="submit" value="Aceptar" class="btn btn-primary">
                        </div>
                        </center>
                      </form>
                    </div>
                  </div>
                </div>
                </div>
                
                
            
              </div>
            </div>
          </section>
          <!-- Page Footer-->
           <?php include 'footer.php';?>

        </div>
      </div>
    </div>
    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>