<title>Assessment | SHStudent</title>
<?php include 'home-header.php'; ?>
<style>

  /* Mark input boxes that gets an error on validation: */
  input {
    margin: 10px 0 10px 0;
  }

  /* Hide all steps by default: */
  .tab, .submit {
    display: none;

  }

  /* Make circles that indicate the steps of the form: */
  .step {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbbbbb;
    border: none;
    border-radius: 50%;
    display: inline-block;
    opacity: 0.5;
  }

  /* Mark the active step: */
  .step.active {
    opacity: 1;
  }

  /* Mark the steps that are finished and valid: */
  .step.finish {
    background-color: #0275d8;
  }

</style>
  <main id="main">

    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <br>
        <h2 class="text-center mt-5" style="color: #17A2B8;"><b><u>Take Academic track assessment</u></b></h2>
        <hr>
        <div class="row d-flex justify-content-center">
          <div class="col-lg-10  p-3 rounded" data-aos="fade-left" data-aos-delay="100" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
            <form class="p-3" action="processes.php" method="POST">
                    <input type="hidden" value="<?php echo $visitor_ip; ?>" name="guest_Ip" class="form-control">
                    <!-- One "tab" for each step in the form: -->
                    <div class="tab">
                      <h5><b>1.</b> When you grow up, which of the following do you want to be?</h5>
                      <input type="radio" name="q1" value="Accountant, Marketing Manager, Entrepreneur" id="q1" onclick="one();"> 
                      <label style="font-weight: normal;" for="q1">Accountant, Marketing Manager, Entrepreneur</label>
                      <br>
                      <input type="radio" name="q1" value="Psychologist, Lawyer, Writer, Reporter, Priest, Teacher" id="q2" onclick="one();"> 
                      <label style="font-weight: normal;" for="q2">Psychologist, Lawyer, Writer, Reporter, Priest, Teacher</label>
                      <br>
                      <input type="radio" name="q1" value="Scientist, Doctor, Engineer" id="q3" onclick="one();"> 
                      <label style="font-weight: normal;" for="q3">Scientist, Doctor, Engineer</label>
                      <br>
                      <input type="radio" name="q1" value="University Professor, Teacher, Corporate Communications Manager, Research Director" id="q4" onclick="one();"> 
                      <label style="font-weight: normal;" for="q4">University Professor, Teacher, Corporate Communications Manager, Research Director</label>
                      <br>
                      <input type="hidden" id="q1_choice1" class="form-control form-control-sm" name="q1_choice1">

                      <br>
                     <h5><b>2.</b> Which of the following best describe you?</h5>
                      <input type="radio" name="q2" value="I love to think of creative new ideas and take risks in my work." id="q5" onclick="two();"> 
                      <label style="font-weight: normal;" for="q5">I love to think of creative new ideas and take risks in my work.</label>
                      <br>
                      <input type="radio" name="q2" value="I love giving advice for the other person" id="q6" onclick="two();"> 
                      <label style="font-weight: normal;" for="q6">I love giving advice for the other person</label>
                      <br>
                      <input type="radio" name="q2" value="I like to analyze unique situations logically and apply what I have been taught in understanding new things" id="q7" onclick="two();"> 
                      <label style="font-weight: normal;" for="q7">I like to analyze unique situations logically and apply what I have been taught in understanding new things</label>
                      <br>
                      <input type="radio" name="q2" value="I like to learn and explore everything" id="q8" onclick="two();"> 
                      <label style="font-weight: normal;" for="q8">I like to learn and explore everything</label>
                      <br>
                      <input type="hidden" id="q2_choice2" class="form-control form-control-sm" name="q2_choice2">
                    </div>
                    <script>
                      function one() {
                          var x = document.getElementById("q1_choice1");

                          if(document.getElementById('q1').checked) {
                              x.value = "ABM";
                          } else if(document.getElementById('q2').checked) {
                              x.value = "HUMSS";
                          } else if(document.getElementById('q3').checked) {
                              x.value = "STEM";
                          } else {
                              x.value = "GAS";
                          }
                      }

                      function two() {
                          var x = document.getElementById("q2_choice2");

                          if(document.getElementById('q5').checked) {
                              x.value = "ABM";
                          } else if(document.getElementById('q6').checked) {
                              x.value = "HUMSS";
                          } else if(document.getElementById('q7').checked) {
                              x.value = "STEM";
                          } else {
                              x.value = "GAS";
                          }
                      }
                    </script> 


                    <div class="tab">
                      <h5><b>3.</b> What are your favorite subjects from the list below?</h5>
                      <input type="radio" name="q3" value="Math, English" id="q9" onclick="three();"> 
                      <label style="font-weight: normal;" for="q9">Math, English</label>
                      <br>
                      <input type="radio" name="q3" value="English, Science, History" id="q10" onclick="three();"> 
                      <label style="font-weight: normal;" for="q10">English, Science, History</label>
                      <br>
                      <input type="radio" name="q3" value="Math, Science & Technology" id="q11" onclick="three();"> 
                      <label style="font-weight: normal;" for="q11">Math, Science & Technology</label>
                      <br>
                      <input type="radio" name="q3" value="English, Math, Science, History" id="q12" onclick="three();"> 
                      <label style="font-weight: normal;" for="q12">English, Math, Science, History</label>
                      <br>
                      <input type="hidden" id="q3_choice3" class="form-control form-control-sm" name="q3_choice3">

                      <br>
                     <h5><b>4.</b> Which of the following do you want to learn more about?</h5>
                      <input type="radio" name="q4" value="Business, Marketing, Finance" id="q13" onclick="four();"> 
                      <label style="font-weight: normal;" for="q13">Business, Marketing, Finance</label>
                      <br>
                      <input type="radio" name="q4" value="Psychology, Creative Writing, Philosophy" id="q14" onclick="four();"> 
                      <label style="font-weight: normal;" for="q14">Psychology, Creative Writing, Philosophy</label>
                      <br>
                      <input type="radio" name="q4" value="Pre-Calculus, Biology, Technology, Physiology" id="q15" onclick="four();"> 
                      <label style="font-weight: normal;" for="q15">Pre-Calculus, Biology, Technology, Physiology</label>
                      <br>
                      <input type="radio" name="q4" value="I want to learn all of the above" id="q16" onclick="four();"> 
                      <label style="font-weight: normal;" for="q16">I want to learn all of the above</label>
                      <br>
                      <input type="hidden" id="q4_choice4" class="form-control form-control-sm" name="q4_choice4">
                    </div>
                    <script>
                      function three() {
                          var x = document.getElementById("q3_choice3");

                          if(document.getElementById('q9').checked) {
                              x.value = "ABM";
                          } else if(document.getElementById('q10').checked) {
                              x.value = "HUMSS";
                          } else if(document.getElementById('q11').checked) {
                              x.value = "STEM";
                          } else {
                              x.value = "GAS";
                          }
                      }

                      function four() {
                          var x = document.getElementById("q4_choice4");

                          if(document.getElementById('q13').checked) {
                              x.value = "ABM";
                          } else if(document.getElementById('q14').checked) {
                              x.value = "HUMSS";
                          } else if(document.getElementById('q15').checked) {
                              x.value = "STEM";
                          } else {
                              x.value = "GAS";
                          }
                      }
                    </script> 


                    <div class="tab">
                      <h5><b>5.</b> The activities you enjoy often involve.</h5>
                      <input type="radio" name="q5" value="Working with numbers, Business" id="q17" onclick="five();"> 
                      <label style="font-weight: normal;" for="q17">Working with numbers, Business</label>
                      <br>
                      <input type="radio" name="q5" value="Reading Newspapers, Debate" id="q18" onclick="five();"> 
                      <label style="font-weight: normal;" for="q18">Reading Newspapers, Debate</label>
                      <br>
                      <input type="radio" name="q5" value="Computations, Experiments" id="q19" onclick="five();"> 
                      <label style="font-weight: normal;" for="q19">Computations, Experiments</label>
                      <br>
                      <input type="radio" name="q5" value="I enjoy all of the above" id="q20" onclick="five();"> 
                      <label style="font-weight: normal;" for="q20">I enjoy all of the above</label>
                      <br>
                      <input type="hidden" id="q5_choice5" class="form-control form-control-sm" name="q5_choice5">

                      <br>
                     <h5><b>6.</b> Which of the following best describes your skills?</h5>
                      <input type="radio" name="q6" value="Good in Decision making and math" id="q21" onclick="six();"> 
                      <label style="font-weight: normal;" for="q21">Good in Decision making and math</label>
                      <br>
                      <input type="radio" name="q6" value="Critical Thinker" id="q22" onclick="six();"> 
                      <label style="font-weight: normal;" for="q22">Critical Thinker</label>
                      <br>
                      <input type="radio" name="q6" value="Critical Thinker and good in math" id="q23" onclick="six();"> 
                      <label style="font-weight: normal;" for="q23">Critical Thinker and good in math</label>
                      <br>
                      <input type="radio" name="q6" value="All of the above" id="q24" onclick="six();"> 
                      <label style="font-weight: normal;" for="q24">All of the above</label>
                      <br>
                      <input type="hidden" id="q6_choice6" class="form-control form-control-sm" name="q6_choice6">
                    </div>
                    <script>
                      function five() {
                          var x = document.getElementById("q5_choice5");

                          if(document.getElementById('q17').checked) {
                              x.value = "ABM";
                          } else if(document.getElementById('q18').checked) {
                              x.value = "HUMSS";
                          } else if(document.getElementById('q19').checked) {
                              x.value = "STEM";
                          } else {
                              x.value = "GAS";
                          }
                      }

                      function six() {
                          var x = document.getElementById("q6_choice6");

                          if(document.getElementById('q21').checked) {
                              x.value = "ABM";
                          } else if(document.getElementById('q22').checked) {
                              x.value = "HUMSS";
                          } else if(document.getElementById('q23').checked) {
                              x.value = "STEM";
                          } else {
                              x.value = "GAS";
                          }
                      }
                    </script> 



                    <div class="tab">
                      <h5><b>7.</b> What skills you want to learned more?</h5>
                      <input type="radio" name="q7" value="Market and Account Intelligence" id="q25" onclick="seven();"> 
                      <label style="font-weight: normal;" for="q25">Market and Account Intelligence</label>
                      <br>
                      <input type="radio" name="q7" value="Hone your creative writing skills" id="q26" onclick="seven();"> 
                      <label style="font-weight: normal;" for="q26">Hone your creative writing skills</label>
                      <br>
                      <input type="radio" name="q7" value="Critical Analysis" id="q27" onclick="seven();"> 
                      <label style="font-weight: normal;" for="q27">Critical Analysis</label>
                      <br>
                      <input type="radio" name="q7" value="All of the above" id="q28" onclick="seven();"> 
                      <label style="font-weight: normal;" for="q28">All of the above</label>
                      <br>
                      <input type="hidden" id="q7_choice7" class="form-control form-control-sm" name="q7_choice7">

                      <br>
                     <h5><b>8.</b> What topic would you choose if you were starting a new book?</h5>
                      <input type="radio" name="q8" value="Story about some of the most successful people in the world." id="q29" onclick="eight();"> 
                      <label style="font-weight: normal;" for="q29">Story about some of the most successful people in the world.</label>
                      <br>
                      <input type="radio" name="q8" value="Different societies and cultures from around the world and the difference of the environment before and now" id="q30" onclick="eight();"> 
                      <label style="font-weight: normal;" for="q30">Different societies and cultures from around the world and the difference of the environment before and now</label>
                      <br>
                      <input type="radio" name="q8" value="Something that will help me learns new things" id="q31" onclick="eight();"> 
                      <label style="font-weight: normal;" for="q31">Something that will help me learns new things</label>
                      <br>
                      <!-- <input type="radio" name="q8" value="I want to learn all of the above" id="q32" onclick="eight();"> 
                      <label style="font-weight: normal;" for="q32">I want to learn all of the above</label>
                      <br> -->
                      <input type="hidden" id="q8_choice8" class="form-control form-control-sm" name="q8_choice8">
                    </div>
                    <script>
                      function seven() {
                          var x = document.getElementById("q7_choice7");

                          if(document.getElementById('q25').checked) {
                              x.value = "ABM";
                          } else if(document.getElementById('q26').checked) {
                              x.value = "HUMSS";
                          } else if(document.getElementById('q27').checked) {
                              x.value = "STEM";
                          } else {
                              x.value = "GAS";
                          }
                      }

                      function eight() {
                          var x = document.getElementById("q8_choice8");

                          if(document.getElementById('q29').checked) {
                              x.value = "ABM";
                          } else if(document.getElementById('q30').checked) {
                              x.value = "HUMSS";
                          } else {
                              x.value = "STEM";
                          }
                      }
                    </script> 



                    <div class="tab">
                      <h5><b>9.</b> What is your dream project?</h5>
                      <input type="radio" name="q9" value="Start a new business and work with multinational companies" id="q32" onclick="nine();"> 
                      <label style="font-weight: normal;" for="q32">Start a new business and work with multinational companies</label>
                      <br>
                      <input type="radio" name="q9" value="To cure people and help in the fight for justice." id="q33" onclick="nine();"> 
                      <label style="font-weight: normal;" for="q33">To cure people and help in the fight for justice.</label>
                      <br>
                      <input type="radio" name="q9" value="To work on groundbreaking experiment" id="q34" onclick="nine();"> 
                      <label style="font-weight: normal;" for="q34">To work on groundbreaking experiment</label>
                      <br>
                      <!-- <input type="radio" name="q7" value="All of the above" id="q28" onclick="seven();"> 
                      <label style="font-weight: normal;" for="q28">All of the above</label>
                      <br> -->
                      <input type="hidden" id="q9_choice9" class="form-control form-control-sm" name="q9_choice9">
                      <br>
                     <h5><b>10.</b> When you are working with a group, usually you’re the one</h5>
                      <input type="radio" name="q10" value="Delegating tasks and making sure everyone is focused on the same goal" id="q35" onclick="ten();"> 
                      <label style="font-weight: normal;" for="q35">Delegating tasks and making sure everyone is focused on the same goal</label>
                      <br>
                      <input type="radio" name="q10" value="Maintaining balance, harmony, and cleanliness" id="q36" onclick="ten();"> 
                      <label style="font-weight: normal;" for="q36">Maintaining balance, harmony, and cleanliness</label>
                      <br>
                      <input type="radio" name="q10" value="Work with a team, and investigative" id="q37" onclick="ten();"> 
                      <label style="font-weight: normal;" for="q37">Work with a team, and investigative</label>
                      <br>
                      <input type="radio" name="q10" value="The source of different knowledge and Ideas" id="q38" onclick="ten();"> 
                      <label style="font-weight: normal;" for="q38">I want toThe source of different knowledge and Ideas</label>
                      <br>
                      <input type="hidden" id="q10_choice10" class="form-control form-control-sm" name="q10_choice10">
                    </div>
                    <script>
                      function nine() {
                          var x = document.getElementById("q9_choice9");

                          if(document.getElementById('q32').checked) {
                              x.value = "ABM";
                          } else if(document.getElementById('q33').checked) {
                              x.value = "HUMSS";
                          } else {
                              x.value = "STEM";
                          }
                      }

                      function ten() {
                          var x = document.getElementById("q10_choice10");

                          if(document.getElementById('q35').checked) {
                              x.value = "ABM";
                          } else if(document.getElementById('q36').checked) {
                              x.value = "HUMSS";
                          } else if(document.getElementById('q37').checked) {
                              x.value = "STEM";
                          } else {
                              x.value = "GAS";
                          }
                      }
                    </script> 



                    <div class="tab">
                      <h5><b>11.</b> What do you value the most?</h5>
                      <input type="radio" name="q11" value="Leadership, Business" id="q39" onclick="eleven();"> 
                      <label style="font-weight: normal;" for="q39">Leadership, Business</label>
                      <br>
                      <input type="radio" name="q11" value="Independence and Equal rights" id="q40" onclick="eleven();"> 
                      <label style="font-weight: normal;" for="q40">Independence and Equal rights</label>
                      <br>
                      <input type="radio" name="q11" value="Leadership and Collaboration" id="q41" onclick="eleven();"> 
                      <label style="font-weight: normal;" for="q41">Leadership and Collaboration</label>
                      <br>
                      <input type="radio" name="q11" value="Knowledge, Leadership, Collaboration" id="q42" onclick="eleven();"> 
                      <label style="font-weight: normal;" for="q42">Knowledge, Leadership, Collaboration</label>
                      <br>
                      <input type="hidden" id="q11_choice11" class="form-control form-control-sm" name="q11_choice11">
                      <br>
                     <h5><b>12.</b> What is your ultimate goal in life?</h5>
                      <input type="radio" name="q12" value="To own a successful business" id="q43" onclick="twelve();"> 
                      <label style="font-weight: normal;" for="q43">To own a successful business</label>
                      <br>
                      <input type="radio" name="q12" value="To explore different cultures" id="q44" onclick="twelve();"> 
                      <label style="font-weight: normal;" for="q44">To explore different cultures</label>
                      <br>
                      <input type="radio" name="q12" value="To discover the cure to a disease" id="q45" onclick="twelve();"> 
                      <label style="font-weight: normal;" for="q45">To discover the cure to a disease</label>
                      <br>
                      <input type="radio" name="q12" value="Apply all my knowledge that I gained to the future" id="q46" onclick="twelve();"> 
                      <label style="font-weight: normal;" for="q46">Apply all my knowledge that I gained to the future</label>
                      <br>
                      <input type="hidden" id="q12_choice12" class="form-control form-control-sm" name="q12_choice12">
                    </div>
                    <script>
                      function eleven() {
                          var x = document.getElementById("q11_choice11");

                          if(document.getElementById('q39').checked) {
                              x.value = "ABM";
                          } else if(document.getElementById('q40').checked) {
                              x.value = "HUMSS";
                          } else if(document.getElementById('q41').checked) {
                              x.value = "STEM";
                          } else {
                              x.value = "GAS";
                          }
                      }

                      function twelve() {
                          var x = document.getElementById("q12_choice12");

                          if(document.getElementById('q43').checked) {
                              x.value = "ABM";
                          } else if(document.getElementById('q44').checked) {
                              x.value = "HUMSS";
                          } else if(document.getElementById('q45').checked) {
                              x.value = "STEM";
                          } else {
                              x.value = "GAS";
                          }
                      }
                    </script> 


                    <div class="tab">
                      <h5><b>13.</b> When you encounter a problem, you usually?</h5>
                      <input type="radio" name="q13" value="Analyze information’s before making a move." id="q47" onclick="thirteen();"> 
                      <label style="font-weight: normal;" for="q47">Analyze information’s before making a move.</label>
                      <br>
                      <input type="radio" name="q13" value="Consider various opinions from other people and handle the situation calmly." id="q48" onclick="thirteen();"> 
                      <label style="font-weight: normal;" for="q48">Consider various opinions from other people and handle the situation calmly.</label>
                      <br>
                      <input type="radio" name="q13" value="Plan logically" id="q49" onclick="thirteen();"> 
                      <label style="font-weight: normal;" for="q49">Plan logically</label>
                      <br>
                      <input type="radio" name="q13" value="Face it actively and think a different way to solve it" id="q50" onclick="thirteen();"> 
                      <label style="font-weight: normal;" for="q50">Face it actively and think a different way to solve it</label>
                      <br>
                      <input type="hidden" id="q13_choice13" class="form-control form-control-sm" name="q13_choice13">
                      <br>

                     <h5><b>14.</b> Based on the list below, what is your motto in life?</h5>
                      <input type="radio" name="q14" value="The only consistent thing in this world is change." id="q51" onclick="fourteen();"> 
                      <label style="font-weight: normal;" for="q51">The only consistent thing in this world is change.</label>
                      <br>
                      <input type="radio" name="q14" value="All’s fair in love and war" id="q52" onclick="fourteen();"> 
                      <label style="font-weight: normal;" for="q52">All’s fair in love and war</label>
                      <br>
                      <input type="radio" name="q14" value="Everything is theoretically impossible, until it is done" id="q53" onclick="fourteen();"> 
                      <label style="font-weight: normal;" for="q53">Everything is theoretically impossible, until it is done</label>
                      <br>
                      <input type="radio" name="q14" value="All of the above" id="q54" onclick="fourteen();"> 
                      <label style="font-weight: normal;" for="q54">All of the above</label>
                      <br>
                      <input type="hidden" id="q14_choice14" class="form-control form-control-sm" name="q14_choice14">
                    </div>
                    <script>
                      function thirteen() {
                          var x = document.getElementById("q13_choice13");

                          if(document.getElementById('q47').checked) {
                              x.value = "ABM";
                          } else if(document.getElementById('q48').checked) {
                              x.value = "HUMSS";
                          } else if(document.getElementById('q49').checked) {
                              x.value = "STEM";
                          } else {
                              x.value = "GAS";
                          }
                      }

                      function fourteen() {
                          var x = document.getElementById("q14_choice14");

                          if(document.getElementById('q51').checked) {
                              x.value = "ABM";
                          } else if(document.getElementById('q52').checked) {
                              x.value = "HUMSS";
                          } else if(document.getElementById('q53').checked) {
                              x.value = "STEM";
                          } else {
                              x.value = "GAS";
                          }
                      }
                    </script> 


                    <div class="tab">
                      <h5><b>15.</b> Are you sure to your answers?</h5>
                      <input type="radio" name="q15" value="Yes" id="q55" onclick="fifteen();"> 
                      <label style="font-weight: normal;" for="q55">Yes</label>
                      <br>
                      <input type="radio" name="q15" value="No" id="q56" onclick="fifteen();"> 
                      <label style="font-weight: normal;" for="q56">No</label>
                      <br>
                      <input type="hidden" id="q15_choice15" class="form-control form-control-sm" name="q15_choice15">
                      <br>
                    </div>
                    <script>
                      function fifteen() {
                          var x = document.getElementById("q15_choice15");

                          if(document.getElementById('q55').checked) {
                              x.value = "Yes";
                          } else {
                              x.value = "No";
                          }
                      }
                    </script> 

                    <div style="overflow:auto;">
                      <div style="float:right;">
                        <button  type="button" class="btn btn-secondary" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                        <button type="button" class="btn btn-info" id="nextBtn" onclick="nextPrev(1)">Next</button>
                        <button type="submit" class="btn btn-info submit" id="submit" onclick="nextPrev(1)" name="academic_strand">Submit</button>
                      </div>
                    </div>

                    <!-- Circles which indicates the steps of the form: -->
                    <div style="text-align:center;margin-top:40px;">
                      <span class="step"></span>
                      <span class="step"></span>
                      <span class="step"></span>
                      <span class="step"></span>
                      <span class="step"></span>
                      <span class="step"></span>
                      <span class="step"></span>
                      <span class="step"></span>
                    </div>
                </form>

          </div>
         
        </div>
      </div>
    </section>

  </main><!-- End #main -->

