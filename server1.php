<?php


session_start();

$username = "";
$email = "";

$errors = array();

$db = mysqli_connect('localhost','root','','ecom_store') ;


if(!empty($_POST['login_user'])){
    


    die();
   // header('location: index.php');
    
    
    $username = ($db,$_POST['customer_name']);
    
    $password = ($db,$_POST['customer_pass']);
    
    if(empty($username)){
        array_push($errors,"Username is required");
    }
    
    if(empty($password)){
        array_push($errors,"Password is required");
    }
    
    if(count($errors) == 0){
        $password = md5($password);
        $query = "SELECT * FROM customers WHERE customer_name='{$username}' AND customer_pass='{$password}' ";
        
        $results = mysqli_query($db, $query);
        
        if(mysqli_num_rows($results)){
            $_SESSION['customer_name']  = $username;
            $_SESSION['success'] = "Logged In successfully";
            
            header('location: index.php');
        }
        else{
            array_push($errors,"wrong.please try again");
        }
    }
    
    
}


?>