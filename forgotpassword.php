<?php 
  include 'topbar.php'; 
  include 'home-header.php'; 
  $conn = mysqli_connect("localhost","root","","shs_track_support"); 
?>

<body class="hold-transition login-page">
  <div class="login-box mt-5">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="#" class="h1"><b>Find your account</b></a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Please enter your email to search for your account.</p>

        <form action="sendcode.php" method="POST">
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          
        <div class="social-auth-links text-center mt-4">
          <button class="btn btn-block btn-primary" type="submit" name="search">Search</button>
          <p class="mt-1"><a href="login.php" class="text-center">Back to login</a></p>  
        </div>
        </form>
      </div>
    </div>
  </div>

<?php include 'footer.php'; ?>

