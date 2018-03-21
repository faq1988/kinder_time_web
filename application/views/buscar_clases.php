<?php
  function map_dias($dias){
    $days=array('Lun','Mar','Mie','Jue','Vie','Sab','Dom');
    $darr=str_split($dias);
    $res=array();
    for ($i=0; $i < count($darr); $i++) {
      if($darr[$i]){
        array_push($res,$days[$i]);
      }
    }
    return implode(',',$res);
  }
 ?>
<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom"><i class="fa fa-group"></i> Clases</h2>
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
                      <h3 class="h4">Aulas</h3>
                    </div-->
                    <div class="card-body">

                       <div class="row">

                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" >

                                        <div class="list-group list-group-horizontal" style="display: inline-block">
                                            <a href="<?=base_url()?>Welcome/crear_editar_clase" class="list-group-item active btn" style="display: inline-block"><i class="fa fa-fw fa-plus"></i> Crear</a>
                                            <a href="<?=base_url()?>Welcome/asignar_clases" class="list-group-item active btn" style="display: inline-block"><i class="fa fa-fw fa-arrow-circle-right"></i> Asignar</a>
                                        </div>

                                    </div>


                              </div>

                            </br>

                      <table class="table">
                        <thead>
                          <tr>
                           <th>#</th>
                            <th>Nombre</th>
                            <th>Maestro</th>
                            <th>Días</th>
                            <th>Duración</th>
                            <th>Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                              if (isset($clases)){
                               for($i=0; $i<sizeof($clases); $i++){ ?>
                          <tr>
                             <th scope="row"><?php echo $clases[$i]['id_clase'];?></th>
                              <td><?php echo $clases[$i]['descripcion'];?></td>
                              <td><?php echo $clases[$i]['descripcion'];?></td>
                              <td><?php echo map_dias($clases[$i]['dias']);?></td>
                              <td nowrap><?php echo 'entrada: '.$clases[$i]['hr_entrada'].' - salida: '.$clases[$i]['hr_salida'];?></td>
                              <td>
                              <a href="<?php echo base_url() ?>Clases_controller/eliminar_clase/<?php echo  $clases[$i]['id_clase'];?>"> <i title="Eliminar" class="fa fa-fw fa-trash-o"></i></a>
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
