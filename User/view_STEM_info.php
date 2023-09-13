<title>SHStudent | Strand Result</title>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<?php include 'navbar.php'; ?>

  <div class="content-wrapper" style="margin-bottom: 650px;">
    <section class="content mb-5">
      <div class="container-fluid">

          <h3 class="p-3 text-center text-info" style="text-decoration: underline;"><b>YOUR RESULT</b></h3>

           <div class="row d-flex justify-content-center">
              <div class="col-lg-12 col-md-12">
                <div class="smsall-box bg-white p-3">
                  <div class="inner mt-3">
                    <img src="../images/14.jpg" alt="" width="700" style="display: block;margin-left: auto;margin-right: auto;">
                  </div>
                  <h3 class="text-center mt-3"><b>Science, Technology, Engineering, and Mathematics (STEM)</b></h3>
                  <br>
                  <p style="text-align: justify; font-size:140%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The <b>Science, Technology, Engineering and Mathematics (STEM)</b> are intertwining disciplines when applied in the real world. The difference of the STEM curriculum with the other strands and tracks is the focus on advanced concepts and topics.</p>
                  <p class="mt-4 text-center" style="font-size:130%;"><a href="school_STEM-back-up.php">See Schools Offering Science, Technology, Engineering, and Mathematics (STEM)</a></p>
                  <p class="mt-4 text-center" style="font-size:130%;"><a href="school_STEM.php">See Courses Related to Science, Technology, Engineering, and Mathematics (STEM)</a></p>

                </div>
                <div class="p-1  mt-5 mb-5">
                    <embed src="https://www.youtube.com/embed/rFmhwMntPdU" type="" style="width: 100%; height: 600px;">
                </div>
              </div> 
                <?php 
                  $conn = new mysqli('localhost','root','','shs_track_support');
                  $fetch = mysqli_query($conn, "SELECT COUNT(sort_Id) AS sort_Id, strand_answer FROM academic_strand_sort GROUP BY strand_answer ORDER BY sort_Id DESC");
                  $row = mysqli_fetch_array($fetch);
                  foreach($fetch as $data)
                  {
                    $strand_answer[] = $data['strand_answer'];
                    $sort_Id[] = $data['sort_Id'];
                  }
                ?>
                 <div class="col-lg-9 col-md-9 bg-secondary p-3">
                  <h4>Here's how your result compared to others:</h4>
                   <div class="smsall-box bg-white p-3">
                      <div class="inner mt-3">
                        <canvas id="myChart"></canvas>
                      </div>  
                   </div>
                 </div>
              </div>
          
    </section>
  </div>
  
 <?php include 'footer.php'; ?>
 <script>
  // === include 'setup' then 'config' above ===
  const labels = <?php echo json_encode($strand_answer) ?>;
  const data = {
    labels: labels,
    datasets: [{
      label: 'Academic Strand Set',
      data: <?php echo json_encode($sort_Id) ?>,
      backgroundColor: [
        '#4d94ff'
      ],
      borderColor: [
        'white'
      ],
      borderWidth: 2
    }]
  };

  const config = {
    type: 'bar',
    data: data,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    },
  };

  var myChart = new Chart(
    document.getElementById('myChart'),
    config
  );


</script>