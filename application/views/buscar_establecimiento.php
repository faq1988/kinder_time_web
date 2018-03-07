<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom"><i class="fa fa-commenting-o"></i> Establecimientos</h2>
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
                      <h3 class="h4">Circulares</h3>
                    </div-->
                    <div class="card-body">

                      <div class="row">

                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" >

                                        <div class="list-group list-group-horizontal" style="display: inline-block">
                                            <a href="<?=base_url()?>Welcome/crear_establecimiento" class="list-group-item active btn" style="display: inline-block"><i class="fa fa-fw fa-plus"></i> Crear</a>                      
                                            
                                        </div>

                                    </div>


                              </div>

                            </br>

                      <table class="table">
                        <thead>                          
                          <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Domicilio</th>
                            <th>Ciudad</th>
                            <th>Pais</th>
                            <th>Teléfono</th>
                            <th>Email</th>
                            <th>Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                              if (isset($establecimientos)){
                               for($i=0; $i<sizeof($establecimientos); $i++){ ?>
                          <tr>
                            <th scope="row"><?php echo $establecimientos[$i]->id;?></th>
                            <td><?php echo $establecimientos[$i]->nombre;?></td>
                            <td><?php echo $establecimientos[$i]->domicilio;?></td>
                            <td><?php echo $establecimientos[$i]->ciudad;?></td>
                            <td><?php echo $establecimientos[$i]->pais;?></td>
                            <td><?php echo $establecimientos[$i]->telefono;?></td>
                            <td><?php echo $establecimientos[$i]->mail;?></td>
                            <td>
                                <a href="<?php echo base_url() ?>Welcome/ver_establecimiento/<?php echo $establecimientos[$i]->id; ?>"> <i title="Ver" class="fa fa-fw fa-eye"></i></a>
                                                         
                                <a href="<?php echo base_url() ?>Establecimiento_controller/eliminar_establecimiento/<?php echo $establecimientos[$i]->id; ?>"> <i title="Eliminar" class="fa fa-fw fa-trash-o"></i></a>
                              </td>
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