<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">

    <!-- font-awesome-icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- fevicon -->
    <link rel="icon" href="../images/logo.png" sizes="16x16">

    <title> Complaint Management System </title>

</head>

<body>
    
    <?php include '../header/header.php'; ?>
    
    <!-- Complain Regidter -->
    <?php if (isset($_SESSION["error"]) && $_SESSION["error"] != '') { ?>
                                  
            <div class="alert alert-danger px-3 mx-auto container mt-4 text-center"  id="error" role="alert">
                <?php echo $_SESSION["error"] ; ?>
            </div>
             <?php 
                unset($_SESSION["error"]);
             }
             ?>

    <form action="com_register.php" class="cont" method="post" enctype="multipart/form-data">
        <h1>Register Your Complaint</h1>
       
        
        <label for="fname"><b>User Name</b></label>
        <p id="fname"><?php echo $_SESSION['fname']; ?></p>
        <br>

        <label for="email"><b>Email</b></label>
        <p id="email"><?php echo $_SESSION['email']; ?></p>
        <br>

        <label for="phone"><b>Phone No</b></label><br>
        <input type="tel" name="phone" id="phone" placeholder="Enter Your Phone Number" maxlength="10">
        <br>
        
        <label for="user"><b>User Address</b></label>
        <textarea name="user_add" id="user_add" cols="30" rows="10" placeholder="Enter Your Address"></textarea>
        <br>

        <input type="checkbox" name="user_same" id="user_same" onclick="check()">
        <label for="user_same"> Same as above </label>
        <br><br>

        <label for="com_add"><b>Complaint Address</b></label>
        <textarea name="com_add" id="com_add" cols="30" rows="8" placeholder="Enter Your Address"></textarea>
        <br>

        <label for="complain_title"><b>Complain Title</b></label>
        <input type="text" name="complain_title" id="complain_title" placeholder="Enter Your Complain Title" pattern="[A-Za-z0-9 ]+">
        <br>

        <label for="complain"><b> Discription About Complaint</b></label>
        <textarea name="complain" id="complain" cols="30" rows="8" placeholder="Enter Your Complain in brief."></textarea>
        <br>
        

        <label for="fileToUpload"><b>Upload Complain File</b></label><br>
        <input type="file" name="fileToUpload" id="fileToUpload" required>
        <br>

        <input type="checkbox" name="approve" id="approve" required>
        <label for="approve"> &nbsp; I accept to the <a href="">Terms & Conditions</a></label>
        <br>

        <input type="reset" value="Reset" id="reset">
        <input type="submit" value="Submit" id="submit"> 

    </form>


    <?php include '../footer/footer.php'; ?>

     <script>
        function check() {

            var user_add = document.getElementById('user_add');
            var com_add = document.getElementById('com_add');
            var user_same = document.getElementById('user_same');

            if (user_same.checked == true) {
                com_add.value = user_add.value;
                com_add.disabled = true;
            } 
            else {
                com_add.disabled = false;
            }
        } 
        
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script> <!-- font-awesome -->

</body>

</html>