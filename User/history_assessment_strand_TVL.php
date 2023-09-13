<title>TVL Strand Assessment history| SHS Track and Strand Decision Support System</title>
<?php include 'navbar.php'; include '../sweetalert_messages.php';  ?>
<style>

  /* Mark input boxes that gets an error on validation: */
  input {
    margin: 7px 0 7px 0;
  }

</style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"  style="margin-bottom: 1700px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>TVL Strand Assessment history</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">TVL Strand Assessment history</li>
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
                <form class="p-3" action="process_save.php" method="POST">
                    <input type="hidden" class="form-control form-control-sm" name="user_Id" value="<?php echo $id; ?>">
                    <h3 class="text-center">Questionnaires</h3>
                    <hr>
                    <?php 
                      // $date_registered = date('Y-m-d');
                      $fetch = mysqli_query($conn, "SELECT * FROM tvl_strand WHERE user_Id='$id'");
                      if(mysqli_num_rows($fetch) > 0) {
                      $row = mysqli_fetch_array($fetch);
                    ?>
                    <!-- One "tab" for each step in the form: -->
                    <div class="tab">
                      <h5><b>1.</b> Which of the following best describe you?</h5>
                      <input type="radio" name="q1" value="I like to analyze unique situations logically and apply what I have been taught in understanding new things." id="q1" <?php if($row['q1'] == 'I like to analyze unique situations logically and apply what I have been taught in understanding new things.') { echo 'checked'; }   ?> disabled> 
                      <label style="font-weight: normal;" for="q1">I like to analyze unique situations logically and apply what I have been taught in understanding new things.</label>
                      <br>
                      <input type="radio" name="q1" value="Fixing Things" id="q2" <?php if($row['q1'] == 'Fixing Things') { echo 'checked'; }   ?> disabled> 
                      <label style="font-weight: normal;" for="q2">Fixing Things</label>
                      <br>
                      <input type="radio" name="q1" value="Organizing Things" id="q3" <?php if($row['q1'] == 'Organizing Things') { echo 'checked'; }   ?> disabled> 
                      <label style="font-weight: normal;" for="q3">Organizing Things</label>
                      <br>
                      <input type="radio" name="q1" value="Taking care of plants and cleaning the environment" id="q4" <?php if($row['q1'] == 'Taking care of plants and cleaning the environment') { echo 'checked'; }   ?> disabled> 
                      <label style="font-weight: normal;" for="q4">Taking care of plants and cleaning the environment</label>
                      <br>
                      <p><b>Your answer:</b> <?php echo $row['q1']; ?> | <b><?php echo $row['q1_choice1']; ?></b></p>

                      <br>
                     <h5><b>2.</b> What do you value the most?</h5>
                      <input type="radio" name="q2" value="Leadership and Collaboration" id="q5" <?php if($row['q2'] == 'Leadership and Collaboration') { echo 'checked'; }   ?> disabled> 
                      <label style="font-weight: normal;" for="q5">Leadership and Collaboration</label>
                      <br>
                      <input type="radio" name="q2" value="Service and Passion" id="q6" <?php if($row['q2'] == 'Service and Passion') { echo 'checked'; }   ?> disabled> 
                      <label style="font-weight: normal;" for="q6">Service and Passion</label>
                      <br>
                      <input type="radio" name="q2" value="Supporting livelihoods" id="q7" <?php if($row['q2'] == 'Supporting livelihoods') { echo 'checked'; }   ?> disabled> 
                      <label style="font-weight: normal;" for="q7">Supporting livelihoods</label>
                      <br>
                      <input type="radio" name="q2" value="Building strong Economies" id="q8" <?php if($row['q2'] == 'Building strong Economies') { echo 'checked'; }   ?> disabled> 
                      <label style="font-weight: normal;" for="q8">Building strong Economies</label>
                      <br>
                      <p><b>Your answer:</b> <?php echo $row['q2']; ?> | <b><?php echo $row['q2_choice2']; ?></b></p>
                      <br>
                    </div>

                    <div class="tab">
                      <h5><b>3.</b> Based on the list below, what is your motto in life?</h5>
                      <input type="radio" name="q3" value="The only consistent thing in this world is change." id="q9" <?php if($row['q3'] == 'The only consistent thing in this world is change.') { echo 'checked'; }   ?> disabled> 
                      <label style="font-weight: normal;" for="q9">The only consistent thing in this world is change.</label>
                      <br>
                      <input type="radio" name="q3" value="Everything is beautiful and can be fixed when you’re part of a team." id="q10" <?php if($row['q3'] == 'Everything is beautiful and can be fixed when you’re part of a team.') { echo 'checked'; }   ?> disabled> 
                      <label style="font-weight: normal;" for="q10">Everything is beautiful and can be fixed when you’re part of a team.</label>
                      <br>
                      <input type="radio" name="q3" value="Good food is good mood" id="q11" <?php if($row['q3'] == 'Good food is good mood') { echo 'checked'; }   ?> disabled> 
                      <label style="font-weight: normal;" for="q11">Good food is good mood</label>
                      <br>
                      <input type="radio" name="q3" value="Good product for good food" id="q12" <?php if($row['q3'] == 'Good product for good food') { echo 'checked'; }   ?> disabled> 
                      <label style="font-weight: normal;" for="q12">Good product for good food</label>
                      <br>
                      <p><b>Your answer:</b> <?php echo $row['q3']; ?> | <b><?php echo $row['q3_choice3']; ?></b></p>
                      <br>
                     <h5><b>4.</b> The activities you enjoy often involve</h5>
                      <input type="radio" name="q4" value="Playing online games" id="q13" <?php if($row['q4'] == 'Playing online games') { echo 'checked'; }   ?> disabled> 
                      <label style="font-weight: normal;" for="q13">Playing online games</label>
                      <br>
                      <input type="radio" name="q4" value="Studying about machines" id="q14" <?php if($row['q4'] == 'Studying about machines') { echo 'checked'; }   ?> disabled> 
                      <label style="font-weight: normal;" for="q14">Studying about machines</label>
                      <br>
                      <input type="radio" name="q4" value="Do it yourself and organizing stuffs" id="q15" <?php if($row['q4'] == 'Do it yourself and organizing stuffs') { echo 'checked'; }   ?> disabled> 
                      <label style="font-weight: normal;" for="q15">Do it yourself and organizing stuffs</label>
                      <br>
                      <input type="radio" name="q4" value="Cleaning environment, planting trees or plants" id="q16" <?php if($row['q4'] == 'Cleaning environment, planting trees or plants') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q16">Cleaning environment, planting trees or plants</label>
                      <br>
                      <p><b>Your answer:</b> <?php echo $row['q4']; ?> | <b><?php echo $row['q4_choice4']; ?></b></p>
                      <br>
                    </div>

                    <div class="tab">
                      <h5><b>5.</b> What are your favorite subjects from the list below?</h5>
                      <input type="radio" name="q5" value="Computer" id="q17" <?php if($row['q5'] == 'Computer') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q17">Computer</label>
                      <br>
                      <input type="radio" name="q5" value="Livelihood Education" id="q18" <?php if($row['q5'] == 'Livelihood Education') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q18">Livelihood Education</label>
                      <br>
                      <input type="radio" name="q5" value="Electronics" id="q19" <?php if($row['q5'] == 'Electronics') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q19">Electronics</label>
                      <br>
                      <input type="radio" name="q5" value="Agriculture" id="q20" <?php if($row['q5'] == 'Agriculture') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q20">Agriculture</label>
                      <br>
                      <p><b>Your answer:</b> <?php echo $row['q5']; ?> | <b><?php echo $row['q5_choice5']; ?></b></p>

                      <br>
                     <h5><b>6.</b> When you grow up, which of the following do you want to be?</h5>
                      <input type="radio" name="q6" value="Game/Web Developer, Programmer." id="q21" <?php if($row['q6'] == 'Game/Web Developer, Programmer.') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q21">Game/Web Developer, Programmer.</label>
                      <br>
                      <input type="radio" name="q6" value="Mechanic, Automotive" id="q22" <?php if($row['q6'] == 'Mechanic, Automotive') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q22">Mechanic, Automotive</label>
                      <br>
                      <input type="radio" name="q6" value="Chef, Baker" id="q23" <?php if($row['q6'] == 'Chef, Baker') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q23">Chef, Baker</label>
                      <br>
                      <input type="radio" name="q6" value="Animal Science, Crop Science" id="q24" <?php if($row['q6'] == 'Animal Science, Crop Science') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q24">Animal Science, Crop Science</label>
                      <br>
                      <p><b>Your answer:</b> <?php echo $row['q6']; ?> | <b><?php echo $row['q6_choice6']; ?></b></p>
                      <br>
                    </div>

                    <div class="tab">
                      <h5><b>7.</b> Which of the following do you want to learn more about?</h5>
                      <input type="radio" name="q7" value="Computer, Computer Programming" id="q25" <?php if($row['q7'] == 'Computer, Computer Programming') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q25">Computer, Computer Programming</label>
                      <br>
                      <input type="radio" name="q7" value="Building, Machinery and Carpentry" id="q26" <?php if($row['q7'] == 'Building, Machinery and Carpentry') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q26">Building, Machinery and Carpentry</label>
                      <br>
                      <input type="radio" name="q7" value="Culinary Arts, Food Technology" id="q27" <?php if($row['q7'] == 'Culinary Arts, Food Technology') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q27">Culinary Arts, Food Technology</label>
                      <br>
                      <input type="radio" name="q7" value="Plant Genetics" id="q28" <?php if($row['q7'] == 'Plant Genetics') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q28">Plant Genetics</label>
                      <br>
                      <p><b>Your answer:</b> <?php echo $row['q7']; ?> | <b><?php echo $row['q7_choice7']; ?></b></p>

                      <br>
                     <h5><b>8.</b> What skills you want to learned more?</h5>
                      <input type="radio" name="q8" value="Programming Language, Computer programming" id="q29" <?php if($row['q8'] == 'Programming Language, Computer programming') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q29">Programming Language, Computer programming</label>
                      <br>
                      <input type="radio" name="q8" value="Mechanical Skills" id="q30" <?php if($row['q8'] == 'Mechanical Skills') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q30">Mechanical Skills</label>
                      <br>
                      <input type="radio" name="q8" value="Housekeeping" id="q31" <?php if($row['q8'] == 'Housekeeping') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q31">Housekeeping</label>
                      <br>
                      <input type="radio" name="q8" value="Agriculture" id="q32" <?php if($row['q8'] == 'Agriculture') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q32">Agriculture</label>
                      <br>
                      <p><b>Your answer:</b> <?php echo $row['q8']; ?> | <b><?php echo $row['q8_choice8']; ?></b></p>
                      <br>
                    </div>

                    <div class="tab">
                      <h5><b>9.</b> What topic would you choose if you were starting a new book?</h5>
                      <input type="radio" name="q9" value="Something more about on Computers" id="q33" <?php if($row['q9'] == 'Something more about on Computers') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q33">Something more about on Computers</label>
                      <br>
                      <input type="radio" name="q9" value="Book about building and constructions" id="q34" <?php if($row['q9'] == 'Book about building and constructions') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q34">Book about building and constructions</label>
                      <br>
                      <input type="radio" name="q9" value="Cooking book" id="q35" <?php if($row['q9'] == 'Cooking book') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q35">Cooking book</label>
                      <br>
                      <input type="radio" name="q9" value="The difference of the environment before and now" id="q36" <?php if($row['q9'] == 'The difference of the environment before and now') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q36">The difference of the environment before and now</label>
                      <br>
                      <p><b>Your answer:</b> <?php echo $row['q9']; ?> | <b><?php echo $row['q9_choice9']; ?></b></p>
                      <br>
                     <h5><b>10.</b> What is your dream project?</h5>
                      <input type="radio" name="q10" value="Creating a mobile application" id="q37" <?php if($row['q10'] == 'Creating a mobile application') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q37">Creating a mobile application</label>
                      <br>
                      <input type="radio" name="q10" value="Fixing or creating machines" id="q38" <?php if($row['q10'] == 'Fixing or creating machines') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q38">Fixing or creating machines</label>
                      <br>
                      <input type="radio" name="q10" value="Preparing foods and beverages" id="q39" <?php if($row['q10'] == 'Preparing foods and beverages') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q39">Preparing foods and beverages</label>
                      <br>
                      <input type="radio" name="q10" value="Taking care of the agriculture" id="q40" <?php if($row['q10'] == 'Taking care of the agriculture') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q40">Taking care of the agriculture</label>
                      <br>
                      <p><b>Your answer:</b> <?php echo $row['q10']; ?> | <b><?php echo $row['q10_choice10']; ?></b></p>
                      <br>
                    </div>

                    <div class="tab">
                      <h5><b>11.</b> When you are working with a group, usually you’re the one</h5>
                      <input type="radio" name="q11" value="Delegating tasks and making sure everyone is focused on the same goal." id="q41" <?php if($row['q11'] == 'Delegating tasks and making sure everyone is focused on the same goal.') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q41">Delegating tasks and making sure everyone is focused on the same goal.</label>
                      <br>
                      <input type="radio" name="q11" value="Assign in fixing and assembling the machines." id="q42" <?php if($row['q11'] == 'Assign in fixing and assembling the machines.') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q42">Assign in fixing and assembling the machines.</label>
                      <br>
                      <input type="radio" name="q11" value="Maintaining cleanliness" id="q43" <?php if($row['q11'] == 'Maintaining cleanliness') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q43">Maintaining cleanliness</label>
                      <br>
                      <input type="radio" name="q11" value="Planting and checking plants" id="q44" <?php if($row['q11'] == 'Planting and checking plants') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q44">Planting and checking plants</label>
                      <br>
                      <p><b>Your answer:</b> <?php echo $row['q11']; ?> | <b><?php echo $row['q11_choice11']; ?></b></p>
                      <br>
                     <h5><b>12.</b> When you encounter a problem, you usually</h5>
                      <input type="radio" name="q12" value="Analyze information and plan logically" id="q45" <?php if($row['q12'] == 'Analyze information and plan logically') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q45">Analyze information and plan logically</label>
                      <br>
                      <input type="radio" name="q12" value="Analyze information before making a move" id="q46" <?php if($row['q12'] == 'Analyze information before making a move') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q46">Analyze information before making a move</label>
                      <br>
                      <input type="radio" name="q12" value="Consider various opinions from other people and handle the situation calmly." id="q47" <?php if($row['q12'] == 'Consider various opinions from other people and handle the situation calmly.') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q47">Consider various opinions from other people and handle the situation calmly.</label>
                      <br>
                      <input type="radio" name="q12" value="Worry about how a certain problem affects other people." id="q48" <?php if($row['q12'] == 'Worry about how a certain problem affects other people.') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q48">Worry about how a certain problem affects other people.</label>
                      <br>
                      <p><b>Your answer:</b> <?php echo $row['q12']; ?> | <b><?php echo $row['q12_choice12']; ?></b></p>
                      <br>
                    </div>

                    <div class="tab">
                      <h5><b>13.</b> Which of the following best describes your skills?</h5>
                      <input type="radio" name="q13" value="Good at Computer, and Programming Skills" id="q49" <?php if($row['q13'] == 'Good at Computer, and Programming Skills') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q49">Good at Computer, and Programming Skills</label>
                      <br>
                      <input type="radio" name="q13" value="Good at Technologies and Building Skills" id="q50" <?php if($row['q13'] == 'Good at Technologies and Building Skills') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q50">Good at Technologies and Building Skills</label>
                      <br>
                      <input type="radio" name="q13" value="Cooking, Cleaning Skills" id="q51" <?php if($row['q13'] == 'Cooking, Cleaning Skills') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q51">Cooking, Cleaning Skills</label>
                      <br>
                      <input type="radio" name="q13" value="Planting Skills" id="q52" <?php if($row['q13'] == 'Planting Skills') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q52">Planting Skills</label>
                      <br>
                      <p><b>Your answer:</b> <?php echo $row['q13']; ?> | <b><?php echo $row['q13_choice13']; ?></b></p>
                      <br>

                     <h5><b>14.</b> What is your ultimate goal in life?</h5>
                      <input type="radio" name="q14" value="To develop a new application" id="q53" <?php if($row['q14'] == 'To develop a new application') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q53">To develop a new application</label>
                      <br>
                      <input type="radio" name="q14" value="Discover new machines" id="q54" <?php if($row['q14'] == 'Discover new machines') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q54">Discover new machines</label>
                      <br>
                      <input type="radio" name="q14" value="To represent our country or to be one of the best chef in the world." id="q55" <?php if($row['q14'] == 'To represent our country or to be one of the best chef in the world.') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q55">To represent our country or to be one of the best chef in the world.</label>
                      <br>
                      <input type="radio" name="q14" value="To raise incomes and improve food security." id="q56" <?php if($row['q14'] == 'To raise incomes and improve food security.') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q56">To raise incomes and improve food security.</label>
                      <br>
                      <p><b>Your answer:</b> <?php echo $row['q14']; ?> | <b><?php echo $row['q14_choice14']; ?></b></p>
                      <br>
                    </div>

                    <div class="tab">
                      <h5><b>15.</b> Are you sure to your answers?</h5>
                      <input type="radio" name="q15" value="Yes" id="q57" <?php if($row['q15'] == 'Yes') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q57">Yes</label>
                      <br>
                      <input type="radio" name="q15" value="No" id="q58" <?php if($row['q15'] == 'No') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q58">No</label>
                      <br>
                      <p><b>Your answer:</b> <?php echo $row['q15']; ?></p>
                      <br>
                    </div>
                    
                </form>

                <hr>
                <div class="card-body bg-light">
                <h3 class="p-1 text-center"><a href="#" class="text-dark"><b>TVL Strand rankings according to your answers</b></a></h3>
                <hr>               
                  <div class="row d-flex justify-content-center p-3">
                    <?php 
                    $i = 1;
                    $date_registered = date('Y-m-d');
                    $fetch = mysqli_query($conn, "SELECT COUNT(sort_Id) AS s, strand_answer, assessment_date FROM tvl_strand_sort WHERE user_Id='$id' GROUP BY strand_answer ORDER BY s DESC");
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
                      <h2 class="text-center p-5">You haven't took your assessment yet.</h2>
                    <?php } ?>
                      
                  </div>
                  <p><b>NOTE:</b> To view possible courses and school who offer each SHS TVL strand, click <b>More info</b> button under each strand.</p>
                </div>
                 <?php
                      }  else {
                    ?>
                      <h2 class="text-center p-5">You haven't took your assessment yet.</h2>
                    <?php } ?>

            </div>
         </div>
        </div>
      </div>
    </section>
</div>

<?php include 'footer.php'; ?>
 

