<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Mensajes</h2>
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
                      <h3 class="h4">Mensajes</h3>
                    </div-->
                    <div class="card-body">

                             <div class="row">

                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" >

                                        <div class="list-group list-group-horizontal" style="display: inline-block">
                                            <a href="#" class="list-group-item active btn" style="display: inline-block">Eliminar</a>
                                            <a href="#" class="list-group-item active btn" style="display: inline-block">Marcar</a>
                                            <a href="#" class="list-group-item active btn" style="display: inline-block">Responder</a>
                                            <a href="#" class="list-group-item active btn" style="display: inline-block">Reenviar</a>
                                        </div>

                                    </div>


                              </div>

                            </br>



                      <table class="table">
                        <thead>                          
                          <tr>
                            <th>Seleccionar</th>
                            <th>#</th>
                            <th>Asunto</th>
                            <th>Mensaje</th>
                            <th>Fecha</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                              if (isset($mensajes)){
                               for($i=0; $i<sizeof($mensajes); $i++){ ?>
                          <tr>
                            <?php echo "<td><input type='checkbox' name='lista_mensajes[]' value='". $mensajes[$i]->id . "' </td>"; ?>
                            <th scope="row"><?php echo $mensajes[$i]->id;?></th>
                            <td><?php echo $mensajes[$i]->asunto;?></td>
                            <td><?php echo $mensajes[$i]->mensaje;?></td>
                            <td><?php echo $mensajes[$i]->fechahora;?></td>
                          </tr>
                          <?php } }else
                          echo "Aún no posee ningún mensaje";

                            ?>
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