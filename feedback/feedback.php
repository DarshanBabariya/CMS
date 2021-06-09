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

        <title> Complaint Management System </title>

    </head>
    <body style="background-image: url('../images/feedback.png'); background-repeat: no-repeat; background-size: 102% ; width: 100%; height: 100%;">
    
        <?php include '../header/header.php'; ?>

        <!-- brif-info -->
        <div class="container my-4 shadow-lg">
           <div class="row py-4">
            <div class="col-md-3"></div>
              <div class="col-md-6"> 
                <h2 class="text-white">Feedback Form</h2>
                <p class="col-md-15 small text-white">We would love to hear your thoughts, concerns or problem with anything so we can improve!</p>
                <hr>
                <form>
                    <h4 >Feedback type:</h4>
                    <div class="row ">
                      <div class="col-md-4 ">
                        <input type= "radio" name="feed" class="pointer"  >&nbsp;&nbsp;<label class="small">Comments</label>    
                      </div>
                      <div class="col-md-4">
                        <input type="radio" name="feed" >&nbsp;&nbsp;<label class="small">Bug Reports</label>    
                      </div>      
                      <div class="col-md-4">
                        <input type="radio" name="feed" >&nbsp;&nbsp;<label class="small">Questions</label>    
                      </div>
                    </div>

                    <div class="form-group mt-3 mb-3" >
                        <label class="form-label">Full Name:</label>
                        <input type="text" class="form-control " required="">
                    </div>
                    <div class="form-group mb-2">
                        <label  class="form-label">Email:</label>
                        <input type="Email" class="form-control" required="">
                    </div>
                    <div class="form-group mb-2">
                        <label  class="form-label">Describe Feedback:</label>
                        <textarea rows="4" class="form-control" required=""></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Feedback</button>
                </form>
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