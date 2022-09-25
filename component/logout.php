<?php 
session_start();
session_unset();
session_destroy();
echo "<script>window.top.location='https://bloodanytime.com/tracksy/login.php'</script>";
?>