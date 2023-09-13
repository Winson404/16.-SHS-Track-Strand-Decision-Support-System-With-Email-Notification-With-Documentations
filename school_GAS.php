<title>SHStudent | GAS STRAND</title>

<?php include 'home-header.php'; ?>

  <div class="content-wrapper" style="margin-bottom: 250px;">
    <section class="content mb-5">
      <div class="container-fluid">
          <h3 class="p-3 mt-5 text-center text-info" style="text-decoration: underline;"><b>College courses for General Academic Strand (GAS)</b></h3>
            <div class="smsall-box bg-white p-3">
              <div class="row d-flex justify-content-center">
               <div class="col-lg-11 small-box bg-white p-3 table-responsive">
                <table class="table table-bordered table-hover" id="example1"  style="border-top: 1px solid lightgrey;">
                  <thead class="bg-light">
                    <tr>
                      <th>College courses for GAS</th>
                      <th>How long it takes</th>
                      <th>With Board / Licensure Examination</th>
                    </tr>
                  </thead>
                  <tbody id="users_data">

                    <tr>
                      <td>Bachelor of Elementary Education (BEED)</td>
                      <td>4 years</td>
                      <td>Required</td>
                    </tr>

                    <tr>
                      <td>Bachelor of Secondary Education (BSED)</td>
                      <td>4 years</td>
                      <td>Required</td>
                    </tr>

                    <tr>
                      <td>Bachelor of Early Childhood Education (BECEd)</td>
                      <td>4 years</td>
                      <td>Required</td>
                    </tr>

                    <tr>
                      <td>Bachelor of Special Needs Education (BSNEd)</td>
                      <td>4 years</td>
                      <td>Required</td>
                    </tr>

                    <tr>
                      <td>Bachelor of Science in Applied Economics</td>
                      <td>3 years</td>
                      <td>Not Required</td>
                    </tr> 

                     <tr>
                      <td>Bachelor of Science in Management Information Systems</td>
                      <td>4 years</td>
                      <td>Not Required</td>
                    </tr>

                    <tr>
                      <td>Bachelor of Science in Technology Communication Management (BS-TCM)</td>
                      <td>4 years</td>
                      <td>Not Required</td>
                    </tr>

                    <tr>
                      <td>Bachelor of Arts in Mass Communication (AB Mass Comm)</td>
                      <td>4 years</td>
                      <td>Not Required</td>
                    </tr>

                    <tr>
                      <td>Bachelor of Fine Arts major in Visual Communication</td>
                      <td>4 years</td>
                      <td>Not Required</td>
                    </tr>

                    <tr>
                      <td>Bachelor of Science in Technical Communication</td>
                      <td>4 years</td>
                      <td>Not Required</td>
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