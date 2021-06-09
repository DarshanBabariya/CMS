<!DOCTYPE html>
<html>
<head>   
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/style.css">

     <!-- font-awesome-icons -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <!-- fevicon -->
     <link rel="icon" href="../images/logo.png" sizes="16x16">

     <title>CMS | REGISTRATION FORM</title>
</head>
<body>

     <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
          <div class="card card0 border-0">
               <div class="row d-flex">
                    <div class="col-lg-6">
                         <div class="card1 pb-5">
                              <div class="row"> 
                                   <img src="../images/logo.png" class="logo">
                              </div>
                              <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> 
                                   <img src="https://image.freepik.com/free-vector/team-work-building-business-puzzle-illustration-people-character-together-idea-success-strategy-partnership_121223-1016.jpg" class="image"> 
                              </div>
                         </div>
                    </div>
                   <form action="registeruser.php" method="POST" class="col-lg-6" id="reg-info" onsubmit="submit()">
                              <div class="row px-3">
                                   <div class="col">
                                        <label>
                                        <h6 class="mb-0 text-sm">First Name</h6>
                                        </label> <input class="mb-4" id="fname" type="text" name="fname" placeholder="Enter your first name" required> 
                                   </div>
                                   <div class="col">
                                        <label>
                                        <h6 class="mb-0 text-sm">Last Name</h6>
                                        </label> <input class="mb-4" id="lname" type="text" name="lname" placeholder="Enter your last name" required> 
                                   </div>
                              </div>
                              <div class="row px-3"> <label>
                                   <h6 class="mb-0 text-sm">Email Address</h6>
                                   </label> <input class="mb-4" id="email" type="email" name="email" placeholder="Enter a valid email address" required> 
                              </div>
                              <div class="row px-3"> <label>
                                 <h6 class="mb-0 text-sm">Password</h6>
                                   </label> <input class="mb-4" id="pwd1" type="password" name="pwd1" placeholder="Enter password" required> 
                              </div>
                              <div class="row px-3"> <label>
                                 <h6 class="mb-0 text-sm">Confirm Password</h6>
                                   </label> <input class="mb-4" id="pwd2" type="password" name="pwd2" placeholder="Enter confirm password" required> 
                              </div>

                              <div class="alert alert-danger px-3" id="error" role="alert">
                                  
                              </div>
                              
                              <div class="row mb-3 px-3"> <button type="submit" class="btn btn-blue text-center">Registration</button> </div>
                              <div class="row mb-4 px-3"> <small class="font-weight-bold">Do have an account? <a href="../login/login.php" class="text-danger">Login</a></small> </div>
                         </form>
                    </div>
               </div>
               <div class="bg-blue py-4">
                    <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">&copy; Copyright 2021 All rights reserved with by Complaint Management System</small>
                         <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-instagram mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
                    </div>
               </div>
          </div>
    

     <!-- Bootstrap JS -->
     <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="js/script.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>