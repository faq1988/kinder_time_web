  <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom"><i class="fa fa-phone"></i> Crear establecimiento</h2>
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
                      <p>Por favor ingrese los datos requeridos para agregar un nuevo establecimiento</p>
                      <!--form action="<?=base_url()?>Establecimiento_controller/agregar_establecimiento" method="POST"-->                        
                        <?php echo form_open('Establecimiento_controller/agregar_establecimiento'); ?>
                         <div class="form-group">       
                          <label class="form-control-label">Nombre</label>
                          <input type="text" name="nombre" value="<?php echo set_value('nombre'); ?>"
                          placeholder="Nombre" class="form-control">
                          <?php echo form_error('nombre', '<span style="color:red">', '</span>'); ?>
                        </div>
                         <div class="form-group">       
                          <label class="form-control-label">Domicilio</label>
                          <input type="text" name="domicilio" value="<?php echo set_value('domicilio'); ?>"
                          placeholder="Domicilio" class="form-control">
                          <?php echo form_error('domicilio', '<span style="color:red">', '</span>'); ?>
                        </div>
                         <div class="form-group">       
                          <label class="form-control-label">Ciudad</label>
                          <input type="text" name="ciudad" value="<?php echo set_value('ciudad'); ?>"
                          placeholder="Ciudad" class="form-control">
                          <?php echo form_error('ciudad', '<span style="color:red">', '</span>'); ?>
                        </div>
                         <div class="form-group">       
                          <label class="form-control-label">País</label>
                          <input type="text" name="pais" value="<?php echo set_value('pais'); ?>"
                          placeholder="País" class="form-control">
                          <?php echo form_error('pais', '<span style="color:red">', '</span>'); ?>
                        </div>
                        <div class="form-group">       
                          <label class="form-control-label">Teléfono</label>
                          <input type="text" name="telefono" value="<?php echo set_value('telefono'); ?>"
                          placeholder="Teléfono" class="form-control">
                          <?php echo form_error('telefono', '<span style="color:red">', '</span>'); ?>
                        </div>
                        <div class="form-group">       
                          <label class="form-control-label">Email</label>
                          <input type="email" name="mail" value="<?php echo set_value('mail'); ?>" 
                          placeholder="Email" class="form-control">
                          <?php echo form_error('mail', '<span style="color:red">', '</span>'); ?>
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