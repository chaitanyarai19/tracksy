<?php
session_start();
if (!isset($_SESSION['email'])) {
  echo "<script>window.top.location='https://bloodanytime.com/tracksy/login.php'</script>";
}
?>
<?php include_once "component/header.php"; ?>
<?php
include('config/db.php');

if (isset($_POST['create'])) {

  $a = $_POST['subject'];
  $b = $_SESSION['id'];

  $sql = "INSERT INTO resource (subject,admin_id) VALUES ('$a',$b)";
  if (mysqli_query($conn, $sql)) {
    echo "Records inserted successfully.";
    echo '<script>alert("Your are successfully created the Module")</script>';
  } else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  }
}

?>

<section class="section coming-soon" data-section="section3">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Create Resource</h2>
        </div>
      </div>
      <div class="col-md-6">
        <div class="right-content">
          <form method="POST">
            <div class="row">
              <div class="col-md-9">
                <fieldset>
                  <input name="subject" type="text" class="form-control" placeholder="Enter Your Resource Name" required="">
                </fieldset>
              </div>
              <div class="col-md-3">
                <fieldset>
                  <button type="submit" name="create" class="button mt-0">Create</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include_once "component/script.php"; ?>
<?php include_once "component/footer.php"; ?>