<title>SHStudent | Strand Result</title>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<?php include 'navbar.php'; ?>

  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">

          <h3 class="p-3 text-center text-info" style="text-decoration: underline;"><b>ACADEMIC RANKINGS BASED ON STUDENT'S ASSESSMENT RESULTS</b></h3>

           <div class="row d-flex justify-content-center">
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
                   <div class="smsall-box bg-white p-3">
                      <div class="inner mt-3">
                        <canvas id="myChart"></canvas>
                      </div>  
                   </div>
                 </div>

               <!--   <div class="col-lg-10 mt-5">
                    <hr>
                    <h3 class="p-3 text-center text-info" style="text-decoration: underline;"><b>List of students who chose Academic Track</b></h3>
                   <div class="card-body">
                      <table id="example2" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>Full name</th>
                          <th>Email</th>
                          <th>Strand result</th>
                        </tr>
                        </thead>
                        <tbody id="users_data">
                          <tr>
                            <?php 
                             // $sql = mysqli_query($conn, "SELECT * FROM users JOIN academic_strand_sort ON users.user_Id=academic_strand_sort.user_Id GROUP BY //strand_answer, users.user_Id");
                              //while ($row = mysqli_fetch_array($sql)) {
                            ?>
                              <td><?php //echo ' '.$row['firstname'].' '.$row['middlename'].' '.$row['lastname'].' '.$row['suffix'].' '; ?></td>
                              <td><?php //echo $row['email']; ?></td>
                              <td><?php //echo $row['strand_answer']; ?></td>
                          </tr>
                          <?php// } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                              <th>Full name</th>
                              <th>Email</th>
                              <th>Strand result</th>
                            </tr>
                        </tfoot>
                      </table>
                    </div>
                 </div> -->
              </div>
          
    </section>
  </div>

<!--   <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br> -->
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