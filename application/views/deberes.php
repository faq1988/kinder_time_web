<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom"><i class="icon-grid"></i> Tareas</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <!--div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Menú semanal            </li>
            </ul>
          </div-->
          <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                   
                    <!--div class="card-header d-flex align-items-center">
                      <h3 class="h4">Tareas</h3>
                    </div-->
                    <div class="card-body">
                      <table class="table">
                        <thead>                          
                          <tr>
                            <th>#</th>
                            <th>Alumno</th>
                            <th>Maestro</th>
                            <th>Materia</th>
                            <th>Descripcion</th>
                            <th>Entrega</th>
                            <th>Seleccionar</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                              if (isset($deberes)){
                               for($i=0; $i<sizeof($deberes); $i++){ ?>
                          <tr>
                            <th scope="row"><?php echo $deberes[$i]->id;?></th>
                            <td><?php echo $deberes[$i]->id_alumno;?></td>
                            <td><?php echo $deberes[$i]->id_maestro;?></td>
                            <td><?php echo $deberes[$i]->materia;?></td>
                            <td><?php echo $deberes[$i]->descripcion;?></td>
                            <td><?php echo $deberes[$i]->fecha_entrega;?></td>
                            <?php echo "<td><input type='checkbox' name='lista_deberes[]' value='". $deberes[$i]->id . "' </td>"; ?>
                          </tr>
                          <?php } }?>
                         
                        </tbody>
                      </table>
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
    <script src="<?=base_url()?>assets/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?=base_url()?>assets/vendor/chart.js/Chart.min.js"></script>
    <script src="<?=base_url()?>assets/vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="<?=base_url()?>assets/js/front.js"></script>
  </body>
</html>