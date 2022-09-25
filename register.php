<?php
session_start();
if (isset($_SESSION['email'])) {
  echo "<script>window.top.location='https://bloodanytime.com/tracksy/add_course.php'</script>";
}
?>
<?php include_once "component/header.php"; ?>
<section class="section coming-soon" data-section="section3">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <div class="right-content">
          <div class="top-content">
            <h6>Register</h6>
          </div>
          <form id="register" method="POST">
            <div class="row">
              <div class="col-md-12">
                <fieldset>
                  <input name="name" type="text" class="form-control" id="name" placeholder="Enter Your Name" required="">
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <input name="email" type="email" class="form-control" id="email" placeholder="Enter Your Email" required="">
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <input name="phone" type="text" class="form-control" id="phone" placeholder="Enter Your Phone Number" required="">
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <input name="password" type="password" class="form-control" id="password" placeholder="Enter Your Password" required="">
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="button">Register</button>
                </fieldset>
              </div>
              <div class="col-md-12 mt-2" id="register_message"></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include_once "component/script.php"; ?>
<script src="controller/ajax/register.js"></script>
<?php include_once "component/footer.php"; ?>