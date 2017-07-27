

<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sign Up</title>
    
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

<!--JS-->
<script src="../js/signup_form_validation.js"></script>
<!--JS-->

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

<div class="container">
  <div class="row">
    <div class="row" align="center">
      <div class="col-xs-12 col-ms-12 col-md-12 col-lg-12">
        <table>
          <tr>
            <td>
              <a href="../index.php"><h1>ITEM 4 LESS</h1></a><br>
            </td>  
          </tr> 
        </table>    
      </div>
    </div>
  </div>
</div>

<h2 style="margin-top: -10px;"><center><b>Sign Up!</b></center></h2>


<!--SIGN-UP FORM STARTS-->
<form action="signup_page_data.php" method="POST" id="signup_form">
<div class="container">
    <div class="row" align="center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <label style="color: green;">First name..</label><br>
            <input type="text" style="background-color: #dbdbdb ;" placeholder="First name" name="first_name" required>
            
            <br>

            <label style="color: green;">Last name..</label><br>
            <input type="text" style="background-color: #dbdbdb ;" placeholder="Last name" name="last_name" required>
            
            <br>

            <label style="color: green;">Address..</label><br>
            <input type="text" style="background-color: #dbdbdb ;" placeholder="Address" name="address" required>
            
            <br><br>
            <div style="color: red;" id="error_message"></div>

            <label style="color: green;">E-mail..</label><br>
            <input type="text" style="background-color: #dbdbdb ;" placeholder="E-mail" id="email" name="email" required>
            
            <br>

            <label style="color: green;"">Username..</label><br>
            <input type="text" style="background-color: #dbdbdb ;" placeholder="Username" id="username" name="user_name" required>
            
            <br><br>

            <label style="color: green;">Enter Password..</label><br>
            <input type="password" style="background-color: #dbdbdb ;" placeholder="Password" id="password" name="password" required>
            
            <br>
            <div style="color: red;" id="password_error"></div>

            <label style="color: green;">Confirm Password..</label><br>
            <input type="password" style="background-color: #dbdbdb ;" placeholder="password" id="confirm_password" required>
            <br>

        </div>
    </div>
</div>    
            
<div class="container">
    <div class="row" align="center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <input style="background-color: #c7c428;" style="color: green;" type="submit" id="submit_button" name="submit" value="Create User"><br>

            <span class="psw"><b>Already have an account ?</b></span> <a href="../login/login_page.php">Log-In</a>
        </div>
    </div>
</div>    
</form>
<!--END OF FORM-->


</body>
</head>