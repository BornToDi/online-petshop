<?php
$sellername="";
$selleremail="";
$sellerpassword="";
$sellerphonenumber="";
$sellergender="";
$selleraddress="";
  if(isset($_POST['submit']))
    {
	if(empty($_POST['sname'])){
		$sellername = " * Name is required.";
	}
    if(empty($_POST['semail'])){
		$selleremail = " * Email is required.";
	}	
	if(empty($_POST['spassword'])){
		$sellerpassword = " * Password is required.";
	}
    if(empty($_POST['sphone'])){
		$sellerphonenumber = " * Phone Number is required.";
	}	
    if(empty($_POST['sgender'])){
		$sellergender = " * Gender is required.";
	}
    if(empty($_POST['saddress'])){
		$selleraddress = " * Address is required.";
	}	
}
?>