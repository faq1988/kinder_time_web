  <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom"><i class="fa fa-phone"></i> Contacto</h2>
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
                      <p>Por favor ingrese los datos requeridos para realizar su consulta</p>
                      <form action="<?=base_url()?>Sistema_controller/nuevo_contacto" method="POST">
                         <div class="form-group">       
                          <label class="form-control-label">Nombre</label>
                          <input type="text" name="nombre" placeholder="Nombre" class="form-control">
                        </div>
                         <div class="form-group">       
                          <label class="form-control-label">Apellido</label>
                          <input type="text" name="apellido" placeholder="Apellido" class="form-control">
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">Email</label>
                          <input type="email" name="email" placeholder="Email" class="form-control">
                        </div>
                         <div class="form-group">       
                          <label class="form-control-label">Teléfono</label>
                          <input type="text" name="telefono" placeholder="Teléfono" class="form-control">
                        </div>
                         <div class="form-group">       
                          <label class="form-control-label">Comentario</label>
                          <textarea name="comentario" placeholder="Comentario" class="form-control"></textarea>
                        </div>
                        <center>
                        <div class="form-group">       
                          <input type="submit" value="Enviar" class="btn btn-primary">
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