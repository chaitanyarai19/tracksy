<?php
include "../config/db.php";

session_start();
$data = json_decode(file_get_contents("php://input"), true);

if(isset($_GET['type']) && $_GET['type'] == 'show'){
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM resource_data WHERE resource_id = $id";
    $output = "";
    
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
        $i=0;
        while($row = mysqli_fetch_assoc($result)){
            $output .='<div class="col-md-2 p-1">
                <div class="card text-center">
                  <div class="card-body">
                      <div class="row">
                          <div class="col-6">
                                <a href="src/upload/'.$row["file"].'" type="button" class="btn btn-warning"><i class="fa fa-download fa-lg"></i></a>
                          </div>
                          <div class="col-6"><h5>'.$_GET["name"]." ".++$i.'</h5></div>
                      </div>
                  </div>
                </div>
            </div>';
        }
    }
    echo $output;
}

if(isset($_GET['type']) && $_GET['type'] == 'upload'){
    $id = $_POST['resource_id'];
    $fileName = $_FILES['resource_upload']['name'];
    $tmpFileName = $_FILES['resource_upload']['tmp_name'];
    $extension = pathinfo($_FILES['resource_upload']['name'],PATHINFO_EXTENSION);
    $newFileName = strtolower(str_replace(" ","_",$_POST['name'])).time().rand(1,100000).".".$extension;
    if(move_uploaded_file($tmpFileName,"../src/upload/".$newFileName)){
        $sql = "INSERT INTO resource_data (file,resource_id) VALUES ('$newFileName',$id)";
        if(mysqli_query($conn,$sql)){
            echo " <div class='alert alert-success'>Upload Success</div>";
        }else{
            echo " <div class='alert alert-danger'>Failed to Upload</div>";
            unlink('../src/upload/'.$newFileName);
        }
    }else{
        echo " <div class='alert alert-danger'>Failed to Upload</div>";
    }
}


if(isset($_GET['type']) && $_GET['type'] == 'delete'){
    $id = $_GET['id'];
    $sql = "DELETE FROM topic WHERE id = $id";
    mysqli_query($conn,$sql);
}


include '../config/db_close.php';
?>