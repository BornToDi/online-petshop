<?php
$sellername=$_POST['sname'];
$selleremail=$_POST['semail'];
$sellerpassword=$_POST['spassword'];
$sellerphonenumber=$_POST['sphone'];
$sellergender=$_POST['sgender'];
$selleraddress=$_POST['saddress'];

//Database connection
$conn = new mysqli('localhost','root','','seller');
if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into registration(sname, semail, spassword, sphone, sgender, saddress) values (?, ?, ?, ?, ?, ?)");
	$stmt-> bind_param("sssssi", $sellername, $selleremail, $sellerpassword, $sellerphonenumber, $sellergender, $selleraddress);
    $stmt-> execute();
	echo "Registration successfully...";
	$stmt->close();
	$conn->close();
}
?>