<title>SHStudent | ABM STRAND</title>

<?php include 'home-header.php'; ?>




  <div class="content-wrapper" style="margin-bottom: 250px;">
    <section class="content mb-5">
      <div class="container-fluid">
          <h3 class="p-3 mt-5 text-center text-info" style="text-decoration: underline;"><b>College courses for Accountancy, Business, and Management (ABM)</b></h3>
            <div class="smsall-box bg-white p-3">
                <div class="row d-flex justify-content-center">
                   <div class="col-lg-11 small-box bg-white p-3 table-responsive">
                       <table class="table table-bordered table-hover" id="example1"  style="border-top: 1px solid lightgrey;">
                  <thead class="bg-light">
                          <tr>
                            <th>College courses for ABM</th>
                            <th>How long it takes</th>
                            <th>With Board / Licensure Examination</th>
                          </tr>
                        </thead>
                        <tbody id="userss_data">

                          <tr>
                            <td>Bachelor of Science in Accountancy (BSA)</td>
                            <td>5 years</td>
                            <td>Required</td>
                          </tr>

                          <tr>
                            <td>Bachelor of Science in Accounting Technology (BSACT)</td>
                            <td>4 years</td>
                            <td>Required</td>
                          </tr>

                          <tr>
                            <td>Bachelor of Science in Accounting Information System (BSAIS)</td>
                            <td>4 years</td>
                            <td>Not Required</td>
                          </tr>

                          <tr>
                            <td>Bachelor of Science in Management Accounting (BSMA)</td>
                            <td>4 years</td>
                            <td>Not Required</td>
                          </tr>

                          <tr>
                            <td>Bachelor of Science in Business Administration (BSBA)</td>
                            <td>4 years</td>
                            <td>Not Required</td>
                          </tr> 

                           <tr>
                            <td>Bachelor of Science in Entrepreneurship (BS ENTREP)</td>
                            <td>4 years</td>
                            <td>Not Required</td>
                          </tr>

                          <tr>
                            <td>Bachelor of Science in Agribusiness (BSAB)</td>
                            <td>4 years</td>
                            <td>Required</td>
                          </tr>

                          <tr>
                            <td>Bachelor of Science in Office Administration (BSOA)</td>
                            <td>4 years</td>
                            <td>Not Required</td>
                          </tr>

                          <tr>
                            <td>Bachelor of Science in Real Estate Management (BS REM)</td>
                            <td>4 years</td>
                            <td>Required</td>
                          </tr>

                          <tr>
                            <td>Bachelor of Science in Customs Administration (BSCA)</td>
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