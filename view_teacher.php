<?php
session_start();
include("./global/conexion.php");

include "./modules/teacher.php";

include "header.php";
include "sidebar.php";

?>

<!-- ========== section start ========== -->
<section class="section mt-5">

  <div class="row">
    <div class="col-lg-12">
      <div class="card-style mb-30">
        <h6 class="mb-10">Profesores</h6>
        <p class="text-sm mb-20">
          Datos de los docentes
        </p>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Registro
        </button>

        <div class="table-wrapper table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>
                  <h6>ID</h6>
                </th>
                <th>
                  <h6>Nombre</h6>
                </th>
                <th>
                  <h6>Email</h6>
                </th>
                <th>
                  <h6>Teléfono</h6>
                </th>
                <th>
                  <h6>Asignatura</h6>
                </th>
                <th>
                  <h6>Editar</h6>
                </th>
                <th>
                  <h6>Eliminar</h6>
                </th>
              </tr>
              <!-- end table row-->
            </thead>
            <tbody>
              <?php

              $query = "SELECT * FROM teacher";
              $resultado = $conexion->query($query);
              while ($row = $resultado->fetch_assoc()) {

              ?>
                <tr>

                  <td class="min-width">
                    <p><?php echo $row['id']; ?></p>
                  </td>
                  <td class="min-width">
                    <p><?php echo $row['name']; ?></p>
                  </td>
                  <td class="min-width">
                    <p><?php echo $row['email']; ?></p>
                  </td>
                  <td class="min-width">
                    <p><?php echo $row['phone']; ?></p>
                  </td>
                  <td class="min-width">
                    <p><?php echo $row['asignatura']; ?></p>
                  </td>

                  <td>
                    <div class="action">
                      <button type="submit" class="text-success">
                        <a class="btn border border-2 px-4" href='settingsteacher.php?id=".$this -> id."'><i class="fa-solid fa-pen-to-square"></i></a>
                      </button>
                    </div>
                  </td>
                  <td>
                    <div class="action">
                      <button class="text-danger">
                        <i class="fa-sharp fa-solid fa-trash"></i>
                      </button>
                    </div>
                  </td>
                </tr>
                <!-- end table row -->
                <?php include 'modalteacher.php'; ?>

                <!--   end table row -->
              <?php } ?>


            </tbody>
          </table>
          <!-- end table -->

        </div>
      </div>
      <!-- end card -->
    </div>
    <!-- end col -->
  </div>
  <!-- end container -->
</section>
<!-- ========== section end ========== -->




<?php

include "footer.php";

?>