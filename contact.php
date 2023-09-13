<?php include 'home-header.php'; ?>

<style>
   #icon, #icon2, #icon3 {
    color: #33ccff;
  }
  #icon:hover, #icon2:hover, #icon3:hover {
    background-color: #33ccff;
    color: #fff;
  }
  #submit {
    background-color: #33ccff;
  }
  #submit:hover {
    opacity: .8;
  }
</style>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in" style="background: #66ccff;">
      <div class="container" >
        <h2>Contact Us</h2>
        <p>For any feedback, please send us a message. <br> Thank you!</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt" id="icon"></i>
                <h4>Location:</h4>
                <p>Poblacion, Bustos, Bulacan</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope" id="icon2"></i>
                <h4>Email:</h4>
                <p>info.shstudent@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone" id="icon3"></i>
                <h4>Call:</h4>
                <p>+63 905 1368 075</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="processes.php" method="post" role="form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <?php if(isset($_SESSION['success'])) { ?>
              <div class="text-white" style="background: #33ccff;">
                <div class="alert sent-message">span<?php echo $_SESSION['success']; ?></div>
              </div>
              <?php unset($_SESSION['success']); } ?>
              <div class="text-center my-3"><button type="submit" class="btn rounded-pill text-white" id="submit" name="sendEmail">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

 <?php include 'home-footer.php'; ?>
 <script>
  $(document).ready(function() {
        setTimeout(function() {
            $('.alert').hide();
        } ,4000);
  });
</script>