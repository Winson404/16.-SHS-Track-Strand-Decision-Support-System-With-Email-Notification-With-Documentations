<title>SHStudent | Dashboard</title>

<?php include 'navbar.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <div class="content-wrapper" style="margin-bottom: 200px;">


    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </div>


    <section class="content">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <?php 
            $academic = mysqli_query($conn, "SELECT sort_Id FROM track_sort WHERE user_Id !=0 AND track_answer='ACADEMIC' GROUP BY user_Id");
            $row_academic2 = mysqli_num_rows($academic);

            $tvl = mysqli_query($conn, "SELECT sort_Id FROM track_sort WHERE user_Id !=0 AND track_answer='TVL' GROUP BY user_Id");
            $row_tvl = mysqli_num_rows($tvl);

            $sports = mysqli_query($conn, "SELECT sort_Id FROM track_sort WHERE user_Id !=0 AND track_answer='SPORTS' GROUP BY user_Id");
            $row_sports = mysqli_num_rows($sports);

            $arts_design = mysqli_query($conn, "SELECT sort_Id FROM track_sort WHERE user_Id !=0 AND track_answer='ARTS AND DESIGN' GROUP BY user_Id");
            $row_arts_design = mysqli_num_rows($arts_design);
          ?>



          <?php 
            $i = 1;
            $date_registered = date('Y-m-d');
            $fetch = mysqli_query($conn, "SELECT *,COUNT(user_Id) AS stud_Id FROM track_sort WHERE user_Id !=0 GROUP BY track_answer ORDER BY stud_Id DESC");
            while($row_academic = mysqli_fetch_array($fetch)) {
            ?>

            <div class="col-lg-3 col-6">
              <?php if($row_academic['track_answer'] == 'ACADEMIC'): ?>
                  <div class="small-box bg-info">
              <?php elseif($row_academic['track_answer'] == 'TVL'): ?>
                  <div class="small-box bg-warning">
              <?php elseif($row_academic['track_answer'] == 'SPORTS'): ?>
                  <div class="small-box bg-success">
              <?php else: ?>
                  <div class="small-box bg-danger">
              <?php endif; ?>
              
                <div class="inner">
                  <?php if($row_academic['track_answer'] == 'ACADEMIC'): ?>
                      <h3><?php echo $row_academic2; ?></h3>
                  <?php elseif($row_academic['track_answer'] == 'TVL'): ?>
                      <h3><?php echo $row_tvl; ?></h3>
                  <?php elseif($row_academic['track_answer'] == 'SPORTS'): ?>
                      <h3><?php echo $row_sports; ?></h3>
                  <?php else: ?>
                      <h3><?php echo $row_arts_design; ?></h3>
                  <?php endif; ?>

                  <p><?php echo $row_academic['track_answer']; ?></p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                  <?php if($row_academic['track_answer'] == 'ACADEMIC'): ?>
                      <a href="view_ACADEMIC.php" class="small-box-footer">Students who chose <?php echo $row_academic['track_answer']; ?></a>
                  <?php elseif($row_academic['track_answer'] == 'TVL'): ?>
                      <a href="view_TVL.php" class="small-box-footer">Students who chose <?php echo $row_academic['track_answer']; ?></a>
                  <?php elseif($row_academic['track_answer'] == 'SPORTS'): ?>
                      <a href="view_SPORTS.php" class="small-box-footer">Students who chose <?php echo $row_academic['track_answer']; ?></a>
                  <?php else: ?>
                      <a href="view_ARTS_DESIGN.php" class="small-box-footer">Students who chose <?php echo $row_academic['track_answer']; ?></a>
                  <?php endif; ?>
                
              </div>
            </div>
          <?php } ?>


          <?php 
            // $fetch = mysqli_query($conn, "SELECT sort_Id FROM track_sort WHERE user_Id !=0 AND track_answer='ACADEMIC' GROUP BY user_Id");
            // $row_academic = mysqli_num_rows($fetch);
            ?>
            <!-- <div class="col-lg-3 col-6">
              <div class="small-box bg-info">
                <div class="inner">
                  <h3><?php //echo $row_academic; ?></h3>
                  <p>ACADEMIC</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="view_ACADEMIC.php" class="small-box-footer">Students who chose ACADEMIC</a>
              </div>
            </div> -->

            <?php 
            // $fetch = mysqli_query($conn, "SELECT sort_Id FROM track_sort WHERE user_Id !=0 AND track_answer='TVL' GROUP BY user_Id");
            // $row_academic = mysqli_num_rows($fetch);
            ?>
           <!--  <div class="col-lg-3 col-6">
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3><?php //echo $row_academic; ?></h3>

                  <p>TVL</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="view_TVL.php" class="small-box-footer">Students who chose TVL</a>
              </div>
            </div> -->

            <?php 
            // $fetch = mysqli_query($conn, "SELECT sort_Id FROM track_sort WHERE user_Id !=0 AND track_answer='SPORTS' GROUP BY user_Id");
            // $row_academic = mysqli_num_rows($fetch);
            ?>
          <!--   <div class="col-lg-3 col-6">
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3><?php //echo $row_academic; ?></h3>

                  <p>SPORTS</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="view_SPORTS.php" class="small-box-footer">Students who chose SPORTS</a>
              </div>
            </div>
          </div>
          <div class="row d-flex justify-content-center">
 -->

            <?php 
            // $fetch = mysqli_query($conn, "SELECT sort_Id FROM track_sort WHERE user_Id !=0 AND track_answer='ARTS AND DESIGN' GROUP BY user_Id");
            // $row_academic = mysqli_num_rows($fetch);
            ?>
           <!--  <div class="col-lg-3 col-6">
              <div class="small-box bg-primary">
                <div class="inner">
                  <h3><?php //echo $row_academic; ?></h3>

                  <p>ARTS AND DESIGN</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="view_ARTS_DESIGN.php" class="small-box-footer">Students who chose ARTS AND DESIGN</a>
              </div>
            </div> -->

          <div class="col-lg-3 col-6">
            <div class="small-box bg-light">
              <div class="inner">
                <?php
                  $admin = mysqli_query($conn, "SELECT user_Id from users WHERE user_type='Admin'");
                  $row_admin = mysqli_num_rows($admin);
                 ?>
                <h3><?php echo $row_admin; ?></h3>

                <p>Administrators</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="admin.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <?php
                  $users = mysqli_query($conn, "SELECT user_Id from users WHERE user_type='User'");
                  $row_users = mysqli_num_rows($users);
                 ?>
                <h3><?php echo $row_users; ?></h3>

                <p>Registered Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="users.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


        </div>

        <h3 class="p-3 text-center text-info mt-5" style="text-decoration: underline;"><b>SHS TRACK RANKINGS BASED ON STUDENT'S ASSESSMENT RESULTS</b></h3>
         <div class="row d-flex justify-content-center">
          <?php 
            $conn = new mysqli('localhost','root','','shs_track_support');
            $fetch = mysqli_query($conn, "SELECT *, COUNT(sort_Id) AS sorts_Id FROM track_sort WHERE user_Id != 0 GROUP BY track_answer ORDER BY sorts_Id DESC");
            $row = mysqli_fetch_array($fetch);
            foreach($fetch as $data)
            {
              $strand_answer[] = $data['track_answer'];
              $sort_Id[] = $data['sorts_Id'];
            }
          ?>
           <div class="col-lg-9 col-md-9 bg-secondary p-3">
             <div class="smsall-box bg-white p-3">
                <div class="inner mt-3">
                  <canvas id="myChart"></canvas>
                </div>  
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
      label: 'SHS Track Set',
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