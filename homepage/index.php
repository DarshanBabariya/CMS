
<!doctype html> 
<html lang="en"> 
    <head>   
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../css/style.css">

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
        
        <!-- brif-info -->
        <div class="brif-info container-fluid">
            <div class="row">
                <div class="col-lg-6" id="info-img">
                    <img src="../images/brif.gif" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-lg-6" id="info">
                    <h3 id="quote"> " A Complaining citizen can be your best apportunity to show how good you are and create a citizen evangelist.!! "</h3>
                    <hr>
                    <p> Online Complaint Management System is an online portal that helps in managing of online customer complains. It provides a comprehensive platform to resolve these complaints with ease. Its features include an online complaint box where customers can drop in their complaints so that the service provider can access, analyse and respond the customer issues.
                    </p>
                    <p>The objective of the web complaint management software is to get away with the hassle faced in dealing with the issues that are faced in online businesses.
                    </p>
                    <p>The software is an excellent solution to resolve issues in more managed and streamlined manner. It saves time as well as money in resolving issues easily. This helps in building customer loyalty by efficient handling of their complaints and you can achieve a sustainable client database.
                    </p>  
                </div>
            </div> 
        </div>
        <!-- shape-curve -->
        <div class="custom-shape-divider-bottom-1604036513">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
            </svg>
        </div>
        <?php if (isset($_SESSION["fname"]) && isset($_SESSION["email"])) { ?>
        <div class="container-fluid" id="complaint-add">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6" id="complaint-tile">
                    <a href="../complaint_register/complaint_register.php">
                        <span>
                            <i class='fas fa-edit'></i>
                        </span>
                    </a>
                    <h4>Complaint Register</h4>
                    <p>You can add or register your new complaints here.</p>
                 </div>

                <div class="col-lg-4 col-md-6 col-sm-6 " id="complaint-tile">
                    <a href="../complaint_reopen/complaint_reopen.php">
                        <span>
                            <i class="fas fa-folder-open"></i>
                        </span>
                    </a>
                    <h4>Re-open Complaint</h4>
                    <p>You can open your complaints for modification.</p>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12" id="complaint-tile">
                    <a href="../complaint_status/complaint_status.php">
                        <span>
                            <i class="fas fa-tasks"></i>
                        </span>
                    </a>
                    <h4>Complaint Status</h4>
                    <p>You can see all the complaints which are solve or not.</p>
                </div>
            </div>
        </div>
        <?php
        }else {
        ?>
        <div class="container-fluid" id="complaint-add">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6" id="complaint-tile">
                    <a href="../login/login.php">
                        <span>
                            <i class='fas fa-edit'></i>
                        </span>
                    </a>
                    <h4>Complaint Register</h4>
                    <p>You can add or register your new complaints here.</p>
                 </div>

                <div class="col-lg-4 col-md-6 col-sm-6 " id="complaint-tile">
                    <a href="../login/login.php">
                        <span>
                            <i class="fas fa-folder-open"></i>
                        </span>
                    </a>
                    <h4>Re-open Complaint</h4>
                    <p>You can open your complaints for modification.</p>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12" id="complaint-tile">
                    <a href="../login/login.php">
                        <span>
                            <i class="fas fa-tasks"></i>
                        </span>
                    </a>
                    <h4>Complaint Status</h4>
                    <p>You can see all the complaints which are solve or not.</p>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
        <!-- shape-curve -->
        <div class="custom-shape-divider-top-1604042382">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
            </svg>
        </div>
        <!-- steps for filling complaint -->
        <div class="container-fluid" id="steps-us">
          <div class="header text-center" id="steps-head">
               <h3> Steps For Filling Complaints </h3>
          </div>
           <div class="row" id="steps">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" id="steps-tile">
                    <h5>The step-by-step guide below to filing a complaints </h5>
                    <h6>with a grievance mechanism provides general advice for complainants to follow. </h6>

                    <p><i class='fas fa-tags'></i> Step 1 : Consider filing a complaint </p>
                    <p><i class='fas fa-tags'></i> Step 2 : Identify the entities causing or contributing to the harm </p>
                    <p><i class='fas fa-tags'></i> Step 3 : Map the grievance mechanisms that may apply </p>
                    <p><i class='fas fa-tags'></i> Step 4 : Identify your desired outcomest </p>
                    <p><i class='fas fa-tags'></i> Step 5 : Choose the appropriate grievance mechanism </p>
                    <p><i class='fas fa-tags'></i> Step 6 : Prepare for the complaint</p>
                    <p><i class='fas fa-tags'></i> Step 7 : Write the complaint </p>
                    <p><i class='fas fa-tags'></i> Step 8 : File the complaint </p>
                    <p><i class='fas fa-tags'></i> Step 9 : Engage in the process </p>
                    <p><i class='fas fa-tags'></i> Step 10 : Follow-up </p>


                </div>
                <div class="mx-auto col-lg-6 col-md-12 col-sm-12 col-xs-12" id="steps-tile">
                     <img src="../images\services.gif" class="img-fluid" alt="Responsive image">

                </div>
           </div>
       </div>

       <!-- citizen circuler -->
       <div class="container-fluid" id="circular">
            <div class="header text-center" id="circular-head">
                <h3> Citizen Circular </h3>
            </div>
            <div class="circular-content mx-auto">
                <div class="card">
                    <div class="card-header">
                      Make In India
                    </div>
                    <div class="card-body">
                      <p class="card-text">Make in India is an initiative by the Government of India to encourage companies to manufacture in India and incentivize dedicated investments into manufacturing.</p>
                      <a href="https://www.makeinindia.com/" target="_blank" class="btn btn-secondary circular">Click here for more Information</a>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      Smart Cirt
                    </div>
                    <div class="card-body">
                      <p class="card-text">A smart city is an urban area that uses different types of electronic methods and sensors to collect data. The smart city concept integrates information and communication technology (ICT), and various physical devices connected to the IoT (Internet of things) network to optimize the efficiency of city operations and services and connect to citizens.</p>
                      <a href="https://smartcities.gov.in/" target="_blank" class="btn btn-secondary circular">Click here for more Information</a>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      Swachh Bharat Mission
                    </div>
                    <div class="card-body">
                      <p class="card-text">Swachh Bharat Mission (SBM), Swachh Bharat Abhiyan, or Clean India Mission is a country-wide campaign initiated by the Government of India in 2014 to eliminate open defecation and improve solid waste management. It is a restructured version of the Nirmal Bharat Abhiyan launched in 2009 that failed to achieve its intended targets.</p>
                      <a href="https://swachhbharatmission.gov.in/sbmcms/index.htm" target="_blank" class="btn btn-secondary circular">Click here for more Information</a>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      Digital India
                    </div>
                    <div class="card-body">
                      <p class="card-text">Digital India is a campaign launched by the Government of India in order to ensure the Government's services are made available to citizens electronically by improved online infrastructure and by increasing Internet connectivity or making the country digitally empowered in the field of technology.</p>
                      <a href="https://www.digitalindia.gov.in/" target="_blank" class="btn btn-secondary circular">Click here for more Information</a>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      Skill India
                    </div>
                    <div class="card-body">
                      <p class="card-text">National Skill Development Corporation under the guidance of the Ministry of Skill Development & Entrepreneurship has introduced an initiative which allows aspirant candidates to register for skill training/learning and employment opportunities through the online portal.</p>
                      <a href="https://skillindia.nsdcindia.org/" target="_blank" class="btn btn-secondary circular">Click here for more Information</a>
                    </div>
                  </div>
            </div>
       </div>

      <?php include '../footer/footer.php'; ?>
      

        
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script> <!-- font-awesome -->
        <script type="text/javascript" src="js\script.js"></script>

    </body>
</html>