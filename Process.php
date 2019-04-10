<?php

session_start();
ob_start();

$username = $_POST['customer_name'];
$password = md5($_POST['customer_pass']);


$db = mysqli_connect("localhost","root","","ecom_store");
//mysqli_select_db("ecom_store");

$resulf = mysqli_query($db,"select * from customers where customer_name = '{$username}' and customer_pass = '{$password}'") 
or die("Faile to query database ".mysqli_error());

if($row = mysqli_fetch_all($resulf)){
	$_SESSION['customer_name'] = $username;
	//$_SESSION['customer_pass'] = $password;
	header("Location: index.php");
}else{
	header("Location: checkout.php");
}


var_dump($row);



?>
