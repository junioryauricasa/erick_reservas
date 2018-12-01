<?php 
	//variables
	$nombres = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$tipotarjeta = $_POST['tipotarjeta'];
	$numtarjeta = $_POST['numtarjeta'];
	$titulartarjeta = $_POST['titulartarjeta'];
	$mescaduca = $_POST['mescaduca'];
	$aniocaduca = $_POST['aniocaduca'];
	$codigocvc = $_POST['codigocvc'];
	$mail = $_POST['mail'];
	$cmail = $_POST['cmail'];
	$telefono = $_POST['telefono'];
	$id_departamento = $_POST['id_departamento'];
	$municipio = $_POST['municipio'];
	$distrito = $_POST['distrito'];
	$solicitud = $_POST['solicitud'];

	//include('conexion.php');

	include('_include/_header.php'); 
?>
    <!-- Page Content -->
    <div class="container" style="margin-top: 30px">
      <div class="row">
        <div class="col-lg-12">
          <div class="row" style="margin-bottom: 40px">
              <div class="col-lg-12 col-md-12 mb-12">
              	<h1>Resultado de Reserva:</h1>
                <p>
                	<ul>
                		<li>Nombres: <?php echo $nombres ?></li>
                		<li>Apellidos: <?php echo $apellidos ?></li>
                		<li>Tipo Tarjeta: <?php echo $tipotarjeta; ?></li>
                		<li>Numero de Tarjeta: <?php echo $numtarjeta; ?></li>
                		<li>Titular de Tarjeta: <?php echo $titulartarjeta; ?></li>
                		<li>Caducidad: <?php echo $mescaduca."/".$aniocaduca ?></li>
                		<li>CVC: <?php echo $codigocvc; ?></li>
                		<li>Email: <?php echo $mail ?></li>
                		<li>Telefono: <?php echo $telefono ?></li>
                		<li>Ubigeo: <?php echo $id_departamento."/".$municipio."/".$distrito ?></li>
                		<li>Solicitud: <?php echo $solicitud; ?></li>
                	</ul>
                </p>
                
                <?php 

					// Insert
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "db_modular";

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
					    die("Connection failed: " . $conn->connect_error);
					} 

					$sql = "INSERT INTO tb_rsvhabitacion (intidreshabitacion, nvchnombre, nvchapellido, inttipotarjeta, numtarjeta, mescaduca, aniocaduca, codigocvc, email, telf, dep, prov, dist, solicitud) VALUES (NULL, '$nombres', '$apellidos', '$tipotarjeta', '$numtarjeta', '$mescaduca ', '$aniocaduca', '$codigocvc', '$mail', '$telefono', '$id_departamento', '$municipio', '$distrito', '$solicitud');";

					if ($conn->query($sql) === TRUE) {
					    echo '
					    <div class="alert alert-success" role="alert">
						  <strong>Exito!</strong> Se registro tu reserva.
						</div>
						';
					} else {
					    echo "Error: " . $sql . "<br>" . $conn->error;
					    echo '
						    <div class="alert alert-danger" role="alert">
							  <strong>Error!</strong>'.$sql.$conn->error;'
							</div>
					    ';
					}
					$conn->close();
					// END Insert

                ?>
                <br>
                <a href="busquedas-habitacion.html" class="btn btn-danger">Buscar Habitaciones</a>
              </div>
          </div>

          <div class="row">

            <!--div class="col-lg-6 col-md-6 mb-4">
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
            </div-->


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
