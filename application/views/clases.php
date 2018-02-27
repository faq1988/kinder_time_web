<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom"><i class="fa fa-fw fa-arrow-circle-right"></i> Asignar aula</h2>
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

                       <?php
  echo form_open('Alumno_controller/asignar_alumnos_clases');

  ?>

<center>
<div class="btn-group btn-group-lg" data-toggle="buttons">
  <label class="btn btn-primary">
    <input type="radio" name="clase" value="1" id="option1" autocomplete="off"> Sala uno
  </label>
  <label class="btn btn-primary">
    <input type="radio" name="clase" value="2" id="option2" autocomplete="off"> Sala dos
  </label>
  <label class="btn btn-primary">
    <input type="radio" name="clase" value="3" id="option3" autocomplete="off"> Sala tres
  </label>

</div>

</br>
</br>

                      <table class="table">
                        <thead>                          
                          <tr>
                             <th>#</th>
                              <th>DNI</th>
                              <th>Nombre</th>
                              <th>Edad</th>
                              <th>Seleccionar</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                              if (isset($alumnos)){
                               for($i=0; $i<sizeof($alumnos); $i++){ ?>
                          <tr>
                            <th scope="row"><?php echo $alumnos[$i]->id;?></th>
                            <td><?php echo $alumnos[$i]->dni;?></td>
                            <td><?php echo $alumnos[$i]->apellido;?>, <?php echo $alumnos[$i]->nombre;?></td>
                            <td><?php echo $alumnos[$i]->edad;?></td>
                            <?php echo "<td><input type='checkbox' name='lista_alumnos[]' value='". $alumnos[$i]->id . "' </td>"; ?>
                          </tr>
                          <?php } }?>
                         
                        </tbody>
                      </table>
                        
                        <div class="form-group">       
                          <input type="submit" value="Aceptar" class="btn btn-primary">
                        </div>
                                  
                  <?php echo form_close();?>

                    </div>
</center>
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