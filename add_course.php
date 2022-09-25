<?php
include('config/db.php');
session_start();
if (!isset($_SESSION['email'])) {
  echo "<script>window.top.location='https://bloodanytime.com/tracksy/login.php'</script>";
}

if (isset($_POST['create'])) {
  $a = $_POST['course_name'];
  $b = $_POST['subject'];
  $c = $_SESSION['id'];

  $sql = "INSERT INTO course (course_name, subject,admin_id) VALUES ('$a','$b',$c)";
  if (mysqli_query($conn, $sql)) {
    echo "Records inserted successfully.";
    echo '<script>alert("Your are successfully created the Module")</script>';
  } else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  }
}

?>
<?php include_once "component/header.php"; ?>
<section class="section coming-soon" data-section="section3">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Create your subject section</h2>
        </div>
      </div>
      <div class="col-md-6">
        <div class="right-content">
          <form method="POST">
            <div class="row">
              <div class="col-md-12">
                <fieldset>
                  <input name="courcse_name" type="text" class="form-control" placeholder="Enter Your Course" required="">
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <input name="subject" type="text" class="form-control" placeholder="Enter Your Subject" required="">
                </fieldset>
              </div>
              <div class="col-md-3">
                <fieldset>
                  <button type="submit" name="create" class="button">Create</button>
                </fieldset>
              </div>
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
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Choose Your Course</h2>
        </div>
      </div>
      <?php
      require "config/db.php";

      $query = "select * from course where admin_id = $_SESSION[id]";
      if ($result_set = mysqli_query($conn, $query)) {
        while ($row = $result_set->fetch_array(MYSQLI_ASSOC)) {
      ?>
          <div class="col-md-3 p-1">
            <div class="card text-center">
              <div class="card-body">
                <h5 class="card-title"><?php echo $row['subject']; ?></h5>
                <a href="add_topics.php?subject_id=<?php echo $row['sno']; ?>" type="button" class="btn btn-warning">Show More</a>
                <a href="component/delete.php?id=<?php echo $row['sno']; ?>" type="button" class="btn btn-danger">Delete</a>
              </div>
            </div>
          </div>
      <?php }
      } ?>
    </div>
  </div>
</section>

<?php include_once "component/script.php"; ?>
<?php include_once "component/footer.php"; ?>