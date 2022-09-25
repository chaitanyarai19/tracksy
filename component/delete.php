
<?php
include ('../config/db.php');
 
if (mysqli_connect_errno())
{
echo "Connection Failed; " . mysqli_connect_error();
}
else
{
echo "Connection Established.<br>";

$id = $_GET['id'];
 
$phpdatabase = "DELETE FROM course WHERE sno=$id";
 
if(mysqli_query( $conn,$phpdatabase))
{  
echo "Data Deleted successfully.<br>";  
echo '<script>window.location.href = "../add_course.php"</script>';
}
else
{  
echo "Data Deletion Failed; ".mysqli_error($conn);  
}  
}
 
mysqli_close($conn);
echo "Connection Closed"
?> 
 