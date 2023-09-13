<title>SHStudent | TRACK RESULT</title>
<?php include 'navbar.php'; include '../sweetalert_messages.php';  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Track assessment result</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Track assessment result</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <div class="col-md-11">
            <div class="card card-info">
              <div class="card-header">
              </div>
                <div class="card-body">
                <h3 class="p-1 text-center"><a href="#" class="text-dark"><b>SHS Track rankings according to your answers</b></a></h3>
                <hr>
                  <div class="row d-flex justify-content-center p-3">
                    <?php 
                      $i = 1;
                      $date_registered = date('Y-m-d');
                      $fetch = mysqli_query($conn, "SELECT *, COUNT(sort_Id) AS sort_Id FROM track_sort WHERE (assessment_date='$date_registered' || assessment_date='') AND user_Id='$id' GROUP BY track_answer ORDER BY sort_Id DESC");
                      // $fetch = mysqli_query($conn, "SELECT *, COUNT(sort_Id) AS sort_Id FROM track_sort WHERE (assessment_date='$date_registered' || assessment_date='') AND (user_Id='$id' || user_Id=0) GROUP BY track_answer ORDER BY sort_Id DESC");
                      if(mysqli_num_rows($fetch) > 0) {
                      while($row = mysqli_fetch_array($fetch)){ 
                      ?>

                    <?php if($row['track_answer'] == 'ACADEMIC'): ?>
                    <div class="col-lg-3 col-6">
                      <div class="small-box bg-info">
                        <div class="inner">
                          <h3>Rank <?php echo $i++; ?></h3>
                          <p><?php echo $row['track_answer']; ?></p>
                        </div>
                        <div class="icon">
                          <i class="fa-sharp fa-solid fa-pen-to-square"></i>
                        </div>
                        <a href="assessment_strand_ACADEMIC.php" class="small-box-footer">Take Assessment <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>

                    <?php elseif ($row['track_answer'] == 'TVL'): ?>
                    <div class="col-lg-3 col-6">
                      <div class="small-box bg-warning">
                        <div class="inner">
                          <h3>Rank <?php echo $i++; ?></h3>
                          <p><?php echo $row['track_answer']; ?></p>
                        </div>
                        <div class="icon">
                          <i class="fa-solid fa-gear"></i>
                        </div>
                        <a href="assessment_strand_TVL.php" class="small-box-footer">Take Assessment <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>

                    <?php elseif ($row['track_answer'] == 'SPORTS'): ?>
                    <div class="col-lg-3 col-6">
                      <div class="small-box bg-success">
                        <div class="inner">
                          <h3>Rank <?php echo $i++; ?></h3>
                          <p><?php echo $row['track_answer']; ?></p>
                        </div>
                        <div class="icon">
                          <i class="fa-solid fa-volleyball"></i>
                        </div>
                        <a href="view_SPORTS_info.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>

                    <?php else: ?>
                    <div class="col-lg-3 col-6">
                      <div class="small-box bg-danger">
                        <div class="inner">
                          <h3>Rank <?php echo $i++; ?></h3>
                          <p><?php echo $row['track_answer']; ?></p>
                        </div>
                        <div class="icon">
                          <i class="fa-brands fa-artstation"></i>
                        </div>
                        <a href="view_ARTS_DESIGN_info.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <?php endif; ?>

                    <?php
                      } } else {
                    ?>
                      <h2>You haven't took your assessment yet.</h2>
                    <?php } ?>
                      
                  </div>
                  <p><b>NOTE:</b> To proceed with the assessment for each SHS Track, click <b>Take Assessment</b> button under each track.</p>
                </div>
            </div>
         </div>
        </div>
      </div>
    </section>
</div>



<?php include 'footer.php'; ?>
 

