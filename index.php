<?php include 'home-header.php'; ?>
<!-- MDOAL TO SELECT WHETHER GUEST OR NOT*************************************************************************************************************** -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-light">
        <h6 class="modal-title" id="exampleModalLabel">Select an option</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body p-5">
        
        <div class="row">
          <div class="col-md-6">
            <a href="assessment.php" class="get-started-btn text-center btn-secondary"  style="display: block;margin-left: auto;margin-right: auto;">Guest mode</a>
          </div>
          <div class="col-md-6">
            <a href="login.php" class="get-started-btn text-center bg-info"  style="display: block;margin-left: auto;margin-right: auto;">Sign In</a>
          </div>
        </div>
      </div>
     <!--  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
<!-- *************************************************************************************************************** -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center"
   style="background-image: url('images/book.jpg');" >
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Senior High School<br>Track and Strand</h1>
      <a href="assessment.php" type="button" class="btn-get-started bg-info">Get Started</a>
      <!-- <a type="button" class="btn-get-started bg-info" data-toggle="modal" data-target="#exampleModal">Get Started</a> -->
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h1 style="color:#17A2B8;"><b>What is Senior High School?</b></h3>
              <br>
            <p style="font-size:150%; text-align: justify;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Senior High School (SHS)</b> refers to Grade 11 and 12, the last two years of the K to 12 Basic Education Program. In SHS, students are required to go through a core curriculum and subjects under a track of thier choice.</p>
            <p class="text-muted" style="font-size:130%";>See: <a style="color:#17A2B8;" href="https://www.deped.gov.ph/wp-content/uploads/2018/10/DM_s2016_076.pdf" target="_blank">More Details</a></p>
          </div>
          <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <embed src="https://www.youtube.com/embed/szfsAFpOAFY" type="" style="width: 100%; height: 600px;">
          </div>
        </div>
      </div>
    </section>

    <section id="about" class="about">
      <style>
        div.container div.row p a.learnmore {
          color: #fff;
          background-color: #33bbff;
        }
        div.container div.row p a.learnmore:hover {
          opacity: .8;
        }
      </style>
      <div class="container" data-aos="fade-up">
        <h3 class="text-center mb-4" style="margin-top: -40px; color: #17A2B8; "><b>Senior High School Tracks</b></h3>
        <br>
        <div class="row">
          <div class="col-lg-3" data-aos="fade-left" data-aos-delay="100" 
          >
            <img src="images/1.png" alt="" width="120" style="display: block;margin-left: auto;margin-right: auto;">
            <br>
            <h5 class="text-center mt-2"><b>Academic Track</b></h5>
            <br>
             <p class="text-center "><a href="academic_track.php" class="badge badge-info learnmore">Learn More</a></p>
          </div>
          <div class="col-lg-3" data-aos="fade-left" data-aos-delay="100">
            <img src="images/4.png" alt="" width="120" style="display: block;margin-left: auto;margin-right: auto;">
            <br>
            <h5 class="text-center mt-2"><b>Technical-Vocational-Livelihood (TVL) Track</b></h5>
             <p class="text-center"><a href="tvl_track.php" class="badge badge-info learnmore">Learn More</a></p>
             <br>
          </div>
          <div class="col-lg-3" data-aos="fade-left" data-aos-delay="100">
            <img src="images/3.png" alt="" width="120" style="display: block;margin-left: auto;margin-right: auto;">
            <br>
            <h5 class="text-center mt-2"><b>Sports Track</b></h5>
            <br>
             <p class="text-center"><a href="sports_track.php" class="badge badge-info learnmore">Learn More</a></p>
          </div>
          <div class="col-lg-3" data-aos="fade-left" data-aos-delay="100">
            <img src="images/2.png" alt="" width="120" style="display: block;margin-left: auto;margin-right: auto;">
            <br>
            <h5 class="text-center mt-2"><b>Arts and Design Track</b></h5>
            <br>
             <p class="text-center"><a href="arts_design_track.php" class="badge badge-info learnmore">Learn More</a></p>
          </div>
        </div>
      </div>
    </section>

    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3 class="text-center">Still unsure about what to take in <b>Senior High</b>?</h3>
            <p class="text-center" style="font-size:120%;" >Take this SHS Track and Strand Assessment Examination to help you find a track and strand that suits you best.</p>
            <p class="text-center" style="font-size:105%;"><a href="assessment.php" class="learnmore badge"><b>Assessment for Track</b></a></p>
          </div>
        </div>
      </div>
    </section>


    <section id="about" class="about bg-light">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3 class="text-center"><b>SHStudent Total visitor</b></h3>
            <h1 class="text-center"><span class="badge bg-info"><?php echo $total_visitors;?></span></h1>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

<?php include 'home-footer.php'; ?>