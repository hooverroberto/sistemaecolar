<?php
session_start();


include "../template/modules/student.php";

include "header.php";
include "sidebar.php";

?>

      <!-- ========== section start ========== -->
      <section class="section mt-5">
      <div class="col-lg-12">
                <div class="card-style mb-30">
                  <h6 class="mb-10">Alumnos</h6>
                  <p class="text-sm mb-20">
                    Alumnos del plantel
                  </p>
                  <div class="table-wrapper table-responsive">
                    <table class="table striped-table">
                      <thead>
                        <tr>
                          <th></th>
                          <th><h6>Nombre</h6></th>
                          <th><h6>Apellidos</h6></th>
                          <th><h6>Usuario</h6></th>                   
                          <th><h6>Editar</h6></th>
                          <th><h6>Elimnar</h6></th>
                        </tr>
                        <!-- end table row-->
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <h6 class="text-sm">#1</h6>
                          </td>
                          <td>
                            <p>Albert</p>
                          </td>
                          <td>
                            <p>Miles</p>
                          </td>
                          <td>
                            <p>@albert_miles</p>
                          </td>
                          <td>
                            <div class="action">
                              <button class="text-success">
                              <i class="fa-solid fa-pen-to-square"></i>
                           
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
                        <tr>
                          <td>
                            <h6 class="text-sm">#2</h6>
                          </td>
                          <td>
                            <p>John</p>
                          </td>
                          <td>
                            <p>Doe</p>
                          </td>
                          <td>
                            <p>@john_doe</p>
                          </td>
                          <td>
                            <div class="action">
                              <button class="text-success">
                              <i class="fa-solid fa-pen-to-square"></i>
                           
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
                        <tr>
                          <td>
                            <h6 class="text-sm">#3</h6>
                          </td>
                          <td>
                            <p>David</p>
                          </td>
                          <td>
                            <p>Smith</p>
                          </td>
                          <td>
                            <p>@davidsmith</p>
                          </td>
                          <td>
                            <div class="action">
                              <button class="text-success">
                              <i class="fa-solid fa-pen-to-square"></i>
                           
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
                      </tbody>
                    </table>
                    <!-- end table -->
                  </div>
                </div>
                <!-- end card -->
              </div>
        <!-- end container -->
      </section>
      <!-- ========== section end ========== -->


<?php

include "footer.php";

?>
