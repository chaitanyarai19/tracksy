<?php
session_start();
?>
<?php include_once "component/header.php"; ?>

<section class="section coming-soon" data-section="section3">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>create resources</h2>
        </div>
      </div>
      <div class="col-md-6">
        <div class="right-content">
          <form id="upload_resource" method="POST">
            <div class="row">
              <div class="col-md-9">
                <fieldset>
                  <input name="resource_upload" type="file" class="form-control" placeholder="Enter Your Topic Name" required="">
                  <input name="resource_id" id="resource_id" type="hidden" value="<?php echo $_GET['resource_id']; ?>">
                  <input name="name" id="name" type="hidden" value="<?php echo $_GET['course']; ?>">
                </fieldset>
              </div>
              <div class="col-md-3">
                <fieldset>
                  <button type="submit" id="form-submit" class="button mt-0">Create</button>
                </fieldset>
              </div>
              <div class="col-md-12 mt-2" id="resource_upload_message"></div>
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
    <div class="row" id="display_resource"></div>
  </div>
</section>

<?php include_once "component/script.php"; ?>
<script src="controller/ajax/resource.js"></script>
<?php include_once "component/footer.php"; ?>