<div class="content-inner">
        <!-- Page Header-->
        <header class="page-header">
          <div class="container-fluid">
            <h2 class="no-margin-bottom"><i class="fa fa-group"></i> Crear/Editar Clase</h2>
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
                    <p>Por favor ingrese los datos requeridos para crear/editar una Clase</p>
                    <!--form action="<?=base_url()?>Aulas_controller/agregar_aula" method="POST"-->
                      <?php echo form_open('Aulas_controller/agregar_aula'); ?>
                      <div class="form-group">
                        <label class="form-control-label">Nombre</label>
                        <input type="text" name="nombre" value="<?php echo set_value('nombre'); ?>"
                        placeholder="Nombre" class="form-control">
                        <?php echo form_error('nombre', '<span style="color:red">', '</span>'); ?>
                      </div>
                      <div class="form-group">
                        <label class="form-control-label">Maestro</label>
                        <select name='maestro'>
                          <?php
                            foreach ($maestros as $key => $maestro) {
                              echo "<option value='".$maestro['tipo_doc']."|".$maestro['doc']."'>
                                   ".$maestro['apellido'].", ".$maestro['nombre']."
                                    </option>";
                            }
                          ?>
                        </select>
                        <?php echo form_error('capacidad', '<span style="color:red">', '</span>'); ?>
                      </div>
                      <div class="form-group">
                        <label class="form-control-label">Dias</label>
                        <select name='dias' multiple>
                          <option value='0'>Lunes</option>
                          <option value='1'>Martes</option>
                          <option value='2'>Miercoles</option>
                          <option value='3'>Jueves</option>
                          <option value='4'>Viernes</option>
                          <option value='5'>Sabado</option>
                          <option value='6'>Domingo</option>
                        </select>
                        <?php echo form_error('capacidad', '<span style="color:red">', '</span>'); ?>
                      </div>
                      <div class="form-group">
                        <label class="form-control-label">Entrada</label>
                        <input type="text" name="entrada" value='00:00' placeholder="00:00" class="form-control">
                        <?php echo form_error('capacidad', '<span style="color:red">', '</span>'); ?>
                      </div>
                      <div class="form-group">
                        <label class="form-control-label">Salida</label>
                        <input type="text" name="salida" value='00:00' placeholder="00:00" class="form-control">
                        <?php echo form_error('capacidad', '<span style="color:red">', '</span>'); ?>
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
