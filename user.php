<?php
session_start(); 
if(empty($_SESSION["uid"])) 
{
header("Location: ../view/userl.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/ucss.css">
</head>
<body><body>

    <h1 id="header">User page</h1><br><br>
    <td><h2 align="center"><font face="Garamond" color="brown" > WELCOME </font></h2><br>
                <a href="https://www.google.com/">google |</a>
                <a href="https://www.facebook.com/">facebook |</a>
                <a href="https://twitter.com/?lang=en">twitter |</a>
                <a href="https://www.yahoo.com/">yahoo |</a>
                <a href="https://www.linkedin.com/">linkdin</a>
            </td>

<div id="saa">
    <div id="saaj">
    
    <a href="../view/shopinfo.php">shop Info</a><br><br>
    <a href="../view/buypet.php">Buy pet</a><br><br>
    <a href="../view/addorders.php">Add Order</a><br><br>
    <a href="../view/addcomplain.php">Add Complain</a><br><br>
    <a href="../view/addfeedback.php">Add Feedback</a><br><br>
    <a href="../view/customerinfo.php">Customer Service</a><br><br>
    <a href="../view/addblood.php">Donate Blood</a><br><br>
    </div>
    </div><br><br>
<div id="saa">
    <div id="saaj">
    <a href="../view/delcomplain.php">del complain</a><br><br>
    <a href="../view/delfeedback.php">del feedback</a><br><br>
    <a href="../view/delorders.php">del Orders</a>
    </div></div>
    <a id="logout" href="../control/logout.php">logout</a>

<br>
<br>
<br><br>
<br>

<div class="footerm">
<h3> Copyright</h3>

</div>
</body>
</html>

<?php


?>   


