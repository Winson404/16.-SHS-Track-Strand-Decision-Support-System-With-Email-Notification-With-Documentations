<title>SHStudent | Track Result</title>
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
                    <img src="../images/21.png" alt="" width="700" style="display: block;margin-left: auto;margin-right: auto;">
                  </div>
                  <h3 class="text-center mt-3"><b>Arts and Design Track</b></h3>
                  <br>
                  <p style="text-align: justify; font-size:140%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The <b>Arts and Design Track</b> provides students opportunities to express themselves in the performing arts and design fields. This track may appeal to students who would like to pursue their more creative activities. This track aims is to get students a career in the creative field after they graduate.</p>
                  <p class="mt-4 text-center" style="font-size:130%;"><a href="school_TVL-back-up.php">See Schools Offering Arts and Design</a></p>
                  <p class="mt-4 text-center" style="font-size:130%;"><a href="school_TVL.php">See Courses Related to Arts and Design</a></p>
                </div>
                <div class="p-1  mt-5 mb-5">
                    <embed src="https://www.youtube.com/embed/OQPEEkCaHaE" type="" style="width: 100%; height: 600px;">
                </div>
              </div> 
                <?php 
                  $conn = new mysqli('localhost','root','','shs_track_support');
                  $fetch = mysqli_query($conn, "SELECT COUNT(sort_Id) AS sort_Id, strand_answer FROM tvl_strand_sort GROUP BY strand_answer ORDER BY sort_Id DESC");
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
      label: 'TVL Strand Set',
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