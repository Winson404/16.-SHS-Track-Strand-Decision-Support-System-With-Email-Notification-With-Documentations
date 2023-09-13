<title>Academic Strand Assessment history | SHS Track and Strand Decision Support System</title>
<?php include 'navbar.php'; include '../sweetalert_messages.php';  ?>
<style>

  /* Mark input boxes that gets an error on validation: */
  input {
    margin: 7px 0 7px 0;
  }

</style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-bottom: 1700px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Academic Strand Assessment history</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Academic Strand Assessment history</li>
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
                      $fetch = mysqli_query($conn, "SELECT * FROM academic_strand WHERE user_Id='$id'");
                      if(mysqli_num_rows($fetch) > 0) {
                      $row = mysqli_fetch_array($fetch);
                    ?>
                    <!-- One "tab" for each step in the form: -->
                    <div class="tab">
                      <h5><b>1.</b> When you grow up, which of the following do you want to be?</h5>
                      <input type="radio" name="q1" value="Accountant, Marketing Manager, Entrepreneur" id="q1" <?php if($row['q1'] == 'Accountant, Marketing Manager, Entrepreneur') { echo 'checked'; }   ?> disabled> 
                      <label style="font-weight: normal;" for="q1">Accountant, Marketing Manager, Entrepreneur</label>
                      <br>
                      <input type="radio" name="q1" value="Psychologist, Lawyer, Writer, Reporter, Priest, Teacher" id="q2" <?php if($row['q1'] == 'Psychologist, Lawyer, Writer, Reporter, Priest, Teacher') { echo 'checked'; }   ?> disabled> 
                      <label style="font-weight: normal;" for="q2">Psychologist, Lawyer, Writer, Reporter, Priest, Teacher</label>
                      <br>
                      <input type="radio" name="q1" value="Scientist, Doctor, Engineer" id="q3" <?php if($row['q1'] == 'Scientist, Doctor, Engineer') { echo 'checked'; }   ?> disabled> 
                      <label style="font-weight: normal;" for="q3">Scientist, Doctor, Engineer</label>
                      <br>
                      <input type="radio" name="q1" value="University Professor, Teacher, Corporate Communications Manager, Research Director" id="q4" <?php if($row['q1'] == 'University Professor, Teacher, Corporate Communications Manager, Research Director') { echo 'checked'; }   ?> disabled> 
                      <label style="font-weight: normal;" for="q4">University Professor, Teacher, Corporate Communications Manager, Research Director</label>
                      <br>
                      <p><b>Your answer:</b> <?php echo $row['q1']; ?> | <b><?php echo $row['q1_choice1']; ?></b></p>

                      <br>
                     <h5><b>2.</b> Which of the following best describe you?</h5>
                      <input type="radio" name="q2" value="I love to think of creative new ideas and take risks in my work." id="q5" <?php if($row['q2'] == 'I love to think of creative new ideas and take risks in my work.') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q5">I love to think of creative new ideas and take risks in my work.</label>
                      <br>
                      <input type="radio" name="q2" value="I love giving advice for the other person" id="q6" <?php if($row['q2'] == 'I love giving advice for the other person') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q6">I love giving advice for the other person</label>
                      <br>
                      <input type="radio" name="q2" value="I like to analyze unique situations logically and apply what I have been taught in understanding new things" id="q7" <?php if($row['q2'] == 'I like to analyze unique situations logically and apply what I have been taught in understanding new things') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q7">I like to analyze unique situations logically and apply what I have been taught in understanding new things</label>
                      <br>
                      <input type="radio" name="q2" value="I like to learn and explore everything" id="q8" <?php if($row['q2'] == 'I like to learn and explore everything') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q8">I like to learn and explore everything</label>
                      <br>
                      <p><b>Your answer:</b> <?php echo $row['q2']; ?> | <b><?php echo $row['q2_choice2']; ?></b></p>
                      <br>
                    </div>

                    <div class="tab">
                      <h5><b>3.</b> What are your favorite subjects from the list below?</h5>
                      <input type="radio" name="q3" value="Math, English" id="q9" <?php if($row['q3'] == 'Math, English') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q9">Math, English</label>
                      <br>
                      <input type="radio" name="q3" value="English, Science, History" id="q10" <?php if($row['q3'] == 'English, Science, History') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q10">English, Science, History</label>
                      <br>
                      <input type="radio" name="q3" value="Math, Science & Technology" id="q11" <?php if($row['q3'] == 'Math, Science & Technology') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q11">Math, Science & Technology</label>
                      <br>
                      <input type="radio" name="q3" value="English, Math, Science, History" id="q12" <?php if($row['q3'] == 'English, Math, Science, History') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q12">English, Math, Science, History</label>
                      <br>
                      <p><b>Your answer:</b> <?php echo $row['q3']; ?> | <b><?php echo $row['q3_choice3']; ?></b></p>

                      <br>
                     <h5><b>4.</b> Which of the following do you want to learn more about?</h5>
                      <input type="radio" name="q4" value="Business, Marketing, Finance" id="q13" <?php if($row['q4'] == 'Business, Marketing, Finance') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q13">Business, Marketing, Finance</label>
                      <br>
                      <input type="radio" name="q4" value="Psychology, Creative Writing, Philosophy" id="q14" <?php if($row['q4'] == 'Psychology, Creative Writing, Philosophy') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q14">Psychology, Creative Writing, Philosophy</label>
                      <br>
                      <input type="radio" name="q4" value="Pre-Calculus, Biology, Technology, Physiology" id="q15" <?php if($row['q4'] == 'Pre-Calculus, Biology, Technology, Physiology') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q15">Pre-Calculus, Biology, Technology, Physiology</label>
                      <br>
                      <input type="radio" name="q4" value="I want to learn all of the above" id="q16" <?php if($row['q4'] == 'I want to learn all of the above') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q16">I want to learn all of the above</label>
                      <br>
                      <p><b>Your answer:</b> <?php echo $row['q4']; ?> | <b><?php echo $row['q4_choice4']; ?></b></p>
                      <br>
                    </div>

                    <div class="tab">
                      <h5><b>5.</b> The activities you enjoy often involve.</h5>
                      <input type="radio" name="q5" value="Working with numbers, Business" id="q17" <?php if($row['q5'] == 'Working with numbers, Business') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q17">Working with numbers, Business</label>
                      <br>
                      <input type="radio" name="q5" value="Reading Newspapers, Debate" id="q18" <?php if($row['q5'] == 'Reading Newspapers, Debate') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q18">Reading Newspapers, Debate</label>
                      <br>
                      <input type="radio" name="q5" value="Computations, Experiments" id="q19" <?php if($row['q5'] == 'Computations, Experiments') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q19">Computations, Experiments</label>
                      <br>
                      <input type="radio" name="q5" value="I enjoy all of the above" id="q20" <?php if($row['q5'] == 'I enjoy all of the above') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q20">I enjoy all of the above</label>
                      <br>
                      <p><b>Your answer:</b> <?php echo $row['q5']; ?> | <b><?php echo $row['q5_choice5']; ?></b></p>

                      <br>
                     <h5><b>6.</b> Which of the following best describes your skills?</h5>
                      <input type="radio" name="q6" value="Good in Decision making and math" id="q21" <?php if($row['q6'] == 'Good in Decision making and math') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q21">Good in Decision making and math</label>
                      <br>
                      <input type="radio" name="q6" value="Critical Thinker" id="q22" <?php if($row['q6'] == 'Critical Thinker') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q22">Critical Thinker</label>
                      <br>
                      <input type="radio" name="q6" value="Critical Thinker and good in math" id="q23" <?php if($row['q6'] == 'Critical Thinker and good in math') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q23">Critical Thinker and good in math</label>
                      <br>
                      <input type="radio" name="q6" value="All of the above" id="q24" <?php if($row['q6'] == 'All of the above') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q24">All of the above</label>
                      <br>
                      <p><b>Your answer:</b> <?php echo $row['q6']; ?> | <b><?php echo $row['q6_choice6']; ?></b></p>
                      <br>
                    </div>

                    <div class="tab">
                      <h5><b>7.</b> What skills you want to learned more?</h5>
                      <input type="radio" name="q7" value="Market and Account Intelligence" id="q25" <?php if($row['q7'] == 'Market and Account Intelligence') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q25">Market and Account Intelligence</label>
                      <br>
                      <input type="radio" name="q7" value="Hone your creative writing skills" id="q26" <?php if($row['q7'] == 'Hone your creative writing skills') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q26">Hone your creative writing skills</label>
                      <br>
                      <input type="radio" name="q7" value="Critical Analysis" id="q27" <?php if($row['q7'] == 'Critical Analysis') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q27">Critical Analysis</label>
                      <br>
                      <input type="radio" name="q7" value="All of the above" id="q28" <?php if($row['q7'] == 'All of the above') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q28">All of the above</label>
                      <br>
                      <p><b>Your answer:</b> <?php echo $row['q7']; ?> | <b><?php echo $row['q7_choice7']; ?></b></p>

                      <br>
                     <h5><b>8.</b> What topic would you choose if you were starting a new book?</h5>
                      <input type="radio" name="q8" value="Story about some of the most successful people in the world." id="q29" <?php if($row['q8'] == 'Story about some of the most successful people in the world.') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q29">Story about some of the most successful people in the world.</label>
                      <br>
                      <input type="radio" name="q8" value="Different societies and cultures from around the world and the difference of the environment before and now" id="q30" <?php if($row['q8'] == 'Different societies and cultures from around the world and the difference of the environment before and now') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q30">Different societies and cultures from around the world and the difference of the environment before and now</label>
                      <br>
                      <input type="radio" name="q8" value="Something that will help me learns new things" id="q31" <?php if($row['q8'] == 'Something that will help me learns new things') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q31">Something that will help me learns new things</label>
                      <br>
                      <!-- <input type="radio" name="q8" value="I want to learn all of the above" id="q32" onclick="eight();"> 
                      <label style="font-weight: normal;" for="q32">I want to learn all of the above</label>
                      <br> -->
                      <p><b>Your answer:</b> <?php echo $row['q8']; ?> | <b><?php echo $row['q8_choice8']; ?></b></p>
                      <br>
                    </div>

                    <div class="tab">
                      <h5><b>9.</b> What is your dream project?</h5>
                      <input type="radio" name="q9" value="Start a new business and work with multinational companies" id="q32" <?php if($row['q9'] == 'Start a new business and work with multinational companies') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q32">Start a new business and work with multinational companies</label>
                      <br>
                      <input type="radio" name="q9" value="To cure people and help in the fight for justice." id="q33" <?php if($row['q9'] == 'To cure people and help in the fight for justice.') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q33">To cure people and help in the fight for justice.</label>
                      <br>
                      <input type="radio" name="q9" value="To work on groundbreaking experiment" id="q34" <?php if($row['q9'] == 'To work on groundbreaking experiment') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q34">To work on groundbreaking experiment</label>
                      <br>
                      <!-- <input type="radio" name="q7" value="All of the above" id="q28" onclick="seven();"> 
                      <label style="font-weight: normal;" for="q28">All of the above</label>
                      <br> -->
                      <p><b>Your answer:</b> <?php echo $row['q9']; ?> | <b><?php echo $row['q9_choice9']; ?></b></p>
                      <br>
                     <h5><b>10.</b> When you are working with a group, usually you’re the one</h5>
                      <input type="radio" name="q10" value="Delegating tasks and making sure everyone is focused on the same goal" id="q35" <?php if($row['q10'] == 'Delegating tasks and making sure everyone is focused on the same goal') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q35">Delegating tasks and making sure everyone is focused on the same goal</label>
                      <br>
                      <input type="radio" name="q10" value="Maintaining balance, harmony, and cleanliness" id="q36" <?php if($row['q10'] == 'Maintaining balance, harmony, and cleanliness') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q36">Maintaining balance, harmony, and cleanliness</label>
                      <br>
                      <input type="radio" name="q10" value="Work with a team, and investigative" id="q37" <?php if($row['q10'] == 'Work with a team, and investigative') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q37">Work with a team, and investigative</label>
                      <br>
                      <input type="radio" name="q10" value="The source of different knowledge and Ideas" id="q38" <?php if($row['q10'] == 'The source of different knowledge and Ideas') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q38">The source of different knowledge and Ideas</label>
                      <br>
                      <p><b>Your answer:</b> <?php echo $row['q10']; ?> | <b><?php echo $row['q10_choice10']; ?></b></p>
                      <br>
                    </div>

                    <div class="tab">
                      <h5><b>11.</b> What do you value the most?</h5>
                      <input type="radio" name="q11" value="Leadership, Business" id="q39" <?php if($row['q11'] == 'Leadership, Business') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q39">Leadership, Business</label>
                      <br>
                      <input type="radio" name="q11" value="Independence and Equal rights" id="q40" <?php if($row['q11'] == 'Independence and Equal rights') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q40">Independence and Equal rights</label>
                      <br>
                      <input type="radio" name="q11" value="Leadership and Collaboration" id="q41" <?php if($row['q11'] == 'Leadership and Collaboration') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q41">Leadership and Collaboration</label>
                      <br>
                      <input type="radio" name="q11" value="Knowledge, Leadership, Collaboration" id="q42" <?php if($row['q11'] == 'Knowledge, Leadership, Collaboration') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q42">Knowledge, Leadership, Collaboration</label>
                      <br>
                      <p><b>Your answer:</b> <?php echo $row['q11']; ?> | <b><?php echo $row['q11_choice11']; ?></b></p>
                      <br>
                     <h5><b>12.</b> What is your ultimate goal in life?</h5>
                      <input type="radio" name="q12" value="To own a successful business" id="q43" <?php if($row['q12'] == 'To own a successful business') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q43">To own a successful business</label>
                      <br>
                      <input type="radio" name="q12" value="To explore different cultures" id="q44" <?php if($row['q12'] == 'To explore different cultures') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q44">To explore different cultures</label>
                      <br>
                      <input type="radio" name="q12" value="To discover the cure to a disease" id="q45" <?php if($row['q12'] == 'To discover the cure to a disease') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q45">To discover the cure to a disease</label>
                      <br>
                      <input type="radio" name="q12" value="Apply all my knowledge that I gained to the future" id="q46" <?php if($row['q12'] == 'Apply all my knowledge that I gained to the future') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q46">Apply all my knowledge that I gained to the future</label>
                      <br>
                      <p><b>Your answer:</b> <?php echo $row['q12']; ?> | <b><?php echo $row['q12_choice12']; ?></b></p>
                      <br>
                    </div>

                    <div class="tab">
                      <h5><b>13.</b> When you encounter a problem, you usually?</h5>
                      <input type="radio" name="q13" value="Analyze information’s before making a move." id="q47" <?php if($row['q13'] == 'Analyze information’s before making a move.') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q47">Analyze information’s before making a move.</label>
                      <br>
                      <input type="radio" name="q13" value="Consider various opinions from other people and handle the situation calmly." id="q48" <?php if($row['q13'] == 'Consider various opinions from other people and handle the situation calmly.') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q48">Consider various opinions from other people and handle the situation calmly.</label>
                      <br>
                      <input type="radio" name="q13" value="Plan logically" id="q49" <?php if($row['q13'] == 'Plan logically') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q49">Plan logically</label>
                      <br>
                      <input type="radio" name="q13" value="Face it actively and think a different way to solve it" id="q50" <?php if($row['q13'] == 'Face it actively and think a different way to solve it') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q50">Face it actively and think a different way to solve it</label>
                      <br>
                      <p><b>Your answer:</b> <?php echo $row['q13']; ?> | <b><?php echo $row['q13_choice13']; ?></b></p>
                      <br>

                     <h5><b>14.</b> Based on the list below, what is your motto in life?</h5>
                      <input type="radio" name="q14" value="The only consistent thing in this world is change." id="q51" <?php if($row['q14'] == 'The only consistent thing in this world is change.') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q51">The only consistent thing in this world is change.</label>
                      <br>
                      <input type="radio" name="q14" value="All’s fair in love and war" id="q52" <?php if($row['q14'] == 'All’s fair in love and war') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q52">All’s fair in love and war</label>
                      <br>
                      <input type="radio" name="q14" value="Everything is theoretically impossible, until it is done" id="q53" <?php if($row['q14'] == 'Everything is theoretically impossible, until it is done') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q53">Everything is theoretically impossible, until it is done</label>
                      <br>
                      <input type="radio" name="q14" value="All of the above" id="q54" <?php if($row['q14'] == 'All of the above') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q54">All of the above</label>
                      <br>
                      <p><b>Your answer:</b> <?php echo $row['q14']; ?> | <b><?php echo $row['q14_choice14']; ?></b></p>
                      <br>
                    </div>

                    <div class="tab">
                      <h5><b>15.</b> Are you sure to your answers?</h5>
                      <input type="radio" name="q15" value="Yes" id="q55" <?php if($row['q15'] == 'Yes') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q55">Yes</label>
                      <br>
                      <input type="radio" name="q15" value="No" id="q56" <?php if($row['q15'] == 'No') { echo 'checked'; } ?> disabled> 
                      <label style="font-weight: normal;" for="q56">No</label>
                      <br>
                      <p><b>Your answer:</b> <?php echo $row['q15']; ?></p>
                      <br>
                    </div>

                    <hr>
                   
                <div class="card-body bg-light">
                <h3 class="p-1 text-center"><a href="#" class="text-dark"><b>Academic Strand rankings according to your previous answers</b></a></h3>
                <hr>               
                  <div class="row d-flex justify-content-center p-3">
                    <?php 
                    $i = 1;
                    $date_registered = date('Y-m-d');
                    $fetch = mysqli_query($conn, "SELECT COUNT(sort_Id) AS s, strand_answer, assessment_date FROM academic_strand_sort WHERE user_Id='$id' GROUP BY strand_answer ORDER BY s DESC");
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
                      <h2 class="text-center p-5">You haven't took your assessment yet.</h2>
                    <?php } ?>
                      
                  </div>
                  <p><b>NOTE:</b> To view possible courses and school who offer each SHS Academic strand, click <b>More info</b> button under each strand.</p>
                </div>
                 <?php
                       } else {
                    ?>
                      <h2 class="text-center p-5">You haven't took your assessment yet.</h2>
                    <?php } ?>

            </div>
         </div>
        </div>
      </div>
    </section>
</div>


<br>
<?php include 'footer.php'; ?>
 

