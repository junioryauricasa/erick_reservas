<?php 
  include('_include/_header.php'); 
  include("conexion.php");
?>

    <!-- Page Content -->
    <div class="container" style="margin-top: 30px">
      <div class="row">
        <div class="col-lg-12">
          <div class="row" style="margin-bottom: 40px">
              <div class="col-lg-12 col-md-12 mb-12">
                <h1>Formulario de registro de habitación</h1>
                <br>
                <div class="col-md-6">
                  <form action="" method="POST">
                    <div class="row">
                      <div class="col-md-6">
                        Nombres Completos:
                      </div>
                      <div class="col-md-6">
                          <input type="text"  onkeypress="return soloLetras(event)" maxlength="25" id="nombres" name="nombres" placeholder="Ingresa tus nombres completos" class="form-control" required="true">
                      </div>
                      <br>
                      <br>
                      <div class="col-md-6">
                        Apellidos:
                      </div>
                      <div class="col-md-6">
                        <input type="text"  onkeypress="return soloLetras(event)" maxlength="25" placeholder="Ingresa tus Apellidos completos" class="form-control" required="true">
                      </div>
                      <br>
                      <br>

                      <div class="col-md-12">
                        <b>Forma de Pago</b>
                      </div>
                      <br>
                      <br>
                      <div class="col-md-6">
                        Tarjeta de Crédito:
                      </div>
                      <div class="col-md-6">
                        <select name="" id="" class="form-control">
                          <option value="">Visa</option>
                          <option value="">Master Card</option>
                          <option value="">Dinners Club</option>
                        </select>
                      </div>
                      <br>
                      <br>
                      <div class="col-md-6">
                        Número de Tarjeta de Crédito: 
                      </div>
                      <div class="col-md-6">
                        <input type="text" id="numtarjeta" minlength="14" maxlength="16" name="numtarjeta" placeholder="Ingresa tus Código de tarjeta" class="form-control" onkeypress="return numeros(event)" required="true">
                      </div>
                      <br>
                      <br>
                      <div class="col-md-6">
                        Titular de la tarjeta:
                      </div>
                      <div class="col-md-6">
                          <input type="text" onkeypress="return soloLetras(event)" maxlength="50" placeholder="Titular de la tarjeta" class="form-control" required="true">
                      </div>
                      <br>
                      <br>
                      <div class="col-md-6">
                        Fecha de Caducidad:
                      </div>
                      <div class="col-md-3">
                          <select name="" id="" class="form-control" style="margin-bottom: 5px">
                            <option value="">01</option>
                            <option value="">02</option>
                            <option value="">03</option>
                            <option value="">04</option>
                            <option value="">05</option>
                            <option value="">06</option>
                            <option value="">07</option>
                            <option value="">08</option>
                            <option value="">09</option>
                            <option value="">10</option>
                            <option value="">11</option>
                            <option value="">12</option>
                          </select>

                          <select name="" id="" class="form-control">
                            <option value="">2018</option>
                            <option value="">2019</option>
                            <option value="">2020</option>
                            <option value="">2021</option>
                            <option value="">2022</option>
                            <option value="">2023</option>
                            <option value="">2024</option>
                          </select>
                      </div>
                      <br>
                      <br>
                      <div class="col-md-6">
                        Código CVC:
                      </div>
                      <div class="col-md-2">
                        <input type="text" placeholder="" class="form-control" maxlength="3" minlength="3" onkeypress="return numeros(event)">
                      </div>

                      <br><br>
                      <div class="col-md-12">
                        <b>Información de contacto</b>
                      </div>
                      <br><br>
                      <div class="col-md-6">
                        Correo Electrónico: 
                      </div>
                      <div class="col-md-6">
                        <input type="mail" placeholder="" class="form-control" placeholder="Ingresa tu correo" required="true">
                      </div>
                      <br><br>
                      <div class="col-md-6">
                        Confirmar Correo Electrónico:
                      </div>
                      <div class="col-md-6">
                        <input type="mail" placeholder="" class="form-control" placeholder="Ingresa tu correo" required="true">
                      </div>
                      <br><br>
                      <div class="col-md-6">
                        Teléfono:
                      </div>
                      <div class="col-md-6">
                        <input type="text" placeholder="" minlength="6" maxlength="12" class="form-control" placeholder="Ingresa tu teléfono" onkeypress="return numeros(event)">
                      </div>
                      <br><br>
                      <div class="col-md-12">
                        Ubigeo:
                      </div>

                      <div class="col-md-4">
                        

<select id = "id_departamento" class = "form-control" name = "id_departamento" required = "required">
  <option value = "">DEPARTAMENTO</option>
  <?php
    $sql = $conn->prepare("SELECT * FROM ubdepartamento");
    if($sql->execute()){
      $g_result = $sql->get_result();
    }
    while($row = $g_result->fetch_array()){
  ?>
    <option value = "<?php echo $row['idDepa']?>">
      <?php echo utf8_encode($row['departamento'])?>
    </option>
  <?php
      }
    $conn->close(); 
  ?>
</select>


                      </div>
                      <div class="col-md-4">
                        <select  id="municipio" name="municipio"  class="form-control" disabled="disabled" required="required">
                        <option value="">PROVINCIA</option>
                      </select>
                      </div>
                      <div class="col-md-4">
                        <select name="" id="" class="form-control">
                          <option value="">Distrito</option>
                        </select>
                      </div>

                      <br><br>
                      <div class="col-md-12">
                        Solicitud Especial (opcional)
                      </div>
                      <div class="col-md-12">
                        <textarea name="" id="" cols="30" rows="10" class="form-control">
                          
                        </textarea>
                      </div>
                    </div>
                    <br>
                    <input type="submit" value="Reservar" class="btn btn-info">

                  </form>
                </div>
                
              </div>
          </div>

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->



    <script>
    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
</script>

<?php include('_include/_footer.php'); ?>

<!-- SELECT UBIGEO DEPENDIENTES -->
<script type = "text/javascript">
  $(document).ready(function(){
    $('#id_departamento').on('change', function(){
        if($('#id_departamento').val() == ""){
          $('#municipio').empty();
          $('<option value = "">Selecciona un municipio</option>').appendTo('#municipio');
          $('#municipio').attr('disabled', 'disabled');
        }else{
          $('#municipio').removeAttr('disabled', 'disabled');
          $('#municipio').load('municipio_get.php?id_departamento=' + $('#id_departamento').val());
        }
    });
  });
</script>
<!-- END SELECT UBIGEO DEPENDIENTES -->