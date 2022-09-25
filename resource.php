<?php
session_start();
include_once "component/header.php"; ?>
<section class="section courses" data-section="section4">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Choose Your Course For Resources</h2>
        </div>
      </div>

      <?php
      require "config/db.php";

      $query = "select * from resource";

      if ($result_set = mysqli_query($conn, $query)) {
        while ($row = $result_set->fetch_array(MYSQLI_ASSOC)) {
      ?>
          <div class="col-md-3 p-1">
            <div class="card text-center">
              <div class="card-body">
                <h5 class="card-title"><?php echo $row['subject']; ?></h5>
                <a href="resource_data.php?course=<?php echo $row['subject']; ?>&resource_id=<?php echo $row['sno']; ?>" type="button" class="btn btn-warning">Show More</a>
                <?php
                if (isset($_SESSION['email'])) {
                  echo '<a href="component/delete.php?id=' . $row["sno"] . '" type="button" class="btn btn-danger">Delete</a>';
                }
                ?>

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