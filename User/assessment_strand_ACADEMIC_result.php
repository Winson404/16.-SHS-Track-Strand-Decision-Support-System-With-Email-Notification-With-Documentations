<title>SHStudent | STRAND RESULT</title>
<?php include 'navbar.php'; include '../sweetalert_messages.php';  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Strand assessment result</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Strand assessment result</li>
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
                <div class="card-body bg-light">
                <h3 class="p-1 text-center"><a href="#" class="text-dark"><b>Academic Strand rankings according to your answers</b></a></h3>
                <hr>               
                  <div class="row d-flex justify-content-center p-3">
                    <?php 
                    $i = 1;
                    $date_registered = date('Y-m-d');
                    $fetch = mysqli_query($conn, "SELECT COUNT(sort_Id) AS s, strand_answer, assessment_date FROM academic_strand_sort WHERE (assessment_date='$date_registered' || assessment_date='') AND user_Id='$id' GROUP BY strand_answer ORDER BY s DESC");
                    // $fetch = mysqli_query($conn, "SELECT COUNT(sort_Id) AS s, strand_answer, assessment_date FROM academic_strand_sort WHERE (assessment_date='$date_registered' || assessment_date='') AND (user_Id='$id' || user_Id=0) GROUP BY strand_answer ORDER BY s DESC");
                    if(mysqli_num_rows($fetch) > 0) {
                    while($row = mysqli_fetch_array($fetch)){ 
                    ?>

                    <?php if($row['strand_answer'] == 'ABM'): ?>
                    <div class="col-lg-3 col-6">
                      <div class="small-box bg-info">
                        <div class="inner">
                          <h3>Rank <?php echo $i++; ?></h3>
                          <p><?php echo $row['strand_answer']; ?></p>
                        </div>
                        <div class="icon">
                          <i class="fa-solid fa-business-time"></i>
                        </div>
                        <a href="view_ABM_info.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>

                    <?php elseif ($row['strand_answer'] == 'HUMSS'): ?>
                    <div class="col-lg-3 col-6">
                      <div class="small-box bg-warning">
                        <div class="inner">
                          <h3>Rank <?php echo $i++; ?></h3>
                          <p><?php echo $row['strand_answer']; ?></p>
                        </div>
                        <div class="icon">
                          <i class="fa-solid fa-fingerprint"></i>
                        </div>
                        <a href="view_HUMSS_info.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>

                    <?php elseif ($row['strand_answer'] == 'STEM'): ?>
                    <div class="col-lg-3 col-6">
                      <div class="small-box bg-success">
                        <div class="inner">
                          <h3>Rank <?php echo $i++; ?></h3>
                          <p><?php echo $row['strand_answer']; ?></p>
                        </div>
                        <div class="icon">
                          <i class="fa-solid fa-microchip"></i>
                        </div>
                        <a href="view_STEM_info.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>

                    <?php else: ?>
                    <div class="col-lg-3 col-6">
                      <div class="small-box bg-danger">
                        <div class="inner">
                          <h3>Rank <?php echo $i++; ?></h3>
                          <p><?php echo $row['strand_answer']; ?></p>
                        </div>
                        <div class="icon">
                          <i class="fa-solid fa-brain"></i>
                        </div>
                        <a href="view_GAS_info.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <?php endif; ?>

                    <?php
                      } } else {
                    ?>
                      <h2>You haven't took your assessment yet.</h2>
                    <?php } ?>
                      
                  </div>
                  <p><b>NOTE:</b> To view possible courses and school who offer each SHS Academic strand, click <b>More info</b> button under each strand.</p>
                </div>
            </div>
         </div>
        </div>
      </div>
    </section>
</div>



<?php include 'footer.php'; ?>
 

