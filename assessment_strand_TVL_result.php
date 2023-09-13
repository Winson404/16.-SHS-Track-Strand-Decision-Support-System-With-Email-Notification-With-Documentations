<title>TVL Assessment result | SHStudent</title>
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
        <h2 class="text-center mt-5" style="color: #17A2B8;"><b><u>TVL Strand rankings according to your answers</u></b></h2>
        <hr>
        <div class="row d-flex justify-content-center  p-3"  data-aos="fade-left" data-aos-delay="100" >
              <?php 
                    $i = 1;
                    $date_registered = date('Y-m-d');
                    $fetch = mysqli_query($conn, "SELECT COUNT(sort_Id) AS s, strand_answer, assessment_date FROM tvl_strand_sort WHERE (assessment_date='$date_registered' || assessment_date='') AND user_Id='$visitor_ip' GROUP BY strand_answer ORDER BY s DESC");
                    // $fetch = mysqli_query($conn, "SELECT COUNT(sort_Id) AS s, strand_answer, assessment_date FROM tvl_strand_sort WHERE (assessment_date='$date_registered' || assessment_date='') AND (user_Id='$id' || user_Id=0) GROUP BY strand_answer ORDER BY s DESC");

                    if(mysqli_num_rows($fetch) > 0) {
                    while($row = mysqli_fetch_array($fetch)){ 
                    ?>

            <?php if($row['strand_answer'] == 'ICT'): ?>
                    <div class="col-lg-3 col-6">
                      <div class="small-box bg-info">
                        <div class="inner">
                          <h3>Rank <?php echo $i++; ?></h3>
                          <p><?php echo $row['strand_answer']; ?></p>
                        </div>
                        <div class="icon">
                          <i class="fa-solid fa-computer"></i>
                        </div>
                        <a href="view_ICT_info.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>

                    <?php elseif ($row['strand_answer'] == 'Industrial Arts'): ?>
                    <div class="col-lg-3 col-6">
                      <div class="small-box bg-warning">
                        <div class="inner">
                          <h3>Rank <?php echo $i++; ?></h3>
                          <p><?php echo $row['strand_answer']; ?></p>
                        </div>
                        <div class="icon">
                          <i class="fa-solid fa-industry"></i>
                        </div>
                        <a href="view_INDUSTRIAL_info.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>

                    <?php elseif ($row['strand_answer'] == 'HE'): ?>
                    <div class="col-lg-3 col-6">
                      <div class="small-box bg-success">
                        <div class="inner">
                          <h3>Rank <?php echo $i++; ?></h3>
                          <p><?php echo $row['strand_answer']; ?></p>
                        </div>
                        <div class="icon">
                          <i class="fa-solid fa-person-walking-luggage"></i>
                        </div>
                        <a href="view_HE_info.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
                          <i class="fa-solid fa-tractor"></i>
                        </div>
                        <a href="view_AGRI_FISHERY_info.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <?php endif; ?>

                    <?php
                      } } else {
                    ?>
                      <h2>You haven't took your assessment yet.</h2>
                    <?php } ?>
            <p><b>NOTE:</b> To view possible courses and school who offer each SHS TVL strand, click <b>More info</b> button under each strand.</p>
        </div>
      </div>
    </section>

  </main>

<?php include 'home-footer.php'; include 'sweetalert_messages.php'; ?>
