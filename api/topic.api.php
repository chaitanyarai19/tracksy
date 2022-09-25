<?php
include "../config/db.php";

session_start();
$data = json_decode(file_get_contents("php://input"), true);

if (isset($_GET['type']) && $_GET['type'] == 'create') {

  $name = $_POST['topic'];
  $subject_id = $_POST['subject_id'];
  // $subject = 'Register Success';
  // $body = registrationTemplate($name,$_SESSION['mail'],$data['password']);
  // $altBody = 'Thank you for creating account at Tour Guider';
  $sql = "INSERT INTO topic (name,subject_id) VALUES ('$name',$subject_id)";
  if (mysqli_query($conn, $sql)) {
    echo " <div class='alert alert-success'>Register Success</div>";
  } else {
    echo " <div class='alert alert-danger'>Register Failed</div>";
  }
}
if (isset($_GET['type']) && $_GET['type'] == 'show') {
  $id = $_GET['id'];

  $sql = "SELECT * FROM topic WHERE subject_id = $id";
  $output = "";

  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      if ($row['docs']) {
        $output .= '<div class="col-md-4 p-1">
                <div class="card text-center bg-success text-white">
                  <div class="card-body">
                    <h5 class="card-title">' . $row['name'] . '</h5>
                  </div>
                </div>
            </div>';
      } else {
        $output .= '<div class="col-md-4 p-1">
                <div class="card text-center">
                  <div class="card-body">
                    <h5 class="card-title">' . $row['name'] . '</h5>
                    <form class="upload_docs" method="POST">
                      <div class="row">
                        <div class="col-md-8">
                          <fieldset>
                            <input name="docs" type="file" class="form-control" required="">
                            <input name="topic_id" type="hidden" value="' . $row['id'] . '">
                            <input name="name" type="hidden" value="' . $row['name'] . '">
                          </fieldset>
                        </div>
                        <div class="col-md-2">
                          <fieldset>
                            <button type="submit" id="form-submit" class="btn btn-warning button mt-0">Upload</button>
                            </fieldset>
                            </div>
                            <div class="col-md-2">
                            <button type="button" class="btn btn-warning button mt-0 mx-2 accesscamerafortopic" data-toggle="modal" data-target="#photoModal" data-id="'.$row["id"].'" data-name="'.$row["name"].'" ><i class="fa fa-camera"></i></button>
                            </div>
                        </div>
                      </div>
                    </form>
                    <a href="#" type="button" class="btn btn-danger delete_topic" data-id="' . $row['id'] . '">Delete</a>
                  </div>
                </div>
            </div>';
      }
    }
  }
  echo $output;
}

if (isset($_GET['type']) && $_GET['type'] == 'upload') {
  $id = $_POST['topic_id'];
  
  if(isset($_POST['capture']) && $_POST['capture'] == 'camera'){
    $encoded_data = $_POST['docs'];
    $binary_data = base64_decode($encoded_data);
    
    $photoname = strtolower(str_replace(" ", "_", $_POST['name'])) . time() .uniqid().'.jpeg';
    
    $result = file_put_contents('../src/upload/'.$photoname, $binary_data);
    
    if($result) {
      $sql = "UPDATE topic SET docs = '$photoname' WHERE id = $id";
      if (mysqli_query($conn, $sql)) {
        echo 'success';
      } else {
        echo " <div class='alert alert-danger'>Failed to Upload</div>";
        unlink('../src/upload/' . $photoname);
      }
    } else {
      echo die('Could not save image! check file permission.');
    }
  }else{
    $fileName = $_FILES['docs']['name'];
    $tmpFileName = $_FILES['docs']['tmp_name'];
    $extension = pathinfo($_FILES['docs']['name'], PATHINFO_EXTENSION);
    $newFileName = strtolower(str_replace(" ", "_", $_POST['name'])) . time() . rand(1, 100000) . "." . $extension;
    if (move_uploaded_file($tmpFileName, "../src/upload/" . $newFileName)) {
      $sql = "UPDATE topic SET docs = '$newFileName' WHERE id = $id";
      if (mysqli_query($conn, $sql)) {
        echo " <div class='alert alert-success'>Upload Success</div>";
      } else {
        echo " <div class='alert alert-danger'>Failed to Upload</div>";
        unlink('../src/upload/' . $newFileName);
      }
    } else {
      echo " <div class='alert alert-danger'>Failed to Upload</div>";
    }
  }


}


if (isset($_GET['type']) && $_GET['type'] == 'delete') {
  $id = $_GET['id'];
  $sql = "DELETE FROM topic WHERE id = $id";
  mysqli_query($conn, $sql);
}


include '../config/db_close.php';
