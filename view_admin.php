<?php

session_start();

include "./modules/admin.php";


include "header.php";
include "sidebar.php";

?>

<!-- ========== section start ========== -->
<section class="section">
  <div class="container-fluid">

    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="title mb-30">
            <h2>Sistema escolar</h2>
          </div>
        </div>
        <!-- end col -->
        <div class="col-md-6">
          <div class="breadcrumb-wrapper mb-30">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#0">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Sistema Escolar
                </li>
              </ol>
            </nav>
          </div>
        </div>
        <!-- end col -->
      </div>
      <!-- end row -->
    </div>
    <!-- ========== title-wrapper end ========== -->
    <div class="row">
      <div class="col-xl-6 col-lg-4 col-sm-6">
        <div class="icon-card mb-30">
          <div class="icon purple">
            <i class="lni lni-cart-full"></i>
          </div>
          <div class="content">
            <h6 class="mb-10">Docentes</h6>
            <h3 class="text-bold mb-10">10</h3>
          </div>
        </div>
        <!-- End Icon Cart -->
      </div>
      <!-- End Col -->
      <div class="col-xl-6 col-lg-4 col-sm-6">
        <div class="icon-card mb-30">
          <div class="icon success">
            <i class="lni lni-dollar"></i>
          </div>
          <div class="content">
            <h6 class="mb-10">Alumnos</h6>
            <h3 class="text-bold mb-10">100</h3>
          </div>
        </div>

      </div>

      <!-- End Col -->
    </div>


    <div class="row">
      <div class="col-lg-12">
        <div class="card-style calendar-card mb-30">
          <div id="calendar-mini"></div>
        </div>
      </div>
      <!-- End Col -->
    </div>
    <!-- End Row -->
  </div>
  <!-- end container -->
</section>
<!-- ========== section end ========== -->


<?php

include "footer.php";

?>