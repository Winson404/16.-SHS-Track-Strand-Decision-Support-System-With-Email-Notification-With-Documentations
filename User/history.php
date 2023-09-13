<title>Track assessment history | SHS Track and Strand Decision Support System</title>
<?php include 'navbar.php'; include '../sweetalert_messages.php';  ?>
<style>
  input {
    margin: 10px 0 10px 0;
  }
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-bottom: 550px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Track assessment history</h1>
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
              <?php 
                // $date_registered = date('Y-m-d');
                $fetch = mysqli_query($conn, "SELECT * FROM track WHERE user_Id='$id'");
                if(mysqli_num_rows($fetch) > 0) {
                $row = mysqli_fetch_array($fetch);
              ?>
                <form class="p-3" action="process_save.php" method="POST">
                    <input type="hidden" class="form-control form-control-sm" name="user_Id" value="<?php echo $id; ?>">
                    <h3 class="text-center">Questionnaires</h3>
                    <hr>
                    <div class="tab mb-4">
                      <h5><b>1.</b> What do you enjoy doing in your free time?</h5>
                      
                      <input type="radio" name="q1" value="Solving, Writing or Communicating" id="q1" <?php if($row['q1'] == 'Solving, Writing or Communicating') { echo 'checked'; }   ?> disabled>
                      <label style="font-weight: normal;" for="q1">Solving, Writing or Communicating</label>
                      <br>
                      <input type="radio" name="q1" value="Cooking, Planting, Machine Jobs or Computer Activities" id="q2" <?php if($row['q1'] == 'Cooking, Planting, Machine Jobs or Computer Activities') { echo 'checked'; } ?>  disabled> 
                      <label style="font-weight: normal;" for="q2">Cooking, Planting, Machine Jobs or Computer Activities </label>
                      <br>
                      <input type="radio" name="q1" value="Do Physical Activities or Exercises" id="q3" <?php if($row['q1'] == 'Do Physical Activities or Exercises') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q3">Do Physical Activities or Exercises </label>
                      <br>
                      <input type="radio" name="q1" value="Taking pictures or Drawing" id="q4" <?php if($row['q1'] == 'Taking pictures or Drawing') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q4">Taking pictures or Drawing</label>
                      <br>
                      <p><b>Your answer:</b> <?php echo $row['q1']; ?> | <b><?php echo $row['q1_choice1']; ?></b></p>
                    </div>

                    <div class="tab mb-4">
                      <h5><b>2.</b> Among the following, what are you good at?</h5>
                      <input type="radio" name="q2" value="Writing stories, Computations, Analyzing random case" id="q5" <?php if($row['q2'] == 'Writing stories, Computations, Analyzing random case') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q5">Writing stories, Computations, Analyzing random case</label>
                      <br>
                      <input type="radio" name="q2" value="Housework, Computers, Fixing things, Livelihood" id="q6" <?php if($row['q2'] == 'Housework, Computers, Fixing things, Livelihood') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q6">Housework, Computers, Fixing things, Livelihood</label>
                      <br>
                      <input type="radio" name="q2" value="Sports and Games" id="q7" <?php if($row['q2'] == 'Sports and Games') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q7">Sports and Games</label>
                      <br>
                      <input type="radio" name="q2" value="Acting, Drawing" id="q8" <?php if($row['q2'] == 'Acting, Drawing') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q8">Acting, Drawing</label>
                      <br>
                      <p><b>Your answer:</b> <?php echo $row['q2']; ?> | <b><?php echo $row['q2_choice2']; ?></b></p>
                    </div>

                    <div class="tab mb-4">
                      <h5><b>3.</b> What type of workplace do you prefer?</h5>
                      <input type="radio" name="q3" value="The conventional work environment" id="q9" <?php if($row['q3'] == 'The conventional work environment') { echo 'checked'; }   ?> disabled> 
                      <label style="font-weight: normal;" for="q9">The conventional work environment</label>
                      <br>
                      <input type="radio" name="q3" value="The realistic environment" id="q10" <?php if($row['q3'] == 'The realistic environment') { echo 'checked'; }   ?> disabled> 
                      <label style="font-weight: normal;" for="q10">The realistic environment </label>
                      <br>
                      <input type="radio" name="q3" value="The social work environment" id="q11" <?php if($row['q3'] == 'The social work environment') { echo 'checked'; }   ?> disabled> 
                      <label style="font-weight: normal;" for="q11">The social work environment</label>
                      <br>
                      <input type="radio" name="q3" value="The artistic work environment" id="q12" <?php if($row['q3'] == 'The artistic work environment') { echo 'checked'; }   ?> disabled> 
                      <label style="font-weight: normal;" for="q12">The artistic work environment</label>
                      <br>
                      <p><b>Your answer:</b> <?php echo $row['q3']; ?> | <b><?php echo $row['q3_choice3']; ?></b></p>
                    </div>

                    <div class="tab mb-4">
                      <h5><b>4.</b> People usually describe you as?</h5>
                      <input type="radio" name="q4" value="Smart and Logical" id="q13" <?php if($row['q4'] == 'Smart and Logical') { echo 'checked'; }   ?> disabled> 
                      <label style="font-weight: normal;" for="q13">Smart and Logical</label>
                      <br>
                      <input type="radio" name="q4" value="Competitive and Organized" id="q14" <?php if($row['q4'] == 'Competitive and Organized') { echo 'checked'; }   ?> disabled> 
                      <label style="font-weight: normal;" for="q14">Competitive and Organized</label>
                      <br>
                      <input type="radio" name="q4" value="Athlete and Sportsman" id="q15" <?php if($row['q4'] == 'Athlete and Sportsman') { echo 'checked'; }   ?> disabled> 
                      <label style="font-weight: normal;" for="q15">Athlete and Sportsman</label>
                      <br>
                      <input type="radio" name="q4" value="Creative and Resourceful" id="q16" <?php if($row['q4'] == 'Creative and Resourceful') { echo 'checked'; }   ?> disabled> 
                      <label style="font-weight: normal;" for="q16">Creative and Resourceful</label>
                      <br>
                      <p><b>Your answer:</b> <?php echo $row['q4']; ?> | <b><?php echo $row['q4_choice4']; ?></b></p>
                    </div>

                    <div class="tab">
                      <h5><b>5.</b> Based on the given professions, which are your dream job or related to your dream job?</h5>
                      <input type="radio" name="q5" value="Accountancy, Teacher, Civil Engineering, Psychology" id="q17" <?php if($row['q5'] == 'Accountancy, Teacher, Civil Engineering, Psychology') { echo 'checked'; }   ?> disabled> 
                      <label style="font-weight: normal;" for="q17">Accountancy, Teacher, Civil Engineering, Psychology</label>
                      <br>
                      <input type="radio" name="q5" value="Game Developer, Baker, Electrical/Electrician Technician" id="q18" <?php if($row['q5'] == 'Game Developer, Baker, Electrical/Electrician Technician') { echo 'checked'; }   ?> disabled> 
                      <label style="font-weight: normal;" for="q18">Game Developer, Baker, Electrical/Electrician Technician</label>
                      <br>
                      <input type="radio" name="q5" value="Sports Science, Biomechanics" id="q19" <?php if($row['q5'] == 'Sports Science, Biomechanics') { echo 'checked'; }   ?> disabled> 
                      <label style="font-weight: normal;" for="q19">Sports Science, Biomechanics</label>
                      <br>
                      <input type="radio" name="q5" value="Graphic Designer, Fine Arts" id="q20" <?php if($row['q5'] == 'Graphic Designer, Fine Arts') { echo 'checked'; }   ?> disabled> 
                      <label style="font-weight: normal;" for="q20">Graphic Designer, Fine Arts</label>
                      <br>
                      <p><b>Your answer:</b> <?php echo $row['q5']; ?> | <b><?php echo $row['q5_choice5']; ?></b></p>
                    </div>
                </form>


                <hr>
                <div class="card-body">
                <h3 class="p-1 text-center"><a href="#" class="text-dark"><b>SHS Track rankings according to your previous answers</b></a></h3>
                <hr>
                  <div class="row d-flex justify-content-center p-3">
                    <?php 
                      $i = 1;
                      $date_registered = date('Y-m-d');
                      $fetch = mysqli_query($conn, "SELECT COUNT(sort_Id) AS sort_Id, track_answer, assessment_date FROM track_sort WHERE (assessment_date='$date_registered' || assessment_date='') AND user_Id='$id' GROUP BY track_answer ORDER BY sort_Id DESC");
                      // $fetch = mysqli_query($conn, "SELECT COUNT(sort_Id) AS sort_Id, track_answer, assessment_date FROM track_sort WHERE (assessment_date='$date_registered' || assessment_date='') AND (user_Id='$id' || user_Id=0) GROUP BY track_answer ORDER BY sort_Id DESC");
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
                        <a href="history_assessment_strand_ACADEMIC.php" class="small-box-footer">View history <i class="fas fa-arrow-circle-right"></i></a>
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
                        <a href="history_assessment_strand_TVL.php" class="small-box-footer">View history <i class="fas fa-arrow-circle-right"></i></a>
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
                  <p><b>NOTE:</b> To view assessment history under each track, click <b>View history</b> button under each track.</p>
                </div>
              <?php } else { ?>
                  <h2 class="text-center p-5">You haven't took your assessment yet.</h2>
              <?php } ?>
            </div>
         </div>
        </div>
      </div>
    </section>
</div>


<?php include 'footer.php'; ?>
 

