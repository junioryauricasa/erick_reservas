<?php include('_include/_header.php'); ?>

    <!-- Page Content -->
    <div class="container">
      <div class="row" style="margin-top: 50px">
          <div class="col-lg-6 col-md-6 mb-12" style="text-align: center; margin: 0 auto">
            <h1 style="text-align: center">Fecha de Reserva</h1>
            
            <form action="resultados-busquedas.php" method="POST" style="text-align: center; margin: 0 auto">
              <table style="width: 100%">
                <tr>
                  <td><span>Fecha Entrada: </span></td>
                  <td>
                    <input type="date" class="form-control" placeholder="">
                  </td>
                </tr>
                <tr>
                  <td><span>Fecha Salida: </span></td>
                  <td>
                    <input type="date" class="form-control" placeholder="">
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

    <!-- Footer >
    <footer class="py-5 bg-dark" style="margin-top: 70px">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
    </footer-->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script>
function recargar()
{
location.href=location.href
}
setInterval('recargar()',2000)
</script>

  </body>

</html>
