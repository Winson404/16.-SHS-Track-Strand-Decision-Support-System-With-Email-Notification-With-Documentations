<title>SHStudent | STEM STRAND</title>

<?php include 'home-header.php'; ?>

  <div class="content-wrapper" style="margin-bottom: 250px;">
    <section class="content mb-5">
      <div class="container-fluid">
          <h3 class="p-3 mt-5 text-center text-info" style="text-decoration: underline;"><b>College courses for Science, Technology, Engineering, and Mathematics (STEM)</b></h3>
            <div class="smsall-box bg-white p-3">
             <div class="row d-flex justify-content-center">
              <div class="col-lg-11 small-box bg-white p-3 table-responsive">
               <table class="table table-bordered table-hover" id="example1"  style="border-top: 1px solid lightgrey;">
                  <thead class="bg-light">
                    <tr>
                      <th>College courses for STEM</th>
                      <th>How long it takes</th>
                      <th>With Board / Licensure Examination</th>
                    </tr>
                  </thead>
                  <tbody id="users_data">

                    <tr>
                      <td>Bachelor of Science in Computer Engineering (BSCE)</td>
                      <td>4 years</td>
                      <td>Not Required</td>
                    </tr>

                    <tr>
                      <td>Bachelor's Degree in Aerospace Engineering</td>
                      <td>4 years</td>
                      <td>Required</td>
                    </tr>

                    <tr>
                      <td>Bachelor of Science in Biochemistry</td>
                      <td>4 years</td>
                      <td>Not Required</td>
                    </tr>

                    <tr>
                      <td>Bachelor of Science in Biology</td>
                      <td>4 years</td>
                      <td>Not Required</td>
                    </tr>

                    <tr>
                      <td>Bachelor of Science in Chemical Engineering</td>
                      <td>5 years</td>
                      <td>Required</td>
                    </tr> 

                     <tr>
                      <td>Bachelor of Science in Civil Engineering (BS CE)</td>
                      <td>5 years</td>
                      <td>Required</td>
                    </tr>

                    <tr>
                      <td>Bachelor of Science in Computer Science (BSCS)</td>
                      <td>4 years</td>
                      <td>Not Required</td>
                    </tr>

                    <tr>
                      <td>Bachelor of Science in Electrical Engineering (BSEE)</td>
                      <td>4 years</td>
                      <td>Required</td>
                    </tr>

                    <tr>
                      <td>Bachelor of Science in Mechanical Engineering (BSME)</td>
                      <td>4 years</td>
                      <td>Required</td>
                    </tr>

                    <tr>
                      <td>Bachelor of Science in Physics (BS Physics)</td>
                      <td>4 years</td>
                      <td>Required</td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
            </div>
      </div>
    </section>
  </div>
  
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function () {
    $('#example1').DataTable();
});
</script>
<style>
#terms:hover {
  color: #33ccff;
}
#terms:not(:hover) {
  color:  grey;
}
</style>
<!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container d-md-flex py-4">
      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>SHS Track and Strand Decision Support System</span></strong>. All Rights Reserved ● <a id="terms" href="terms.php">Terms of Service</a>
        </div>
      </div>
      
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center bg-info"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="bootstrap.bundle.min.js"></script>
 
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- <script src="jquery.slim.min.js"></script> -->
</body>

</html>