<?php include 'home-footer.php'; ?>

<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
      // This function will display the specified tab of the form ...
      var x = document.getElementsByClassName("tab");
      x[n].style.display = "block";
      // ... and fix the Previous/Next buttons:
      if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
      } else {
        document.getElementById("prevBtn").style.display = "inline";
      }
      if (n == (x.length - 1)) {
        document.getElementById("submit").style.display = "inline";
        document.getElementById("nextBtn").innerHTML = "Submit";
        document.getElementById("nextBtn").style.display = "none";

      } else {
        document.getElementById("nextBtn").style.display = "inline";
        document.getElementById("nextBtn").innerHTML = "Next";
        document.getElementById("submit").style.display = "none";
      }
      // ... and run a function that displays the correct step indicator:
      fixStepIndicator(n)
    }

    function nextPrev(n) {
      // This function will figure out which tab to display
      var x = document.getElementsByClassName("tab");
      // Exit the function if any field in the current tab is invalid:
      if (n == 1 && !validateForm()) return false;
      // Hide the current tab:
      x[currentTab].style.display = "none";
      // Increase or decrease the current tab by 1:
      currentTab = currentTab + n;
      // if you have reached the end of the form... :
      if (currentTab >= x.length) {
        //...the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
      }
      // Otherwise, display the correct tab:
      showTab(currentTab);
    }

    function validateForm() {
      // This function deals with validation of the form fields
      var x, y, i, valid = true;
      x = document.getElementsByClassName("tab");
      y = x[currentTab].getElementsByTagName("input");
      // A loop that checks every input field in the current tab:
      for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
          // add an "invalid" class to the field:
          y[i].className += " invalid";
          // and set the current valid status to false:
          valid = false;
        }
      }
      // If the valid status is true, mark the step as finished and valid:
      if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
      }
      return valid; // return the valid status
    }

    function fixStepIndicator(n) {
      // This function removes the "active" class of all steps...
      var i, x = document.getElementsByClassName("step");
      for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
      }
      //... and adds the "active" class to the current step:
      x[n].className += " active";
    }
</script>
<br>