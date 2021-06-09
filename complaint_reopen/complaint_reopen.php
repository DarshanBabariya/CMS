<!doctype html> 
<html lang="en"> 
    <head>   
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">

        <!-- font-awesome-icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- fevicon -->
        <link rel="icon" href="../images/logo.png" sizes="16x16">

        <title> CMS | Complaint-Reopen </title>

    </head>
    <body>
    <?php include '../header/header.php'; 
    
    $dsn = "mysql:host=localhost;dbname=cms";
    $dbUserName = "root";
    $dbPassword = "";

    $pdoConnection = new PDO($dsn, $dbUserName, $dbPassword);

    $authUserId = $_SESSION["id"];
    $allPostQuery = "SELECT * FROM complaint WHERE id=$authUserId";
    $allPostQueryResult = $pdoConnection->query($allPostQuery);
    $data = $allPostQueryResult->fetchAll();
    ?>
        
        <div class="header text-center" id="steps-head">
               <h3> Complaint Re-Open </h3>
          </div>
        
        <?php if (count($data) > 0) { ?>
        <div class="row comp_data">
            <?php foreach ($data as $complaint) {  ?>
            <div class="col-lg-4 complaint_iteam">
                <div class="card mt-4 mb-4 " style="width: 25rem;">
                    <embed src="<?php echo $complaint['file'] ?>" typ="application/pdf" width="100%" height="250px"/>
                    <div class="card-body">
                    <p class="card-text"><b>Name : </b><br> <?php echo $complaint['username'] ?></p>
                    <p class="card-text"><b>Email : </b><br> <?php echo $complaint['email'] ?></p>
                    <p class="card-text"><b>Phone : </b><br> <?php echo $complaint['phone'] ?></p>
                    <p class="card-text"><b>Address : </b><br> <?php echo $complaint['user_add'] ?> </p>

                    </div>
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Complaint Title :</b><br> <?php echo $complaint['com_title'] ?></li>
                    <li class="list-group-item"><b>Complaint Discription : </b><br><?php echo $complaint['com_disc'] ?></li>
                    <li class="list-group-item"><b>Complaint Address :</b><br><?php echo $complaint['com_add'] ?></li>
                    </ul>
                    <div class="card-body">
                        <a href="../complaint_status/complaint_status.php" class="card-link">Complaint Status</a>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
            </div>
        <?php }
            ?>

            
        


       
       
        
        <?php include '../footer/footer.php'; ?>

        
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script> <!-- font-awesome -->
        <script type="text/javascript" src="js\script.js"></script>

    </body>
</html>
