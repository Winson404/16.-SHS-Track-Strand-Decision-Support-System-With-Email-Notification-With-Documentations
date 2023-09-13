<title>Assessment result | SHStudent</title>
<link rel="stylesheet" href="css/adminlte.min.css">
<?php include 'home-header.php';  ?>


<style>
  .small-box {
    box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
  }
</style>
 
  
   <main id="main">
    <section id="about" class="about mb-5">
      <div class="container" data-aos="fade-up" >
        <br>
        <h2 class="text-center mt-5" style="color: #17A2B8;"><b><u>SHS Track rankings according to your answers</u></b></h2>
        <hr>
        <div class="row d-flex justify-content-center  p-3"  data-aos="fade-left" data-aos-delay="100" >
              <?php 
                $i = 1;
                $date_registered = date('Y-m-d');
                $fetch = mysqli_query($conn, "SELECT COUNT(sort_Id) AS sort_Id, track_answer, assessment_date FROM track_sort WHERE assessment_date='$date_registered' && user_Id='$visitor_ip' GROUP BY track_answer ORDER BY sort_Id DESC");
                // ORIGINAL BELOW
                // $fetch = mysqli_query($conn, "SELECT COUNT(sort_Id) AS sort_Id, track_answer, assessment_date FROM track_sort WHERE (assessment_date='$date_registered' || assessment_date='') AND (user_Id='$visitor_ip' || user_Id=0) GROUP BY track_answer ORDER BY sort_Id DESC");
                if(mysqli_num_rows($fetch) > 0) {
                while($row = mysqli_fetch_array($fetch)){ 
                ?>

              <?php if($row['track_answer'] == 'ACADEMIC'): ?>
              <div class="col-lg-3 col-6">
                <div class="small-box bg-info rounded p-3">
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
                <div class="small-box bg-warning rounded p-3">
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
                <div class="small-box bg-success rounded p-3">
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
                <div class="small-box bg-danger rounded p-3">
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
                <h2 class="text-center p-3">You haven't took your assessment yet.</h2>
              <?php } ?>
            <p class="mt-3"><b>NOTE:</b> To proceed with the assessment for each SHS Track, click <b>Take Assessment</b> button under each track.</p>
        </div>
      </div>
    </section>

  </main>

<?php include 'home-footer.php'; include 'sweetalert_messages.php'; ?>
