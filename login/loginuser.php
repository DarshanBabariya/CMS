<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $email = $_REQUEST["email"];
    $pwd = md5($_REQUEST["pwd"]);
    
    $server = "localhost";
    $username = "root";
    $password = "";
    
    $conntion = new PDO("mysql:host=$server;dbname=cms", $username, $password);
    
    $sql_query = $conntion->prepare("SELECT * FROM users WHERE email=? AND password=?");
    
    $sql_query->execute([$email,$pwd]);
    
    $user = $sql_query->fetch();
    
//    print_r($user);
    
    if ($user) {
        $_SESSION["id"] = $user["id"];
        $_SESSION["fname"] = $user["first_name"];
        $_SESSION["email"] = $user["email"];

        header("Location: ../homepage/index.php");
    }
    else {
        $_SESSION["error"] = "Enter valid email or password.";
        
        header("Location: login.php");
    }
    
    $conntion = null; 
}

?>

