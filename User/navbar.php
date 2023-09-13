<?php
    include '../config.php';
    
    if(isset($_SESSION['user_Id'])) {
    $id = $_SESSION['user_Id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SHS Track and Strand Decision Support System</title>

  <!---FAVICON ICON FOR WEBSITE--->
  <link rel="shortcut icon" type="image/png" href="../images/13.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="../css/fontawesome-free/css/all.min.css"> -->
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/ba6fe04144.js" crossorigin="anonymous"></script>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../css/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../css/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../css/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../css/summernote-bs4.min.css">

  <!-- BOOTSTRAP ICONS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

  <!-- TOASTER -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
  

  <!-- DataTables -->
  <link rel="stylesheet" href="../css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../css/buttons.bootstrap4.min.css">

  <script src="../js/bootstrap5-downloaded-ni-erwin/bootstrap.bundle.min.js" type="text/javascript"></script>
  <style>
  .modal-content{
    -webkit-box-shadow: 0 5px 15px rgba(0,0,0,0);
    -moz-box-shadow: 0 5px 15px rgba(0,0,0,0);
    -o-box-shadow: 0 5px 15px rgba(0,0,0,0);
    box-shadow: 0 5px 15px rgba(0,0,0,0);
}
</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">

  
<div class="wrapper">

  <!-- Preloader -->
 <!--  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item">
        <a href="dashboard.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item">
        <a href="about_me.php" class="nav-link">About me</a>
      </li> -->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

    <?php 
        $admin = mysqli_query($conn, "SELECT * FROM users WHERE user_Id='$id'");
        $row = mysqli_fetch_array($admin);
    ?>

      <li class="mt-1">
        <a href="dashboard.php" class="nav-link">Home</a>
      </li>
    <!--   <li class="mt-1">
        <a href="about_me.php" class="nav-link">About me</a>
      </li> -->

      <li class="nav-item dropdown">
        <li class="nav-link mt-1" data-toggle="dropdown">
          <p class="" type="button">
            <img src="../images-users/<?php echo $row['image']; ?>" alt="" style="width: 20px; height: 20px; border-radius: 50%">
            <?php echo ' '.$row['firstname'].' '.$row['lastname'].''; ?> 
            <i class="fa-solid fa-caret-down"></i>
          </p>
        </li>
        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
          <a href="about_me.php" class="dropdown-item">
            <i class="fa-solid fa-user"></i> My Profile
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item"  onclick="logout()">
            <i class="fa-solid fa-power-off"></i> Logout
          </a>
        </div>
      </li>
      <!-- <li class="mt-1">
        <a class="mt-3">Today is <?php //echo date("l"); ?> | <?php //echo date("d, M Y"); ?></a>
      </li> -->


      <!-- FULL SCREEN -->
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li> -->
      <!-- FULL SCREEN -->


      <!-- RIGHT SIDEBAR -->
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
      <!-- RIGHT SIDEBAR -->

    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="senior_high_info.php" class="brand-link">
      <img src="../dist/img/logo.png"  class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">&nbsp;&nbsp;&nbsp;SHStudent</span>
    </a>

   
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../images-users/<?php echo $row['image']; ?>" alt="User Image" style="height: 34px; width: 34px; border-radius: 50%;">
        </div>
        <div class="info">
          <a href="about_me.php" class="d-block"><?php echo ' '.$row['firstname'].' '.$row['middlename'].' '.$row['lastname'].' '.$row['suffix'].' '; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- <li class="nav-item menu-open">
            <a href="dashboard.php" class="nav-link active bg-warning"><i class="nav-icon fas fa-tachometer-alt"></i><p>Dashboard</p></a>
          </li> -->

          <li class="nav-header text-secondary">SHS TRACKS</li>
          <li class="nav-item">
            <a href="#" class="nav-link text-light">
              <i class="fa-solid fa-folder-open"></i>
              <p>&nbsp;&nbsp; Track<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="academic_track.php" class="nav-link text-light">
                  <i class="fa-solid fa-book"></i>
                  <p>&nbsp;&nbsp; Academic Tracks</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="tvl_track.php" class="nav-link text-light">
                  <i class="fa-solid fa-compass-drafting"></i>
                  <p>&nbsp;&nbsp; TVL Tracks</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="sports_track.php" class="nav-link text-light">
                  <i class="fa-solid fa-volleyball"></i>
                  <p>&nbsp;&nbsp; Sports Tracks</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="arts_design_track.php" class="nav-link text-light">
                  <i class="fa-sharp fa-solid fa-palette"></i>
                  <p>&nbsp;&nbsp; Arts and Designs Tracks</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-header text-secondary">ASSESSMENT</li>
          <li class="nav-item">
            <a href="#" class="nav-link text-light">
              <i class="fa-solid fa-pen-to-square"></i>
              <p>&nbsp;&nbsp; Assessment<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="assessment.php" class="nav-link text-light">
                  <i class="fa-solid fa-pen-to-square"></i>
                  <p>&nbsp;&nbsp; Take Assessment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="history.php" class="nav-link text-light">
                  <i class="fa-solid fa-clock-rotate-left"></i>
                  <p>&nbsp;&nbsp; History</p>
                </a>
              </li>
            </ul>
          </li>

         <!--  <li class="nav-item">
            <a href="assessment.php" class="nav-link"><i class="fa-solid fa-square-poll-vertical"></i><p>&nbsp;&nbsp; Assessment result</p></a>
          </li>

          <li class="nav-item">
            <a href="assessment.php" class="nav-link"><i class="fa-sharp fa-solid fa-circle-info"></i><p>&nbsp;&nbsp; SHS Track and Strand</p></a>
          </li>
 -->
    
          <li class="nav-header text-secondary">SYSTEM SETTINGS</li>
          <li class="nav-item">
            <a href="#" class="nav-link text-light">
              <i class="fa-solid fa-gear"></i>
              <p>&nbsp;&nbsp; Settings<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="about_me.php" class="nav-link text-light">
                  <i class="fa-solid fa-user"></i>
                  <p>&nbsp;&nbsp; Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="changepassword.php" class="nav-link text-light">
                  <i class="fa-solid fa-key"></i>
                  <p>&nbsp;&nbsp; Change password</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-header text-secondary">EXIT</li>
          <li class="nav-header text-light" onclick="logout()"><h6 type="button"><i class="fa-solid fa-power-off"></i>&nbsp;&nbsp; Logout</h6></li>
          <!-- <li class="nav-item">
            <a href="" data-toggle="modal" data-target="#logoutmodal" class="nav-link"><i class="fa-solid fa-power-off"></i><p>&nbsp; Logout</p></a>
          </li> -->

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>



 <!-------------------------------LOGOUT MODAL------------------------------------>
     <!--  <div class="modal fade" id="logoutmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
             <div class="modal-header alert-info">
              <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-user-large"></i> User logout</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fa-solid fa-circle-xmark"></i></span>
              </button>
            </div>
            <div class="modal-body">
              <form action="../logout.php" method="POST">
                <?php ///if($row['gender'] === 'Male'):?>
                    <h6 class="text-center">Mr. <?php ///echo $row['lastname'];?>, are you sure you want to logout?</h6>
                <?php ///else: ?>
                    <h6 class="text-center">Ma'am <?php ///echo $row['lastname'];?>, are you sure you want to logout?</h6>
                <?php/// endif; ?>
            </div>
            <div class="modal-footer alert-light">
              <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-ban"></i> Cancel</button>
              <button type="submit" class="btn btn-info"><i class="fa-solid fa-circle-check"></i> Confirm</button>
            </div>
              </form>
          </div>
        </div>
      </div> -->
  <!-------------------------------END LOGOUT MODAL-------------------------------->

<script src="../sweetalert2.min.js"></script>
  <script>
    
    function logout() {
        swal({
          title: 'Are you sure you want to logout?',
          text: "You won't be able to revert this!",
          icon: "warning",
          buttons: true,
          // dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            window.location = "../logout.php";
          } else {
          }
        });
    }

</script>



<?php
// ------------------------------CLOSING THE SESSION OF THE LOGGED IN USER WITH else statement----------//
    } else {
     header('Location: ../index.php');
    }
?>
