<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $server = "localhost";
    $username = "root";
    $password = "";

    $con = new PDO("mysql:host=$server;dbname=cms",$username,$password);

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
    $fname = $_REQUEST["fname"];
    $lname = $_REQUEST["lname"];
    $email = $_REQUEST["email"];
    $pwd = md5($_REQUEST["pwd2"]);
    $craeted_at = date("Y-m-d");
    
    $query = "INSERT INTO `users`(`first_name`, `last_name`, `email`, `password`,`created_at`) VALUES ('$fname','$lname','$email','$pwd','$craeted_at')";
    $con->exec($query);
    
    $_SESSION["email"] = $email;
    $_SESSION["fname"] = $fname;
    
    $sql_query = $con->prepare("SELECT * FROM users WHERE email=? AND password=?");
    
    $sql_query->execute([$email,$pwd]);
    
    $user = $sql_query->fetch();
    
//    print_r($user);
    
    if ($user) {
        $_SESSION["id"] = $user["id"];
     

    header("Location: ../homepage/index.php");
    }
    else{
        
        header("Location: register.php");
    }
    $con = null;
}

?>