<?php
include('../control/addordersprocess.php');
$error="";

?>
<?php
if(empty($_SESSION["uid"])) 
{
header("Location: ../view/userl.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/ucss.css">
</head>
<body>


<h2 id="header">Add orders</h2>


<form id="regf" name="myForm" action=""  method="post">

  <table>
    Product Name:<br><input type="text" id="name" name="name" placeholder="Enter your name"><br>
    phone:<br><input type="text" id="phone" name="phone"  placeholder="Enter your phone"><br>
    Address:<br><input type="text" id="address" name="address"  placeholder="Enter your address"><br><br><br>
  </table>
    <input name="submit" type="submit" value="Add"><br><br>
    <a id="regl" href="user.php">Go back</a><br><br>

    <?php echo $error ?>
</form>

<br>
<br>
<?php echo $error; ?>


<br>
<br>
<br><br>
<br>

<div class="footer">
<h3> Copyright </h3>

</div>
</body>
</html>