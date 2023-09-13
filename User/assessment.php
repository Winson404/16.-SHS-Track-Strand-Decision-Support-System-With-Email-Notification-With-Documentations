<title>SHStudent | TRACK ASSESSMENT</title>
<?php include 'navbar.php'; include '../sweetalert_messages.php';  ?>
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Assessment</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Assessment</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <div class="col-md-9">
            <div class="card card-info">
              <div class="card-header">
              </div>
                <form class="p-3" action="process_save.php" method="POST">
                    <input type="hidden" class="form-control form-control-sm" name="user_Id" value="<?php echo $id; ?>">
                    <h3>Take assessment:</h3>
                    <hr>
                    <!-- One "tab" for each step in the form: -->
                    <div class="tab">
                      <h5><b>1.</b> What do you enjoy doing in your free time?</h5>
                      <input type="radio" name="q1" value="Solving, Writing or Communicating" id="q1" onclick="one();"> 
                      <label style="font-weight: normal;" for="q1">Solving, Writing or Communicating</label>
                      <br>
                      <input type="radio" name="q1" value="Cooking, Planting, Machine Jobs or Computer Activities" id="q2" onclick="one();"> 
                      <label style="font-weight: normal;" for="q2">Cooking, Planting, Machine Jobs or Computer Activities </label>
                      <br>
                      <input type="radio" name="q1" value="Do Physical Activities or Exercises" id="q3" onclick="one();"> 
                      <label style="font-weight: normal;" for="q3">Do Physical Activities or Exercises </label>
                      <br>
                      <input type="radio" name="q1" value="Taking pictures or Drawing" id="q4" onclick="one();"> 
                      <label style="font-weight: normal;" for="q4">Taking pictures or Drawing</label>
                      <br>
                      <input type="hidden" id="q1_choice1" class="form-control form-control-sm" name="q1_choice1">
                    </div>

                    <script>
                      function one() {
                          var x = document.getElementById("q1_choice1");

                          if(document.getElementById('q1').checked) {
                              x.value = "ACADEMIC";
                          } else if(document.getElementById('q2').checked) {
                              x.value = "TVL";
                          } else if(document.getElementById('q3').checked) {
                              x.value = "SPORTS";
                          } else {
                              x.value = "ARTS AND DESIGN";
                          }
                      }
                    </script> 

                    <div class="tab">
                      <h5><b>2.</b> Among the following, what are you good at?</h5>
                      <input type="radio" name="q2" value="Writing stories, Computations, Analyzing random case" id="q5" onclick="second();"> 
                      <label style="font-weight: normal;" for="q5">Writing stories, Computations, Analyzing random case</label>
                      <br>
                      <input type="radio" name="q2" value="Housework, Computers, Fixing things, Livelihood" id="q6" onclick="second();"> 
                      <label style="font-weight: normal;" for="q6">Housework, Computers, Fixing things, Livelihood</label>
                      <br>
                      <input type="radio" name="q2" value="Sports and Games" id="q7" onclick="second();"> 
                      <label style="font-weight: normal;" for="q7">Sports and Games</label>
                      <br>
                      <input type="radio" name="q2" value="Acting, Drawing" id="q8" onclick="second();"> 
                      <label style="font-weight: normal;" for="q8">Acting, Drawing</label>
                      <br>
                      <input type="hidden" id="q2_choice2" class="form-control form-control-sm" name="q2_choice2">
                    </div>

                    <script>
                      function second() {
                          var x = document.getElementById("q2_choice2");

                          if(document.getElementById('q5').checked) {
                              x.value = "ACADEMIC";
                          } else if(document.getElementById('q6').checked) {
                              x.value = "TVL";
                          } else if(document.getElementById('q7').checked) {
                              x.value = "SPORTS";
                          } else {
                              x.value = "ARTS AND DESIGN";
                          }
                      }
                    </script> 

                    <div class="tab">
                      <h5><b>3.</b> What type of workplace do you prefer?</h5>
                      <input type="radio" name="q3" value="The conventional work environment" id="q9" onclick="third();"> 
                      <label style="font-weight: normal;" for="q9">The conventional work environment</label>
                      <br>
                      <input type="radio" name="q3" value="The realistic environment" id="q10" onclick="third();"> 
                      <label style="font-weight: normal;" for="q10">The realistic environment </label>
                      <br>
                      <input type="radio" name="q3" value="The social work environment" id="q11" onclick="third();"> 
                      <label style="font-weight: normal;" for="q11">The social work environment</label>
                      <br>
                      <input type="radio" name="q3" value="The artistic work environment" id="q12" onclick="third();"> 
                      <label style="font-weight: normal;" for="q12">The artistic work environment</label>
                      <br>
                      <input type="hidden" id="q3_choice3" class="form-control form-control-sm" name="q3_choice3">
                    </div>

                    <script>
                      function third() {
                          var x = document.getElementById("q3_choice3");

                          if(document.getElementById('q9').checked) {
                              x.value = "ACADEMIC";
                          } else if(document.getElementById('q10').checked) {
                              x.value = "TVL";
                          } else if(document.getElementById('q11').checked) {
                              x.value = "SPORTS";
                          } else {
                              x.value = "ARTS AND DESIGN";
                          }
                      }
                    </script>

                    <div class="tab">
                      <h5><b>4.</b> People usually describe you as?</h5>
                      <input type="radio" name="q4" value="Smart and Logical" id="q13" onclick="fourth();"> 
                      <label style="font-weight: normal;" for="q13">Smart and Logical</label>
                      <br>
                      <input type="radio" name="q4" value="Competitive and Organized" id="q14" onclick="fourth();"> 
                      <label style="font-weight: normal;" for="q14">Competitive and Organized</label>
                      <br>
                      <input type="radio" name="q4" value="Athlete and Sportsman" id="q15" onclick="fourth();"> 
                      <label style="font-weight: normal;" for="q15">Athlete and Sportsman</label>
                      <br>
                      <input type="radio" name="q4" value="Creative and Resourceful" id="q16" onclick="fourth();"> 
                      <label style="font-weight: normal;" for="q16">Creative and Resourceful</label>
                      <br>
                      <input type="hidden" id="q4_choice4" class="form-control form-control-sm" name="q4_choice4">
                    </div>

                    <script>
                      function fourth() {
                          var x = document.getElementById("q4_choice4");

                          if(document.getElementById('q13').checked) {
                              x.value = "ACADEMIC";
                          } else if(document.getElementById('q14').checked) {
                              x.value = "TVL";
                          } else if(document.getElementById('q15').checked) {
                              x.value = "SPORTS";
                          } else {
                              x.value = "ARTS AND DESIGN";
                          }
                      }
                    </script>

                    <div class="tab">
                      <h5><b>5.</b> Based on the given professions, which are your dream job or related to your dream job?</h5>
                      <input type="radio" name="q5" value="Accountancy, Teacher, Civil Engineering, Psychology" id="q17" onclick="fifth();"> 
                      <label style="font-weight: normal;" for="q17">Accountancy, Teacher, Civil Engineering, Psychology</label>
                      <br>
                      <input type="radio" name="q5" value="Game Developer, Baker, Electrical/Electrician Technician" id="q18" onclick="fifth();"> 
                      <label style="font-weight: normal;" for="q18">Game Developer, Baker, Electrical/Electrician Technician</label>
                      <br>
                      <input type="radio" name="q5" value="Sports Science, Biomechanics" id="q19" onclick="fifth();"> 
                      <label style="font-weight: normal;" for="q19">Sports Science, Biomechanics</label>
                      <br>
                      <input type="radio" name="q5" value="Graphic Designer, Fine Arts" id="q20" onclick="fifth();"> 
                      <label style="font-weight: normal;" for="q20">Graphic Designer, Fine Arts</label>
                      <br>
                      <input type="hidden" id="q5_choice5" class="form-control form-control-sm" name="q5_choice5">
                    </div>

                    <script>
                      function fifth() {
                          var x = document.getElementById("q5_choice5");

                          if(document.getElementById('q17').checked) {
                              x.value = "ACADEMIC";
                          } else if(document.getElementById('q18').checked) {
                              x.value = "TVL";
                          } else if(document.getElementById('q19').checked) {
                              x.value = "SPORTS";
                          } else {
                              x.value = "ARTS AND DESIGN";
                          }
                      }
                    </script>

                    <div style="overflow:auto;">
                      <div style="float:right;">
                        <button  type="button" class="btn btn-secondary" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                        <button type="button" class="btn btn-info" id="nextBtn" onclick="nextPrev(1)">Next</button>
                        <button type="submit" class="btn btn-info submit" id="submit" onclick="nextPrev(1)" name="question_for_track">Submit</button>
                      </div>
                    </div>

                    <!-- Circles which indicates the steps of the form: -->
                    <div style="text-align:center;margin-top:40px;">
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
      </div>
    </section>
</div>


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

<?php include 'footer.php'; ?>
 

