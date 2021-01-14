<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center " href="index.php">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Aflam Admin<sup></sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item
<?php if ($page == "index") {
 echo "active";
} ?>
">
    <a class="nav-link" href="index.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Shop
  </div>








  <!-- Nav Item - Utilities Collapse Menu -->
  <li class="nav-item
<?php if ($page == "post") {
 echo "active";
} ?>
">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true"
      aria-controls="collapseUtilities">
      <i class="fas fa-cube"></i>
      <span>Guests</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Posts Actions:</h6>
        <a class="collapse-item" href="guests.php">View All Guests</a>
      </div>
    </div>
  </li>

  <hr class="sidebar-divider">





  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Admin
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item
<?php if ($page == "admin") {
 echo "active";
} ?>
">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
      aria-controls="collapsePages">
      <i class="fas fa-user    "></i>
      <span>Admin</span>
    </a>

    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Admin Actions:</h6>
        <a class="collapse-item" href="users.php">View All Admins</a>
        <a class="collapse-item" href="users.php?source=add-admin">Add New Admin</a>
        <!-- <a class="collapse-item" href="admin-profile.php">Profile</a> -->
        <a class="collapse-item" href="logout.php">Logout</a>



      </div>
    </div>
  </li>

  <!-- Nav Item - Charts -->
  <!-- <li class="nav-item">
    <a class="nav-link" href="charts.html">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Shop</span></a>
  </li> -->



  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
