<?php  require_once 'includes/admin-header.php'  ?>

<?php
$page = "index";
?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php  require_once 'includes/admin-sidebar.php'  ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php  require_once 'includes/admin-topbar.php'  ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center  mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

          </div>

<div>
<?php successMsg(); ?>
 </div>
          <!-- Content Row -->
          <div class="row">

          <?php

          $sql_t_p = " SELECT * FROM guests ";
          $result_t_p = query($sql_t_p);
          $t_p = row_count($result_t_p);

          ?>

            <!-- Earnings (Monthly) Card Example -->


            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><h6>Total Guests</h6></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $t_p; ?></div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->


            <!-- Pending Requests Card Example -->

          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->


            <!-- Pie Chart -->

          </div>

          <!-- Content Row -->


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

   <?php   require_once 'includes/admin-footer.php' ?>
