<?php function map_documento($val){
    switch($val){
      case DNI: return 'D.N.I.';break;
      case DNM: return 'D.N.M.';break;
      case DNF: return 'D.N.F.';break;
    }
}?>

<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom"><i class="fa fa-user"> </i> Alumnos</h2>
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
                      <h3 class="h4">Alumnos</h3>
                    </div-->
                    <div class="card-body">

                         <div class="row">

                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" >

                                        <div class="list-group list-group-horizontal" style="display: inline-block">
                                            <a href="<?=base_url()?>Welcome/crear_alumno" class="list-group-item active btn" style="display: inline-block"><i class="fa fa-fw fa-plus"></i> Crear</a>
                                            <a href="<?=base_url()?>Welcome/buscar_autorizaciones" class="list-group-item active btn" style="display: inline-block"><i class="fa fa-fw fa-bullhorn"></i> Autorizaciones</a>
                                            <a href="<?=base_url()?>Welcome/buscar_inasistencias" class="list-group-item active btn" style="display: inline-block"><i class="fa fa-fw fa-check-square-o"></i> Inasistencias</a>

                                        </div>

                                    </div>


                              </div>

                            </br>

                      <table class="table">
                        <thead>
                          <tr>
                            <th>Tipo</th>
                            <th>Documento</th>
                            <th>Nombre</th>
                            <th>Edad</th>
                            <th>Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                              if (isset($alumnos)){
                               for($i=0; $i<sizeof($alumnos); $i++){ ?>
                          <tr>
                             <td scope="row"><?php echo map_documento($alumnos[$i]['tipo_doc']);?></td>
                             <td scope="row"><?php echo $alumnos[$i]['doc'];?></td>
                              <td><?php echo $alumnos[$i]['apellido'];?>, <?php echo $alumnos[$i]['nombre'];?></td>
                              <td><?php echo $alumnos[$i]['edad'];?></td>
                              <td>
                                <a href="<?php echo base_url() ?>Welcome/ver_alumno/<?php echo $alumnos[$i]['tipo_doc'].'/'.$alumnos[$i]['doc']; ?>"> <i title="Ver" class="fa fa-fw fa-eye"></i></a>
                                <a href="<?php echo base_url() ?>Welcome/crear_editar_tutor/<?php echo  $alumnos[$i]['tipo_doc'].'/'.$alumnos[$i]['doc']; ?>"> <i title="Agregar/Editar Tutor" class="fa fa-fw fa-user-circle"></i></a>
                                <a href="<?php echo base_url() ?>Alumno_controller/eliminar_alumno/<?php echo  $alumnos[$i]['tipo_doc'].'-'.$alumnos[$i]['doc'];?>"> <i title="Eliminar" class="fa fa-fw fa-trash-o"></i></a>
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
