<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {    
    
    $phone = $_REQUEST["phone"];
    $user_add = $_REQUEST["user_add"];
    
    if ($user_add != '') {
        $com_add = $_REQUEST["user_add"];
    }else {
    $com_add = $_REQUEST["com_add"];
    }
    
    $com_title = $_REQUEST["complain_title"];
    $com_discrip = $_REQUEST["complain"];
    $register_at = date("Y-m-d h:i:s");
    $uname = $_SESSION["fname"];
    $email = $_SESSION["email"];
    $id = $_SESSION["id"];
    if ($phone == '') {
        $_SESSION["error"] = "Phone Number can't be empty. Please register Your complaint again.";
        header("Location: complaint_register.php");
    }
    elseif ($user_add == '') {
        $_SESSION["error"] = "User Address can't be empty. Please register Your complaint again.";
        header("Location: complaint_register.php");
    }
    elseif ($com_add == '') {
        $_SESSION["error"] = "Complaint Address can't be empty. Please register Your complaint again.";
        header("Location: complaint_register.php");
    }
    elseif ($com_title == '') {
        $_SESSION["error"] = "Complaint Title can't be empty. Please register Your complaint again.";
        header("Location: complaint_register.php");
    }
    elseif ($com_discrip == '') {
        $_SESSION["error"] = "Complaint Discription can't be empty. Please register Your complaint again.";
        header("Location: complaint_register.php");
    }
    else {
        
        $target_dir = "../complaint_files/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $pdf_path = $target_file;
        $uploadOk = true;
        $pdfFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
     
          
        if($pdfFileType == "pdf") {
            $uploadOk = true;
        }
        else{
            $uploadOk = false;
        }
        if ($_FILES["fileToUpload"]["size"] > (2 * 1024 * 1024)) {
//            echo "Sorry, your file size must be in 200kb .";
            $uploadOk1 = false;
        }

        if ($uploadOk == false) {
            $_SESSION["error"] =  "Your uploaded file must be a pdf* and size of pdf must be in 2MB*.";
            header("Location: complaint_register.php");

        } 
        else {
            if ($uploadOk == true) {
                move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
            } 
            else {
                $_SESSION["error"] =  "Sorry, there was an error uploading your file.";
                header("Location: complaint_register.php");


            }
        }
        
        if ($uploadOk) {
            
        $server = "localhost";
        $username = "root";
        $passsword = "";
        
        $con = new PDO("mysql:host=$server;dbname=cms",$username,$passsword);
        
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql_query = "INSERT INTO `complaint`(`id`,`username`, `email`, `phone`, `user_add`, `com_add`, `com_title`, `com_disc`, `file`, `register_at`) VALUES ('$id','$uname','$email','$phone','$user_add','$com_add','$com_title','$com_discrip','$pdf_path','$register_at');";
        $con->exec($sql_query);
        
        header("Location: ../complaint_reopen/complaint_reopen.php");
        }
        
  
    }
}
?>
