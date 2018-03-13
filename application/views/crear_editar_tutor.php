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
            <h2 class="no-margin-bottom"><i class="fa fa-fw fa-plus"></i> Crear/Editar Tutor</h2>
          </div>
        </header>

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
                    <p>Por favor ingrese los datos del Tutor</p>
                    <form id='form' action="<?=base_url()?>Alumno_controller/crear_editar_tutor" method="POST">
                      <input name='alumno' value=<?php echo $alumno?> hidden />
                      <div class="form-group">
                        <label class="form-control-label">Tipo Documento</label>
                        <select name='tipo_doc'>
                          <option value=<?php echo DNI ?>><?php echo map_documento(DNI)?></option>
                          <option value=<?php echo DNM ?>><?php echo map_documento(DNM)?></option>
                          <option value=<?php echo DNF ?>><?php echo map_documento(DNF)?></option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label class="form-control-label">Documento</label>
                        <input type="text" name="doc" placeholder="Documento" class="form-control" value="<?php echo ($tutor) ? $tutor['doc']:'' ?>">
                      </div>
                      <div class="form-group doc2" style="display: none;">
                        <label class="form-control-label">Confirme Documento</label>
                        <input type="text" name="doc2" placeholder="Documento" class="form-control" >
                      </div>
                      <div class="form-group">
                       <label class="form-control-label">Relacion</label>
                       <select name='tutor_type'>
                         <option value=<?php echo MADRE ?> <?php echo (($tutor['vinculo']==MADRE) ? 'selected':'')?>> Madre</option>
                         <option value=<?php echo PADRE ?> <?php echo (($tutor['vinculo']==PADRE) ? 'selected':'')?>> Padre</option>
                         <option value=<?php echo TUTOR ?> <?php echo (($tutor['vinculo']==TUTOR) ? 'selected':'')?>> Tutor</option>
                       </select>
                     </div>
                       <div class="form-group">
                        <label class="form-control-label">Nombre</label>
                        <input type="text" name="nombre" placeholder="Nombre" class="form-control" value="<?php echo ($tutor) ? $tutor['nombre']:'' ?>">
                      </div>
                       <div class="form-group">
                        <label class="form-control-label">Apellido</label>
                        <input type="text" name="apellido" placeholder="Apellido" class="form-control" value="<?php echo ($tutor) ? $tutor['apellido']:'' ?>">
                      </div>
                      <div class="form-group">
                        <label class="form-control-label">Edad</label>
                        <input type="text" name="edad" placeholder="Edad" class="form-control" value="<?php echo ($tutor) ? $tutor['edad']:'' ?>">
                      </div>
                      <div class="form-group">
                        <label class="form-control-label">Email</label>
                        <input type="email" name="email" placeholder="Email Address" class="form-control"  value="<?php echo ($tutor) ? $tutor['email']:'' ?>">
                      </div>
                      <div class="form-group">
                        <label class="form-control-label">Dirección</label>
                        <input type="text" name="direccion" placeholder="Dirección" class="form-control" value="<?php echo ($tutor) ? $tutor['direccion']:'' ?>">
                      </div>
                      <div class="form-group">
                        <label class="form-control-label">Ciudad</label>
                        <input type="text" name="ciudad" placeholder="Ciudad" class="form-control" value="<?php echo ($tutor) ? $tutor['ciudad']:'' ?>">
                      </div>
                       <center>
                      <div class="form-group">
                        <input id='btn_aceptar' value="Aceptar" class="btn btn-primary">
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

<script>
  $("input[name='doc']").focus(function(e){
    $(".doc2").css('display','block');
  });
  $("#btn_aceptar").click(function(){
    if($("input[name='doc']").val()!=$("input[name='doc2']").val()){
      $("input[name='doc2']").val('');
      alert('Los documentos ingresados no coinciden');
    }
    else{
      $("#form").submit();
    }
  });
</script>
