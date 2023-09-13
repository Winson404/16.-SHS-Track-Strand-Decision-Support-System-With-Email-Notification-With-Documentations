<?php 
  include 'topbar.php'; 
  include 'home-header.php'; 
  $conn = mysqli_connect("localhost","root","","shs_track_support"); 
?>
<style>
  .learnmore {
    color: #33bbff;
  }
  .learnmore:hover {
    opacity: .8;
  }
</style>
<body class="hold-transition login-page">
  <div class="login-box mt-5">

  <?php 
      if(isset($_POST['changepassword'])) {

        $user_Id = $_POST['user_Id'];
        $cpassword = md5($_POST['cpassword']);
        $update = mysqli_query($conn, "UPDATE users SET password='$cpassword' WHERE user_Id='$user_Id'");

        if($update) {

            $_SESSION['message'] = "Password has been changed. Please login to your account.";
            $_SESSION['text'] = "Successfully changed";
            $_SESSION['status'] = "success";

            include 'sweetalert_messages.php';

            echo '<script>window.history.go(+1); </script>';
  ?>

  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Login</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="processes.php" method="POST">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" id="password" name="password" minlength="8" maxlength="16">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" onclick="myFunction()">
              <label for="remember">
                Show password
              </label>
            </div>
          </div>
        </div>
      <div class="social-auth-links text-center mt-4">
        <button class="btn btn-block btn-primary" type="submit" name="login">Sign-in</button>
        <p class="mt-1"><a href="forgotpassword.php" class="text-center learnmore">Forgot password?</a></p>  
        <!-- <hr> -->
      </div>
      </form>

      <!-- <p class="mt-3"><a href="register.php" class="text-center learnmore">Create new account</a></p> -->
    </div>
  </div>

<?php } else { 

            $_SESSION['message'] = "Something went wrong while changing your password.";
            $_SESSION['text'] = "Please try again";
            $_SESSION['status'] = "error";

            include 'sweetalert_messages.php';

            echo '<script>window.history.go(-1); </script>';

} } else { ?>

       <div class="card card-outline card-primary">
          <div class="card-header text-center">
            <a href="#" class="h1"><b>Login</b></a>
          </div>
          <div class="card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="processes.php" method="POST">
              <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Email" name="email">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password" id="password" name="password" minlength="8" maxlength="16">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-8">
                  <div class="icheck-primary">
                    <input type="checkbox" id="remember" onclick="myFunction()">
                    <label for="remember">
                      Show password
                    </label>
                  </div>
                </div>
              </div>
            <div class="social-auth-links text-center mt-4">
              <button class="btn btn-block btn-primary" type="submit" name="login">Sign-in</button>
              <p class="mt-1"><a href="forgotpassword.php" class="text-center learnmore">Forgot password?</a></p>  
              <!-- <hr> -->
            </div>
            </form>

            <!-- <p class="mt-3"><a href="register.php" class="text-center learnmore">Create new account</a></p> -->
            <!-- <p style="margin-top: -20px;"><a href="index.php" class="text-center">Back to home</a></p> -->

          </div>
        </div>

<?php } ?>

</div>

<?php 
    include 'footer.php'; 
    include 'sweetalert_messages.php';
?>


<script>

  function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

</script>