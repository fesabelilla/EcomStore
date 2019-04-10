<?php


session_start();

$username = "";
$email = "";

$errors = array();

$db = mysqli_connect('localhost','root','','ecom_store') or die("could not connect to database");



if(isset($_POST['register'])){
    
    $username = mysqli_real_escape_string($db,$_POST['customer_name']);
$email = mysqli_real_escape_string($db,$_POST['customer_email']);
$password = mysqli_real_escape_string($db,$_POST['customer_pass']);
$country = mysqli_real_escape_string($db,$_POST['customer_country']);


if(empty($username)){array_push($errors,"Username is required");}
if(empty($email)){array_push($errors,"email is required");}
if(empty($password)){array_push($errors,"passwird is required");}
if(empty($country)){array_push($errors,"country is required");}

$user_check_query = "SELECT * FROM customers where customer_name = '$username' or customer_email = '$email' LIMIT 1 ";

$results = mysqli_query($db,$user_check_query);
$user = mysqli_fetch_assoc($results);


if($user){
    
    
    if($user['customer_name'] == $username){array_push($errors,"Username already exists");}
    
    if($user['customer_email'] == $email){
        array_push($errors,"this email is taken");
    }
    
}


if(count($errors) == 0){
    $password = md5($password);
    $query = "INSERT INTO customers(customer_name,customer_email,customer_pass,customer_country) values('$username','$email','$password','$country')";
    
    mysqli_query($db,$query);
    $_SESSION['customer_name'] = $username;
    $_SESSION['success'] = "you are now logged in";
    
    header('location: index.php');
}

    
}
    
   
    
    



?>