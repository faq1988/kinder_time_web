  <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom"><i class="fa fa-commenting-o"></i> Crear circular</h2>
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
                      <p>Por favor ingrese los datos requeridos para enviar una nueva circular</p>
                      <!--form action="<?=base_url()?>Menu_semanal_controller/agregar_menu" method="POST"-->
                        <?php echo form_open('Circulares_controller/enviar_circular'); ?>
                        

                        <div class="form-group">       
                        <label class="form-control-label">Enviar a</label>                          
                            <select name="destino" id="destino" class="form-control" onchange="habilitar(this.value);">
                              <option value="">Seleccione...</option>                              
                              <option value="Todos">Todos</option>
                              <option value="Clase">Una clase</option>
                              <option value="Alumno">Un alumno</option>                                                           
                            </select>   
                            <?php echo form_error('destino', '<span style="color:red">', '</span>'); ?>                       
                        </div>
                        <div class="form-group">       
                        <label class="form-control-label">Clase</label>    
                        <select name="clase" id="clase" class="form-control" disabled="true">                      
                            <?php
                              if (isset($clases)){
                               for($i=0; $i<sizeof($clases); $i++){ ?>

                              <option value="<?php echo $clases[$i]->id_clase;?>">
                                <?php echo $clases[$i]->descripcion;?>                                  
                              </option>
                              
                              <?php } }?>                                                                                      
                            </select>                          
                        </div>

                        <div class="form-group">       
                        <label class="form-control-label">Alumno</label>                          
                            <select name="alumno" id="alumno" class="form-control" disabled="true">
                             <?php
                              if (isset($alumnos)){
                               for($i=0; $i<sizeof($alumnos); $i++){ ?>

                              <option value="<?php echo $alumnos[$i]['tipo_doc'].'-'.$alumnos[$i]['doc'];?>">
                                <?php echo $alumnos[$i]['apellido'];?>, <?php echo $alumnos[$i]['nombre'];?>                                  
                              </option>
                              
                              <?php } }?>                                                           
                            </select>                          
                        </div>
                       
                         <div class="form-group">       
                          <label class="form-control-label">Asunto</label>
                          <input type="text" name="asunto" placeholder="Asunto" class="form-control" value="<?php echo set_value('asunto'); ?>">
                          <?php echo form_error('asunto', '<span style="color:red">', '</span>'); ?>
                        </div>                       
                         <div class="form-group">       
                          <label class="form-control-label">Mensaje</label>
                          <textarea name="comentario" placeholder="Comentario" class="form-control" value="<?php echo set_value('comentario'); ?>"></textarea>
                          <?php echo form_error('comentario', '<span style="color:red">', '</span>'); ?>
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

    <script>
    function habilitar(value)
    {
      if(value=="Clase")
      {
        // habilitamos
        document.getElementById("clase").disabled=false;
        document.getElementById("alumno").disabled=true;
      }else {
        if (value=="Alumno")
        {
          document.getElementById("alumno").disabled=false;
          document.getElementById("clase").disabled=true;
        }
        else
        {
        // deshabilitamos
        document.getElementById("clase").disabled=true;
        document.getElementById("alumno").disabled=true;
        }
      }
    }
  </script>


  </body>
</html>