<?php
$capture = "topic";
session_start();
if (!isset($_SESSION['email'])) {
  echo "<script>window.top.location='https://bloodanytime.com/tracksy/login.php'</script>";
}
include_once "component/header.php";
if (!isset($_GET['subject_id'])) {
  echo "<script>window.top.location='https://bloodanytime.com/tracksy/add_course.php'</script>";
}
?>
<section class="section coming-soon" data-section="section3">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>create your topics</h2>
        </div>
      </div>
      <div class="col-md-6">
        <div class="right-content">
          <form id="create_topic" method="POST">
            <div class="row">
              <div class="col-md-9">
                <fieldset>
                  <input name="topic" type="text" class="form-control" placeholder="Enter Your Topic Name" required="">
                  <input name="subject_id" id="subject_id" type="hidden" value="<?php echo $_GET['subject_id']; ?>">
                </fieldset>
              </div>
              <div class="col-md-3">
                <fieldset>
                  <button type="submit" id="form-submit" class="button mt-0">Create</button>
                </fieldset>
              </div>
              <div class="col-md-12 mt-2" id="topic_create_message"></div>
            </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  </div>
</section>
<section class="section courses" data-section="section4">
  <div class="container-fluid">
    <div class="row" id="display_topic">
    </div>
  </div>
</section>
<?php include_once "component/capturePhoto.php"; ?>
<?php include_once "component/script.php"; ?>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script src="controller/CapturePhoto/plugin/sweetalert/sweetalert.min.js"></script>
<script src="controller/CapturePhoto/plugin/webcamjs/webcam.min.js"></script>
<script src="controller/CapturePhoto/main.js"></script>
<script src="controller/ajax/topic.js"></script>
<?php include_once "component/footer.php"; ?>