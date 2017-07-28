<?php require_once("../classes/ini.php"); ?>

<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Edit Profile</title>
    
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

    <style>
      body {
        background-image: url("../pictures/background.jpg");
      }
    </style>
</head>

<body>
<?php 

  $id= $_SESSION['user_id'];

    $sql="SELECT * FROM users WHERE id='$id'";
    $result= $db->query($sql);
  if ($row= $result->fetch_object()) {
        $fname= $row->first_name;
        $lname= $row->last_name;
        $email= $row->email;
        $uname= $row->user_name;
  }

  $sql2="SELECT photo_path FROM photos WHERE user_id='$id'";
  $result2= $db->query($sql2);
if ($row2= $result2->fetch_object()) {
    $photo= $row2->photo_path;
}



?>


<!--NAV BAR MENU-->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="../admin/product_insert.php"><b>Products</b></a>
  <a href="../user/profile.php"><b>Profile</b></a>
  <a href="#"><b>Contact</b></a>
</div>
<div id="main">
    <span style="color:; font-weight: bold; font-size: 25px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
</div>
<!--NAV BAR MENU-->


<!--BUTTONS IN ACTION-->
<div class="container">
  <div class="row" align="right">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    
      <a href="../logout/logout_page_data.php" class="btn btn-danger">Logout</a>
      
    </div>
  </div>
</div>
<!--BUTTONS IN ACTION-->


<div class="container">
  <div class="row">
    <div class="row" align="center">
      <div class="col-xs-12 col-ms-12 col-md-12 col-lg-12">
        <table>
          <tr>
            <td>
              <a href="../index.php"><h1>ITEM 4 LESS</h1></a>
            </td>  
          </tr> 
        </table>    
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row" align="center">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <label style="font-size: 25px; background-color: #d7e222">Edit Profile</label>
    </div>
  </div>
</div>
<script>
// Document . ready function 
  $(function(){
                          //  . FUNCTIONALITY TAKES PLACE // OBJECT ORIENTED
    var photo_name= $('#photo').val();
    //alert(photo_name);
                                //THIS o CAN BE YOUR vARIABLe
    $('#edit_form').submit(function(o){
      if (!confirm("Are you sure you want to update?")) {
        o.preventDefault();
      }
    });
  });



</script>
                                    
<!-- ACCOUNT MANAGE FORM START***             ONLY USE WITH 'PHOTOS'-->
<form action="../update/user_update_data.php" method="POST" id="edit_form" enctype="multipart/form-data">
<div class="container">
  <div class="row" align="right">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <img src="../update/<?php echo $photo;?>" width="100" height="100" class="img-circle"><br>

<!--WELCOME BACK "user" MSG-->
<?php Session::display_message(); ?>
<!--WELCOME BACK "user" MSG-->
      
      <br>
      <input type="file" name="user_photo" id="photo">
        <input type="hidden" name="current_photo" value="<?php echo $photo; ?>">
    </div>
  </div>
</div> 
<br>
<div class="container">
  <div class="row" align="right">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <label style="color: black;"><b>First Name:</b></label><br>
      <input type="text" name="first_name" value="<?php echo $fname;?>" required>

      <br><br>

      <label style="color: black;"><b>Last Name:</b></label><br>
      <input type="text" name="last_name" value="<?php echo $lname;?>" required>

      <br><br>

      <label style="color: black;"><b>Email:</b></label><br>
      <input type="text" name="email" value="<?php echo $email;?>" required>

      <br><br>
    </div>
  </div>

  <div class="row" align="right">
    <div class="col-md-12">
      <input type="submit" name="submit" value="update">

      <br><br>
    </div>
  </div>
</div>
</form>

<!--END OF ACCOUNT MANAGE FORM-->
<!-- <button onclick="alert('It goes')">go</button>
 -->


 <script src="../bootstrap/js/bootstrap.js"></script>
</body>
</html>

