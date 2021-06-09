<?php 
session_start();
$currentPage = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
?>

<!-- top-info -->
        <div class="container-fluid" id="top">
            <div class="row">
                <div class="call0 invisible col-lg-6 col-md-6 col-sm-1 col-1" role="alert">
                    <span>
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-forward-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zm10.761.135a.5.5 0 0 1 .708 0l2.5 2.5a.5.5 0 0 1 0 .708l-2.5 2.5a.5.5 0 0 1-.708-.708L14.293 4H9.5a.5.5 0 0 1 0-1h4.793l-1.647-1.646a.5.5 0 0 1 0-.708z"/>
                        </svg> 
                        Talk with our Specialist : <a href="tel:7698889703">+91 76 988 897 03</a>
                    </span>
                </div>
                <div class="social-media visible col-lg-3 col-md-2 col-sm-1 col-1" role="alert">
                    <span> 
                        <a href="#" title="Facebook">
                            <i class='fab fa-facebook-square'></i>
                        </a> |&nbsp;
                        <a href="#" title="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a> |&nbsp;
                        <a href="#" title="Linkedin">
                            <i class="fab fa-linkedin"></i>
                        </a> |&nbsp;
                        <a href="#" title="Twitter">
                            <i class="fab fa-twitter-square "></i>
                        </a> &nbsp;
                    </span>
                </div>
                <div class="join  col-lg-3 col-md-4 col-sm-10 col-10">
                    
                    <?php if (isset($_SESSION["fname"]) && isset($_SESSION["email"])) { ?>
                      
                    <a href="../logout/logout.php" title="Logout">
                            <i class="fa fa-user"></i>Logout
                        </a>
                    <span style="font-size: 15px; margin-left: 30px;"><b> Welcome, <?php echo $_SESSION["fname"]; ?></b></span>
                    <?php 
                    } else {
                    ?>
                        <a href="../login/login.php" title="Login">
                            <i class="fa fa-user"></i>Login
                        </a>
                        <a href="../registration/register.php" title="Register">
                            <i class="fa fa-user-plus"></i>Register
                        </a>
                    <?php 
                    } 
                    ?>
                </div>
            </div>   
        </div>
        <!-- brand-name -->
        <div class="cms-brand container-fluid">
            <div class="row">
                <div class=" col-lg-2 col-md-2 col-sm-2 col-3" id="brand-logo">
                    <a href="../homepage/index.php">
                        <img src="../images/logo.png" alt="logo">
                    </a>
                </div>
                <div class=" col-lg-10 col-md-10 col-sm-10 col-9" id="brand-name">
                    <a href="../homepage/index.php" title="CMS">
                        <h1> Complaint Management System</h1> 
                    </a>
                </div>
            </div>
        </div>
        <!-- menu-bar -->
        <header class="sticky-top">
            <nav id="header-nav" class="navbar navbar-expand-lg navbar-default ">
                <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-th" style="font-size:25px;"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown" >
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link <?php echo $currentPage == 'index.php' ? 'active' : '' ?>" href="../homepage/index.php">&nbsp;Home&nbsp;<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $currentPage == 'about.php' ? 'active' : '' ?>" href="../about/about.php">&nbsp;About&nbsp;</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $currentPage == 'services.php' ? 'active' : '' ?>" href="../services/services.php">&nbsp;Services&nbsp;</a>
                        </li>
                       
                            <?php if (isset($_SESSION["fname"]) && isset($_SESSION["email"])) { ?>
                         <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php echo $currentPage == 'complaint_register.php' ? 'active' : '' ?> <?php echo $currentPage == 'complaint_reopen.php' ? 'active' : '' ?> <?php echo $currentPage == 'complaint_status.php' ? 'active' : '' ?>" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&nbsp;Complaints&nbsp;</a>
                            
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item <?php echo $currentPage == 'complaint_register.php' ? 'active' : '' ?>" href="../complaint_register/complaint_register.php">Complaint Register</a>
                                <a class="dropdown-item <?php echo $currentPage == 'complaint_reopen.php' ? 'active' : '' ?>" href="../complaint_reopen/complaint_reopen.php">Re-open Complaint</a>
                                <a class="dropdown-item <?php echo $currentPage == 'complaint_status.php' ? 'active' : '' ?>" href="../complaint_status/complaint_status.php">Complaint Status</a>
                            </div>
                            </li>
                            <?php 
                            }else {
                            ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php echo $currentPage == 'complaint_register.php' ? 'active' : '' ?> <?php echo $currentPage == 'complaint_status.php' ? 'active' : '' ?> <?php echo $currentPage == 'complaint_reopen.php.php' ? 'active' : '' ?>" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&nbsp;Complaints&nbsp;</a>
                            
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="../login/login.php">Complaint Register</a>
                                <a class="dropdown-item" href="../login/login.php">Re-open Complaint</a>
                                <a class="dropdown-item" href="../login/login.php">Complaint Status</a>
                            </div>
                        </li>
                            <?php
                                $_SESSION["error"] = "Please Login first to register a complaint.!";
                            }
                            ?>
                        
                        <li class="nav-item">
                            <a class="nav-link <?php echo $currentPage == 'feedback.php' ? 'active' : '' ?>" href="../feedback/feedback.php">&nbsp;Feedback&nbsp;</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $currentPage == 'help.php' ? 'active' : '' ?>" href="../help/help.php">&nbsp;Help&nbsp;</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>


