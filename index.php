<?php require_once('classes/session.php'); ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

  <title>item4less</title>
  
<!--JQUERY CORE-->
      <script
        src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous">  
      </script>
<!--JQUERY CORE-->

<!--CSS-->
<link rel="stylesheet" type="text/css" href="../css/main.css">

<script type="text/javascript" src="../js/nav_bar_functionality.js"></script>
      <style>
          body {
            background-image: url("../pictures/background.jpg");
          }
      </style>
<!--CSS-->

<!--BOOTSTRAP-->
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
<!--BOOTSTRAP-->

</head>
<body>
<!-- NAV BAR MENU -->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="../admin/product_insert.php"><b>Products</b></a>
  <a href="#"><b>Rewards</b></a>
  <a href="#"><b>Contact</b></a>
</div>
<div id="main">
    <span style="color:; font-weight: bold; font-size: 25px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
</div>
<!-- NAV BAR MENU -->

<!-- BUTTONS IN ACTIONS -->
<div class="container">
  <div class="row" align="right">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <?php
        if (isset($_SESSION['user_id'])) {
          echo "<span><a href='user/profile.php' class='btn btn-success'
                >Profile</a>
                <span><a href='logout/logout_page_data.php' class='btn 
                btn-danger'>Logout</a></span>";
        } else {
          echo "<a href='login/login_page.php' class='btn btn-primary'><span class='glyphicon glyphicon-log-in'</span> Login</a>
                <span><a href='signup/signup_page.php' class='btn 
                btn-warning'><span class='glyphicon glyphicon-user'></span> Signup</a></span>";
        }
      ?>
    </div>
  </div>
</div>
<!-- BUTTONS IN ACTIONS -->


<!--NAV BAR MENU-->

<div class="container">
  <div class="row" align="center">
    <div class="col-xs-12 col-ms-12 col-md-12 col-lg-12">
      <form class="navbar-form navbar-right">
        <div class="input-group">
          <input type="text" class="form-control" style="background-color: " style="border-color: red;" placeholder="Search">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit">
              <i class="glyphicon glyphicon-search" style="color: red;"></i>
            </button>
          </div>
        </div>
      </form>    
    </div>
  </div>
</div>



<div class="container">
  <div class="row" align="center">
    <div class="row">
      <div class="col-xs-12 col-ms-12 col-md-12 col-lg-12">
        <table>
          <tr>
            <td>
              <a href="../index.php"><h1><center>ITEM 4 LESS</center></h1>
              </a>
            </td>  
          </tr> 
        </table>    
      </div>
    </div>
  </div>
</div>

<?php session::display_message(); ?>




<form action="" method="post">
  <table border="3" align="center">
    <tr style="background-color: #cccccc;">
      <td style="padding: 15px; padding-left: 55px; padding-right: 55px;">
        <strong>Electronics</strong>
      </td>
      <td style="padding-left: 55px; padding-right: 55px;">
        <strong>Home Appliance</strong>
      </td>
      <td style="padding-left: 55px; padding-right: 55px;">
        <strong>Party Supplies</strong>
      </td>
      <td style="padding-left: 55px; padding-right: 55px;">
        <strong>Tools</strong>
      </td>
    </tr>

  </table>
</form>
	
	
</body>
</html>
