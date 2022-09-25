<!DOCTYPE html>
<html lang="en">

  <?php
  include_once 'component/head.php';
  ?>
<body>

   
  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="index.php"><em>Track</em> Sy</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="index.php">Home</a></li>
        <!--<li class="has-submenu"><a href="#section2">About Us</a>
          <ul class="sub-menu">
            <li><a href="#section2">Who we are?</a></li>
            <li><a href="#section3">What we do?</a></li>
            <li><a href="#section3">How it works?</a></li>
            <li><a href="https://templatemo.com/about" rel="sponsored" class="external">External URL</a></li>
          </ul>
        </li>-->
        <?php if(isset($_SESSION['email'])){
            echo "<li><a href='add_course.php'>Add Courses</a></li>";
            echo "<li><a href='resource_admin.php'>Create Resource</a></li>";
        }?>
        
        <!-- <li><a href="#section5">Video</a></li> -->
        <li><a href="resource.php">Resource</a></li>
        <?php 
            if(isset($_SESSION['email'])){
                echo "<li><a href='component/logout.php'>Logout</a></li>";
            }else{
                echo '<li class="has-submenu"><a href="#section2">User</a>
                          <ul class="sub-menu">
                            <li><a href="login.php">Login</a></li>
                            <li><a href="register.php">Sign-up</a></li>
                          </ul>
                        </li>';
            }
        ?>
      </ul>
    </nav>
  </header>