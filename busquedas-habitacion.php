<?php 
  include('_include/_header.php'); 
  $hoy = date("Y-m-d");
  $manana = date('Y-m-d', strtotime('+1 day',strtotime($hoy)));
?>

    <!-- Page Content -->
    <div class="container">
      <div class="row" style="margin-top: 50px">
          <div class="col-lg-6 col-md-6 mb-12" style="text-align: center; margin: 0 auto">
            <h1 style="text-align: center">Fecha de Reserva</h1>
            <form action="#" method="POST" style="text-align: center; margin: 0 auto">
            <!--form action="resultados-busquedas.php" method="POST" style="text-align: center; margin: 0 auto"-->

              <table style="width: 100%">
                <tr>
                  <td><label for="from">Fecha Entrada: </label></td>
                  <td>
                    <!--input type="date" id="from" name="from" min=""-->
                    <input type="date" name="from" id="from" placeholder="Introduce una fecha" min="<?php echo $hoy;?>" value="<?php echo $hoy;?>" class="form-control" required/>
                  </td>
                </tr>
                <tr>
                  <td><label for="to">Fecha Salida: </label></td>
                  <td>
                    <!--input type="date" id="to" name="to"-->
                    <input type="date" name="to" id="to" placeholder="Introduce una fecha" class="form-control" min="<?php echo $manana;?>" required/>
                  </td>
                </tr>
                <tr>
                  <td><span>Habitación: </span></td>
                  <td>
                    <select name="" id="" class="form-control">
                      <option value="201">201</option>
                      <option value="202">202</option>
                      <option value="203">203</option>
                      <option value="204">204</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td><span>Huespedes: </span></td>
                  <td>
                    <select name="" id="" class="form-control">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td>
                    <br>
                    <input type="submit" value="Buscar" class="btn btn-danger">
                  </td>
                </tr>
              </table>
              <br>
            </form>
          </div>
      </div>
    </div>
    <!-- /.container -->


  <script>
    $(function() {
      $("#from").datepicker({minDate:0});
    });
  </script>

<?php include('_include/_footer.php'); ?>