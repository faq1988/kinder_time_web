  <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom"><i class="fa fa-cutlery"></i> Crear tarea</h2>
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
                      <p>Por favor ingrese los datos requeridos para agregar una nueva tarea</p>
                      <!--form action="<?=base_url()?>Tareas_controller/agregar_tarea" method="POST"-->
                        <?php echo form_open('Tareas_controller/agregar_tarea'); ?>
                         <div class="form-group">       
                          <label class="form-control-label">Fecha de entrega</label>
                          <input type="date" name="fecha" value="<?php echo set_value('fecha'); ?>" placeholder="Fecha de entrega" class="form-control">
                          <?php echo form_error('fecha', '<span style="color:red">', '</span>'); ?>
                        </div>
                         <div class="form-group">       
                          <label class="form-control-label">Materia</label>
                          <input type="text" name="materia" value="<?php echo set_value('materia'); ?>" placeholder="Materia" class="form-control">
                          <?php echo form_error('materia', '<span style="color:red">', '</span>'); ?>
                        </div>
                        <div class="form-group">       
                          <label class="form-control-label">Descripción</label>
                          <textarea name="descripcion" value="<?php echo set_value('descripcion'); ?>"
                            placeholder="Descripción" class="form-control"></textarea>
                          <?php echo form_error('descripcion', '<span style="color:red">', '</span>'); ?>
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