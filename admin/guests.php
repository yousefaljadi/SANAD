<?php  require_once 'includes/admin-header.php'  ?>
<?php// confirm_login(); ?>
<?php
$page = "post";
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
            <h1 class="h3 mb-0 text-gray-800">Guests </h1>

          </div>

<div>
<div>
<?php successMsg(); ?>
</div>
 </div>
          <!-- Content Row -->
          <div class="row justify-content-center">

              <?php

                    if (isset($_GET['source'])) {
                        $source = $_GET['source'];
                    } else {
                        $source = '';
                    }

                    switch ($source) {

                      case 75:
                      echo 'nice 75';
                        break;
                      default:
                      include 'includes/view-all-guests.php';
                      break;
                    }

                    ?>




          </div>



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

   <?php   require_once 'includes/admin-footer.php' ?>
