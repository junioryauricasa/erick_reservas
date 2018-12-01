<?php include('_include/_header.php'); ?>

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
                          <input type="text" id="nombres" name="nombres" placeholder="Ingresa tus nombres completos" class="form-control">
                      </div>
                      <br>
                      <br>
                      <div class="col-md-6">
                        Apellidos:
                      </div>
                      <div class="col-md-6">
                        <input type="text" placeholder="Ingresa tus Apellidos completos" class="form-control" required="true">
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
                        <input type="text" id="numtarjeta" name="numtarjeta" placeholder="Ingresa tus Código de tarjeta" class="form-control" onkeypress="return numeros(event)">
                      </div>
                      <br>
                      <br>
                      <div class="col-md-6">
                        Titular de la tarjeta:
                      </div>
                      <div class="col-md-6">
                          <input type="text" placeholder="Titular de la tarjeta" class="form-control" required="true">
                      </div>
                      <br>
                      <br>
                      <div class="col-md-6">
                        Fecha de Caducidad:
                      </div>
                      <div class="col-md-6">
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
                      <div class="col-md-6">
                        <input type="number" placeholder="" class="form-control" maxlength="3" minlength="3">
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
                        <input type="mail" placeholder="" class="form-control" placeholder="Ingresa tu correo">
                      </div>
                      <br><br>
                      <div class="col-md-6">
                        Confirmar Correo Electrónico:
                      </div>
                      <div class="col-md-6">
                        <input type="mail" placeholder="" class="form-control" placeholder="Ingresa tu correo">
                      </div>
                      <br><br>
                      <div class="col-md-6">
                        Teléfono:
                      </div>
                      <div class="col-md-6">
                        <input type="number" placeholder="" class="form-control" placeholder="Ingresa tu teléfono">
                      </div>
                      <br><br>
                      <div class="col-md-12">
                        Ubigeo:
                      </div>

                      <div class="col-md-4">
                        <select name="" id="" class="form-control">
                          <option value="">Departamento</option>
                        </select>
                      </div>
                      <div class="col-md-4">
                        <select name="" id="" class="form-control">
                          <option value="">Provincia</option>
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

<?php include('_include/_footer.php'); ?>