<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom"><i class="icon-home"></i> Eventos</h2>
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
                      <h3 class="h4">Eventos</h3>
                    </div-->
                    <div class="card-body">

                      <center>
                      <div class="client-avatar"><img src="<?=base_url()?>assets/img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle">
                        <div class="status bg-green"></div>
                      </div>
                      </center>
                    </br>

                      <table class="table">
                        <thead>                          
                          <tr>
                            <th>#</th>
                            <th>Horario</th>
                            <th>Evento</th>
                            <th>Descripcion</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                              if (isset($eventos)){
                               for($i=0; $i<sizeof($eventos); $i++){ ?>
                          <tr>
                            <th scope="row"><?php echo $i+1;?></th>
                            <td><?php echo $eventos[$i]->fechahora;?></td>
                            <td><?php echo $eventos[$i]->accion;?></td>
                            <td><?php echo $eventos[$i]->descripcion;?></td>
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