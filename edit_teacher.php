<?php

session_start();
include "./global/conexion.php";
error_reporting(E_ALL);
ini_set('display_errors', '1');





include "header.php";
include "sidebar.php";

$query = "SELECT * FROM teacher WHERE id = '".$_SESSION['id']."' ";
		$resultado = $conexion->query($query);
		$datos = $resultado->fetch_assoc();

?>

      <!-- ========== section start ========== -->
      <section class="section">
        <div class="container-fluid">
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
          <!-- ========== title-wrapper start ========== -->
              <div class="col-lg-6">
                  <div class="card-style settings-card-2 mb-30">
                    <div class="title mb-30">
                      <h6>Mi perfil</h6>
                      <div class="button__container col d-flex justify-content-around align-content-center flex-wrap">
                        <a class="btn border border-2 px-4" href="edit_teacher.php" >Edit</a>
                      </div>
                    </div>
                    
                      <div class="row">
                        <div class="col-12">
                          <div class="input-style-1">
                            <label>Nombre</label>
                            <div class="col offset-1 text-end text-sm-start">
                              <span><?php echo $datos["name"]; ?></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="input-style-1">
                            <label>Email</label>
                            <div class="col offset-1 text-end text-sm-start">
                              <span><?php echo $datos["email"]; ?></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="input-style-1">
                            <label>Password</label>
                            <div class="col offset-1 text-end text-sm-start">
                            <span type="password"></span><?php echo $datos["password"]; ?></span>
                            <!-- <span><input class="border-0" type="password" value="<?php echo $datos["password"]; ?>" /> </span> -->
                          </div>
                          </div>
                        </div>                         
                        
                        <div class="col-12">
                          <button class="main-btn primary-btn btn-hover">
                            Actualizar
                          </button>
                        </div>
                      </div>
                   
                  </div>
              <!-- End Row -->
            </div>
          </div>
        </div>
        <!-- end container -->
      </section>
      <!-- ========== section end ========== -->


<?php

include "footer.php";

?>
