<?php

session_start();
include "./global/conexion.php";
error_reporting(E_ALL);
ini_set('display_errors', '1');


include "../template/modules/admin.php";


include "header.php";
include "sidebar.php";

$query = "SELECT * FROM user WHERE id = '".$_SESSION['id']."' ";
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
                    </div>
                    <form action="guardar.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $datos["id"]; ?>" />
                      <div class="row">
                        <div class="col-12">
                          <div class="input-style-1">
                            <label>Nombre</label>
                            <input type="text" name="name" placeholder="Nombre" value="<?php echo $datos["name"]; ?>" />
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="input-style-1">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Email" value="<?php echo $datos["email"]; ?>" />
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="input-style-1">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Password" value="<?php echo $datos["password"]; ?>" />
                          </div>
                        </div>                         
                        
                        <div class="col-12">
                          <button class="main-btn primary-btn btn-hover">
                            Actualizar
                          </button>
                        </div>
                      </div>
                    </form>
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