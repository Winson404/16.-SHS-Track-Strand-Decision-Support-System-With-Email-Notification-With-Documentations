<title>SHStudent | Admin Profile Update</title>
<?php 
  include 'navbar.php';
  include '../sweetalert_messages.php'; 
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Admin information</h3>
              </div>
                <?php if(isset($_SESSION['success'])) { ?> 
                    <p class="alert alert-success position-absolute" role="alert" style="right: 0px; height: 46px;"><?php echo $_SESSION['success']; ?></p> 
                <?php unset($_SESSION['success']); } ?>

                <?php if(isset($_SESSION['invalid']) && isset($_SESSION['error'])) { ?>
                    <p class="alert alert-danger position-absolute" role="alert" style="right: 0px; height: 46px;"><?php echo $_SESSION['invalid']; ?> <?php echo $_SESSION['error']; ?></p>
                <?php unset($_SESSION['invalid']);  unset($_SESSION['error']);  } ?>


                <?php  if(isset($_SESSION['exists'])) { ?>
                    <p class="alert alert-danger position-absolute" role="alert" style="right: 0px; height: 46px;"><?php echo $_SESSION['exists']; ?></p>
                <?php unset($_SESSION['exists']); } ?>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="about_me_update_code.php" method="POST" enctype="multipart/form-data">
                     <input type="hidden" class="form-control" value="<?php echo $row['user_Id']; ?>" name="user_Id">
                     <div class="card-body">
                        <div class="row">
                            <!-- LOAD IMAGE PREVIEW -->
                            <div class="col-lg-12 mb-2">
                                <div class="form-group" id="user_preview">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>First name</label>
                                    <input type="text" class="form-control form-control-sm" name="firstname" required onkeyup="lettersOnly(this)" value="<?php echo $row['firstname']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-3">
                              <div class="form-group">
                                  <label>Middle name</label>
                                  <input type="text" class="form-control form-control-sm" name="middlename" required onkeyup="lettersOnly(this)" value="<?php echo $row['middlename']; ?>">
                              </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                  <label>Last name</label>
                                  <input type="text" class="form-control form-control-sm" name="lastname" required onkeyup="lettersOnly(this)" value="<?php echo $row['lastname']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-3">
                              <div class="form-group">
                                <label>Suffix name</label>
                                <input type="text" class="form-control form-control-sm" name="suffix" onkeyup="lettersOnly(this)" value="<?php echo $row['suffix']; ?>">
                              </div>
                            </div>
                            <div class="col-lg-3">
                              <div class="form-group">
                                  <label>Gender</label>
                                  <select class="custom-select custom-select-sm" name="gender" required>
                                       <?php if($row['gender'] == 'Male'): ?>
                                            <option value="<?php echo $row['gender']; ?>" selected><?php echo $row['gender']; ?></option>
                                            <option value="Female">Female</option>
                                       <?php else: ?>
                                            <option value="<?php echo $row['gender']; ?>" selected><?php echo $row['gender']; ?></option>
                                            <option value="Male">Male</option>
                                      <?php endif; ?>
                                   </select> 
                              </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                  <label>Date of Birth</label>
                                  <input type="date" class="form-control form-control-sm" name="dob" required value="<?php echo $row['dob']?>">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                  <label>Age</label>
                                  <input type="number" class="form-control form-control-sm" name="age" required value="<?php echo $row['age']; ?>">
                                </div>
                            </div>
                           <!--  <div class="col-lg-3">
                                 <div class="form-group">
                                    <label>Contact</label>
                                    <input type="number" class="form-control form-control-sm" pattern="[7-9]{1}[0-9]{9}" name="contact" required value="<?php //echo $row['contact']; ?>">
                                 </div>
                            </div> -->
                            <div class="col-auto form-group col-lg-3 form-control-sm">
                                <label >Contact number</label>
                                <div class="input-group">
                                  <div class="input-group-text form-control-sm">+63</div>
                                  <input type="tel" class="form-control form-control-sm" pattern="[7-9]{1}[0-9]{9}" id="contact" name="contact" placeholder = "9123456789" required maxlength="10" value="<?php echo $row['contact']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                  <label>Email address</label>
                                  <input type="email" class="form-control form-control-sm" name="email" required value="<?php echo $row['email']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                  <label>Barangay</label>
                                  <input type="text" class="form-control form-control-sm" name="Barangay" required value="<?php echo $row['barangay']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                  <label>Municipality</label>
                                  <input type="text" class="form-control form-control-sm" name="Municipality" required value="<?php echo $row['municipality']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                  <label>Province</label>
                                  <input type="text" class="form-control form-control-sm" name="Province" required value="<?php echo $row['province']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                  <label>Image</label>
                                  <input type="file" class="form-control-file form-control-sm" name="fileToUpload" onchange="newgetImagePreview(event)">
                                </div>
                            </div>
                        </div>
                   </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info" name="update_admin"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
         </div>
          <!--/.col (left) -->
          <!-- right column -->
          
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<script>
   function newgetImagePreview(event)
  {
    var image=URL.createObjectURL(event.target.files[0]);
    var imagediv= document.getElementById('user_preview');
    var newimg=document.createElement('img');
    imagediv.innerHTML='';
    newimg.src=image;
    newimg.width="90";
    newimg.height="90";
    newimg.style['border-radius']="50%";
    newimg.style['display']="block";
    newimg.style['margin-left']="auto";
    newimg.style['margin-right']="auto";
    newimg.style['box-shadow']="rgba(100, 100, 111, 0.2) 0px 7px 29px 0px";
    imagediv.appendChild(newimg);
  }



  function lettersOnly(input) {
      var regex = /[^a-z ]/gi;
      input.value = input.value.replace(regex, "");
    }

</script>

  <?php include 'footer.php'; ?>
 
</body>
</html>
