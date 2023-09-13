<?php 
  
  include 'config.php';
  
  $sql = mysqli_query($conn, "SELECT * FROM visitor_count");
  $total_visitors = mysqli_num_rows($sql);

  $visitor_ip = $_SERVER['REMOTE_ADDR'];
  $date_registered = date('Y-m-d');
  //retrieving existing visitors 
  $query = mysqli_query($conn, "SELECT * FROM visitor_count WHERE visitor_ipAddress='$visitor_ip' AND visitDate='$date_registered'");
  if(mysqli_num_rows($query) < 1) {

    $insert = mysqli_query($conn, "INSERT INTO visitor_count (visitor_ipAddress, visitDate) VALUES ('$visitor_ip', '$date_registered')");
  }

  
  if(isset($_SESSION['admin_Id'])) {
      header('Location: Admin/dashboard.php');
  } elseif(isset($_SESSION['user_Id'])) {
      header("Location: User/senior_high_info.php");
  } else {
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SHStudent</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!---FAVICON ICON FOR WEBSITE--->
  <link rel="shortcut icon" type="image/png" href="images/13.png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="bootstrap.min.css">
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/ba6fe04144.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
</head>
<body>
<style>
header div nav ul  li.dropdown a.link:hover {
  color: #33ccff;
}
header div nav ul  li.dropdown a.link:not(:hover) {
  color:  grey;
}
header div nav ul  li a #cont:hover {
  color: #33ccff;
}
#cont {
  color:  grey;
}
</style>

  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.php" style="text-decoration: none;"><img src="images/13.png" alt="" width="55"></a></h1>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>

          <li><a class="active text-info" href="index.php">Home</a></li>
          <li class="dropdown"><a class="link" href="#"><span>ACADEMIC</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a class="link" href="#"><span>GAS</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a class="link" href="school_GAS.php">GAS Course</a></li>
                  <li><a class="link" href="school_GAS-back-up.php">Schools Offering GAS</a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="link" href="#"><span>ABM</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a class="link"href="school_ABM.php">ABM Course</a></li>
                  <li><a class="link"href="school_ABM-back-up.php">Schools Offering ABM</a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="link" href="#"><span>STEM</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a class="link"href="school_STEM.php">STEM Course</a></li>
                  <li><a class="link"href="school_STEM-back-up.php">Schools Offering STEM</a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="link"href="#"><span>HUMSS</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a class="link"href="school_HUMSS.php">HUMSS Course</a></li>
                  <li><a class="link"href="school_HUMSS-back-up.php">Schools Offering HUMSS</a></li>
                </ul>
              </li>
            </ul>
          </li>

          <li class="dropdown"><a class="link" href="#"><span>TVL</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a class="link" href="school_TVL.php"><span>TVL Course</span></a></li>
                <li><a class="link" href="school_TVL-back-up.php"><span>Schools Offering TVL</span></a></li>
              </ul>
          </li>


          <li class="dropdown"><a class="link" href="#"><span>SPORTS</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a  class="link" href="school_SPORTS.php"><span>SPORTS Course</span></a></li>
              <li><a class="link"  href="school_SPORTS-back-up.php"><span>School Offering SPORTS</span></a></li>
            </ul>
          </li>

          <li class="dropdown"><a class="link" href="#"><span>ARTS and DESIGN</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="link" href="school_ARTS_DESIGN.php"><span>ARTS and DESIGN Course</span></a></li>
              <li><a class="link" href="school_ARTS_DESIGN-back-up.php"><span>Schools Offering ARTS and DESIGN</span></a></li>
            </ul>
          </li>
          <li><a  href="contact.php" id="cont">Contact</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <a href="login.php" class="get-started-btn bg-info">Sign In</a>
    </div>
  </header>
  
<?php } ?>