<?php session_start(); ?>
<?php 
include_once "component/header.php"; 
?>

<!-- ***** Main Banner Area Start ***** -->
<section class="section main-banner" id="top" data-section="section1">
  <video autoplay muted loop id="bg-video">
    <source src="assets/images/course-video.mp4" type="video/mp4" />
  </video>

  <div class="video-overlay header-text">
    <div class="caption">
      <h6>Track Topic Records</h6>
      <h2><em>Your</em> Classroom</h2>
      <div class="main-button">
        <div class="scroll-to-section"><a href="#section2">Discover more</a></div>
      </div>
    </div>
  </div>
</section>
<!-- ***** Main Banner Area End ***** -->


<section class="features">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-12">
        <div class="features-post">
          <div class="features-content">
            <div class="content-show">
              <h4><i class="fa fa-pencil"></i>Track Topics</h4>
            </div>
            <div class="content-hide">
              
              <div class="scroll-to-section"><a href="#section2">More Info.</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-12">
        <div class="features-post second-features">
          <div class="features-content">
            <div class="content-show">
              <h4><i class="fa fa-graduation-cap"></i>Easy Teaching</h4>
            </div>
            <div class="content-hide">
            
              <div class="scroll-to-section"><a href="#section3">Details</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-12">
        <div class="features-post third-features">
          <div class="features-content">
            <div class="content-show">
              <h4><i class="fa fa-book"></i>Manage Resource </h4>
            </div>
            <div class="content-hide">
             
              <div class="scroll-to-section"><a href="#section4">Read More</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section why-us" data-section="section2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Why choose TrackSy?</h2>
        </div>
      </div>
      <div class="col-md-12">
        <div id='tabs'>
          <ul>
            <li><a href='#tabs-1'>Why Tracksy</a></li>
            <li><a href='#tabs-2'>How Tracksy</a></li>
            <li><a href='#tabs-3'>When Tracksy</a></li>
          </ul>
          <section class='tabs-content'>
            <article id='tabs-1'>
              <div class="row">
                <div class="col-md-6">
                  <img src="assets/images/choose-us-image-01.png" alt="">
                </div>
                <div class="col-md-6">
                  <h4>To track teaching topic wise</h4>
                  <p> To ease the teachers from last minute headaches running to complete left off topics, by keeping a track of it we thought of developing a web-application that does the same .</p>
                </div>
              </div>
            </article>
            <article id='tabs-2'>
              <div class="row">
                <div class="col-md-6">
                  <img src="assets/images/choose-us-image-02.png" alt="">
                </div>
                <div class="col-md-6">
                  <h4>How It Works ?</h4>
                  <p>Here teachers can create his/her account & add topics of the subject for the session, check off once the topics are taught, upload to-the-point class notes & important questions . This way he/she can keep a track of the syllabus & get rid off from the last minute hustle .</p>
                </div>
              </div>
            </article>
            <article id='tabs-3'>
              <div class="row">
                <div class="col-md-6">
                  <img src="assets/images/choose-us-image-03.png" alt="">
                </div>
                <div class="col-md-6">
                  <h4>heading</h4>
                  <p>Hustling ? Catching up the syllabus     Choose TrackSy</p>
                </div>
              </div>
            </article>
          </section>
        </div>
      </div>
    </div>
  </div>
</section>




<section class="section video" data-section="section5">
  <div class="container">
    <div class="row">
      <div class="col-md-6 align-self-center">
        <div class="left-content">
          <h4>About<em> TrackSy</em></h4>
          <p>TrackSy is a online syllabus tracking system which is curated solely for the easy and hassle free work for teachers. We at TrackSy make sure to track and record all the syllabus regarding information so that teachers don't have to think back about the syllabus.


Who we are
We are a group of engineers trying to make lives easier specifically of the teachers' who have so much to look after to.
          </p>
          <div class="main-button"><a rel="nofollow" href="https://fb.com/templatemo" target="_parent">Explore More</a></div>
        </div>
      </div>
  
    </div>
  </div>
</section>

<section class="section contact" data-section="section6">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Let’s Keep In Touch</h2>
        </div>
      </div>
      <div class="col-md-6">

        <!-- Do you need a working HTML contact-form script?
                	
                    Please visit https://templatemo.com/contact page -->

        <form id="contact" action="" method="post">
          <div class="row">
            <div class="col-md-6">
              <fieldset>
                <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
              </fieldset>
            </div>
            <div class="col-md-6">
              <fieldset>
                <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required="">
              </fieldset>
            </div>
            <div class="col-md-12">
              <fieldset>
                <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
              </fieldset>
            </div>
            <div class="col-md-12">
              <fieldset>
                <button type="submit" id="form-submit" class="button">Send Message Now</button>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-6">
        <div id="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117371.19519783954!2d79.89871234554657!3d23.175679611584364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3981ae1a0fb6a97d%3A0x44020616bc43e3b9!2sJabalpur%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1664083862102!5m2!1sen!2sin" width="100%" height="422px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include_once "component/script.php"; ?>
<?php include_once "component/footer.php"; ?>