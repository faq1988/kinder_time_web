  <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom"><i class="fa fa-fw fa-plus"></i> Detalle de alumno</h2>
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
          <section>
              <div class="col-md-6 col-lg-12">
                  <div class="card">
                    <!--img src="https://www.hotelplayamazatlan.com/wp-content/uploads/2012/12/header-man.jpg" alt="Card image cap" class="card-img-top img-fluid"-->
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $alumno[0]->nombre; ?>, <?php echo $alumno[0]->apellido; ?></h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Tutores:</li>
                      <li class="list-group-item">DNI: <?php echo $alumno[0]->doc ?>  </li>
                      <li class="list-group-item">Edad: <?php echo $alumno[0]->edad; ?></li>
                      <li class="list-group-item">Dirección: <?php echo $alumno[0]->direccion; ?></li>
                      <li class="list-group-item">Ciudad: <?php echo $alumno[0]->ciudad; ?></li>
                      <li class="list-group-item">Fecha de nacimiento: <?php echo $alumno[0]->nacimiento; ?></li>
                      <li class="list-group-item">Correo electrónico: <?php echo $alumno[0]->email; ?></li>
                    </ul>
                    <div class="card-body"><a href="#" class="card-link">Card link</a><a href="#" class="card-link">Another link here</a></div>
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