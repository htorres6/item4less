<?php require_once("../classes/ini.php"); ?>

<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Profile</title>
    
<!-- JQUERY CORE -->
      <script
        src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous">  
      </script>
<!-- JQUERY CORE -->

<!-- JS -->
<script type="text/javascript" src="../js/nav_bar_functionality.js"></script>
<!-- JS -->

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="../css/main.css">
    <style>
        body {
          background-image: url("../pictures/background.jpg");
        }
    </style>
<!-- CSS -->

<!-- BOOTSTRAP -->
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
<!-- BOOTSTRAP -->

</head>

<body>
<body>

<!--NAV BAR MENU-->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#"><b>Products</b></a>
  <a href="../user/edit_profile.php"><b>Edit Profile</b></a>
  <a href="#"><b>Contact</b></a>
</div>
<div id="main">
    <span style="color:; font-weight: bold; font-size: 25px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
</div>
<!--NAV BAR MENU-->


<script>
  $(function(){
    var photo_name= $('#photo').val();
    //alert(photo_name);
  });
</script>

<?php 
  $id=$_SESSION['user_id'];
  
  $sql="SELECT photo_path FROM photos WHERE user_id='$id'";
  // everything from the database will be stuffed inside the query result
  $result=$db->query($sql);
  while ($row=$result->fetch_object()) {
    $photo=$row->photo_path;
  }


?>

<!--BUTTONS IN ACTION-->
<div class="container">
  <div class="row" align="right">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <!-- <a href="../admin/product_insert.php" class="btn btn-primary">Products</a> -->

      <span><a href="../logout/logout_page_data.php" class="btn btn-danger">Logout</a>
      <img src="../update/<?php echo $photo;?>" width="100" height="100" class="img-circle"><br></span>
      <!-- <a href="../admin/all_products.php" class="btn btn-default">All products</a><br> -->
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
      <label style="font-size: 25px; background-color: #d7e222">PROFILE</label>
    </div>
  </div>
</div>



                                    
<!-- ACCOUNT MANAGE FORM START***             ONLY USE WITH 'PHOTOS'-->
<form action="../update/user_update_data.php" method="POST" enctype="multipart/form-data">
<div class="container">
  <div class="row" align="right">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      

<!--WELCOME BACK "user" MSG-->
<?php Session::display_message(); ?>
<!--WELCOME BACK "user" MSG-->
      
      <br>
      
        <input type="hidden" name="current_photo" value="<?php echo $photo; ?>">
    </div>
  </div>
</div> 
<br>
</form>

<!--END OF ACCOUNT MANAGE FORM-->





 <script src="../bootstrap/js/bootstrap.js"></script>

</body>
</html>