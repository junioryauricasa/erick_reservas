<?php include('_include/_header.php'); ?>

    <!-- Page Content -->
    <div class="container" style="margin-top: 30px">
      <div class="row">
        <div class="col-lg-12">
          <div class="row" style="margin-bottom: 40px">
              <div class="col-lg-12 col-md-12 mb-12">
              	<h1>Estos son los detalles de tu habitación</h1>
                <p>
                	<ul>
                		<li>Cantidad de Huespedes: </li>
                		<li>Fecha Entrada: </li>
                		<li>Fecha Salida: </li>
                		<li>Número de Noches: </li>
                	</ul>
                </p>
                <a href="busquedas-habitacion.html" class="btn btn-danger">Realizar otra busqueda</a>
              </div>
          </div>

          <div class="row">

            <div class="col-lg-6 col-md-6 mb-4">
              <div class="">
                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                      <img class="d-block img-fluid" src="https://http2.mlstatic.com/D_NQ_NP_940203-MPE27866704859_072018-K.jpg" alt="First slide" width="100%">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block img-fluid" src="http://tambolodge.pe/wp-content/uploads/2016/10/09e785_530589d4c271481086825f6b666020a9-mv2-1-400x400.jpg" alt="Second slide" width="100%">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block img-fluid" src="http://tambolodge.pe/wp-content/uploads/2016/10/09e785_798c73ac8a454253afd774d4847dfc44-mv2-400x400.jpg" alt="Third slide" width="100%">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 mb-4">
              <div class="">
                <p>
                  <b>Descripción: </b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi praesentium corrupti, at nostrum obcaecati minus accusamus similique, excepturi eos illum dolore, laudantium rerum fuga veritatis quam. Expedita culpa consequatur laudantium.
                </p>
                <a href="reservar-habitacion.php" class="btn btn-info">Reservarlo Ahora</a>
              </div>
            </div>


          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark" style="margin-top: 70px">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
