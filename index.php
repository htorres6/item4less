<?php require_once('classes/session.php'); ?>

<?php require("includes/header.php"); ?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>


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
