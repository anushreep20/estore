<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Products | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php
        include 'includes/header.php';
          ?>
        
        <div class="row text-center" >
            <div class="col-md-9 col-sm-11 home-feature">
            
            <h1 style="text-align: left" >LIVE SUPPORT</h1>
            <h4 style="text-align: left">24hours | 7 days a week | 365 days a year Live Tecgnical Support</h4>
            <p>
                It is a long fact that a reader will be distracted by readable content of a page when booking 
                at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution 
                of letters.There are many variations of Lorem Ipsum available,but the majority  have suffered 
                attention in some form, by injected humour , or randomised words which don't look even slightly
                believable. If you are going to make a passage of Lorrem Ipsum, you need to be sure there is not 
                anything embarrassing hidden in the middle of text.
            </p>
            
            </div>
            
            <div class="col-md-3 col-sm-6 home-feature">
                <img src='img/contact.jpg'></img>
                </div>
           
        </div>
            
        <div class="row text-center">
                <div class="col-md-5 col-sm-6 home-feature">
                        <h4>CONTACT US</h4>   
                        <form method="POST">
                            
                            Name:<br>
                            <input type='text'class="form-control" name="name" required = "true">
                            <br>
                            Contact:<br>
                            <input type='text'class="form-control" name="contact" required = "true">
                            <br>
                            Message:<br>
                            <textarea rows = "5" cols = "60" name = "description">
                            </textarea>
                            <br>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button><br><br>
                            
                        </form>     
                </div>
            
                <div class="col-md-5 col-sm-7 home-feature">
                    
                        <h5>Company Information</h5><br>
                        <p>
                            500 Lorem Ipsum Dobr Sit,<br>22-56-2-9 Slt Amet,Lorem,<br> USA <br>
                            Phone:(00)222 666 444 <br> Fax:(000) 000 00 00 0 <br>
                            Email:info@mycompany.com <br>Follow on:Facebook,Twitter.
                        </p>
                    
                </div>
            </div>
     
      <?php include("includes/footer.php"); ?>
    </body>

</html>
