<?php
 /* $sellername="";
 $sellerpassword="";

  if(isset($_POST['btnClick']))
    {	
   if(empty($_POST['sname'])){
		$sellename = " * Name is required.";
	}	
	if(empty($_POST['spassword'])){
		$sellerpassword = " * Password is required.";
	}   	
} */

?> 
<!DOCTYPE html> 
<html> 
<head>
<title>Login</title>
<link rel="stylesheet" href="Login.css">
</head> 
<body> 
<?php
	$usernameEr = $passwordEr = "";
	$username = $password = "";

	$flag = true;
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if (empty($_POST["username"])) {
			$usernameEr = "*Username is required";
			$flag = false;
		} else {
			$username = test_input($_POST["username"]);
		}

        
		if (empty($_POST["password"])) {
			$passwordEr = "*Password is required";
			$flag = false;
		} else {
			$password = test_input($_POST["password"]);
		}

		if ($flag) {

			$conn = new mysqli('localhost', "root", "", "seller");

			if ($conn->connect_error) {
				die("connection failed error: " . $conn->connect_error);
			}
			
			$sql = "INSERT INTO login (username, password) VALUES('$username','$password')";

			if ($conn->query($sql) === TRUE) {
				echo "<script> alert('Login successfully.')</script>";
			}
		}
	}
	function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

?>
<form class="box" method="POST" name="box" action="Dashboard.php">
<div class="center">
<h1>LOGIN</h1> 
</div>
<div class="form">
<input type="text" name="" placeholder="Enter Username" id="username" value="<?= $username; ?>" > 
<span style="color:red" class="error"> <?= $usernameEr; ?></span><br><br>
<input type="password" name="" placeholder="Enter Password" id="password" value="<?= $password; ?>" >
<span style="color:red" class="error"> <?= $passwordEr; ?></span><br><br>
<input type="submit" name="" value="LOGIN" >
Not a member? <a href = "Registration.php">Registration</a><br><br>
<a href="Welcome.php">Back</a><br>
</form>
</div>
<script src="Valid.js"></script>
</body>
</html>