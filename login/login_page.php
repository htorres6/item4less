<?php require_once('../classes/ini.php'); ?>



<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

	   <title>Login</title>

<!--JQUERY CORE-->
    <script
        src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous">
    </script>
<!--JQUERY CORE-->

<!--CSS-->
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <style>
        body {
          background-image: url("../pictures/background.jpg");
        }
    </style>
<!--CSS-->

<!--BOOTSTRAP LINK FOLDER-->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css"> 
<!--BOOTSTRAP LINK FOLDER-->

</head>
<body>

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


<h2 style="margin-top: -10px;"><center><b>Login</b></center></h2>

<!--LOG IN FORM START-->
<form action="login_page_data.php" method="POST" >
  <div class="container">
    <div class="row" align="center">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <img src="../pictures/avatar.png" width="100" height="100" class="img-circle">
      </div>
    </div>  
  </div>
  <br>
  <div class="container" align="#center" style="background-color:B06666">
    <div class="row" align="center">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <!--INVALID CREDENTIALS MSG-->
         <?php Session::display_message(); ?>
        <!--INVALID CREDENTIALS MSG-->
        <br>

        <label style="color: green;">USER NAME..</label><br>
        <input style="background-color: #dbdbdb" placeholder="Enter Username" type="text" name="username" required>
        
        <br><br>

        <label style="color: green;">PASSWORD..</label><br>
        <input style="background-color: #dbdbdb" placeholder="Enter Password" type="password" name="psw" required>

        <br><br>

        <a href="../password/password_reset.php">Forgot your password?</a>
        
        <br>
      
        <button type="submit" name="login">LOG-IN</button>

        <a href="../signup/signup_page.php"><button type="button" class="signupbtn">Create an account</button>
      </div>  
    </div>
  </div>
</form>
<!--END OF LOG IN FORM-->

</body>
</html>