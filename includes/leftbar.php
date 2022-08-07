<!DOCTYPE html>
<html lang="en">
  <head>
 
    <title>Med-Drive Admin Portal</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
 
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
  </head>
  
  <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="dashboard.php"><img src="assets/images/logo1.png" alt="logo" style="width:90%; height:130%; margin-top:-10px;" /></a>
          <a class="navbar-brand brand-logo-mini" href="dashboard.php"><img src="assets/images/logo.jpeg" alt="logo" style="width:60%; height:70%; margin-top:8px"/></a>
 
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
      
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
         
         
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
               
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
         
                <a class="dropdown-item" href="../logout.php">
                <i class="mdi mdi-logout mr-2 text-primary"></i> Logout </a>
            
              </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
           
      </nav>
      <!-- partial -->
	  <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
           
            <li class="nav-item">
				<a class="nav-link" href="dashboard.php">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Vehicles</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-car menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="post-avehical.php">Add Vehicle</a></li>
                  <li class="nav-item"> <a class="nav-link" href="manage-vehicles.php">Manage Vehicle</a></li>
                </ul>
              </div>


              
            </li>
            <li class="nav-item">
              <a class="nav-link" href="manage-bookings.php">
                <span class="menu-title">Manage Bookings</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="testimonials.php">
                <span class="menu-title">Manage Testimonials</span>
                <i class="mdi mdi-message-text-outline menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="manage-conactusquery.php">
                <span class="menu-title">Manage Contact Us</span>
                <i class="mdi mdi-cellphone-android menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="reg-users.php">
                <span class="menu-title">Registeres Users</span>
                <i class="mdi mdi-human-male-female menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Services</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-medical-bag menu-icon"></i>
              </a>
          
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="add-providers.php"> Add Service Providers </a></li>
                  <li class="nav-item"> <a class="nav-link" href="reg-serviceproviders.php"> Manage Service Providers </a></li>
                </ul>
              </div>
            </li>
  
          
          </ul>
        </nav>
      
  
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
   
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
        <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
  