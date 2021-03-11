<?php
require("includes/common.php");
?>

<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
         <script src="js/jquery.js"></script>
         <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check_cart.php';
        ?>

    <div clas="container" id="content">
        <div class="row text-center" >
            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="img/1.jpg" alt="" width="50%" height="50%">
                        <div class="caption">
                            <h3>Oppo Smartphone</h3>
                            <p>Price: Rs. 9000.00 </p>
                            <p>4.2" Display Snap Dragon Processor <br>4GB Internal Memory 1GB RAM <br>13MP Rear Camera 5 MP Front Camera </p>
                            <?php 
                            if (!isset($_SESSION['email'])) 
                                { ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                                <?php } 
                            else {
                            //We have created a function to check whether this particular 
                            // is added to cart or not.
                                if (check_cart(1)) 
                                    { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="cart.php" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } 
                                else 
                                    { ?>
                                    <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                    }
                                  }
                            ?>
                        </div>
                </div>
            </div>
           
            <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/2.jpg" alt="" width="50%" height="50%">
                        <div class="caption">
                            <h3>Apple iPhone 8 </h3>
                            <p>Price: Rs. 50000.00 </p>
                            <p>5.5" Display 64GB <br>12MP Rear Camera </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                                <?php
                            } else {
                                if (check_cart(2)) 
                                    { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } 
                                else 
                                    { ?>
                                    <a href="cart_add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                    }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                
           <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/3.jpg" alt="" width="50%" height="50%">
                        <div class="caption">
                            <h3>RedMi Note 3  </h3>
                            <p>Price: Rs. 11000.00 </p>
                            <p>6" Display Snap Dragon Processor <br>8GB Internal Memory 2GB RAM <br>16MP Rear Camera 5 MP Front Camera </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                                <?php
                            } else {
                                if (check_cart(3)) 
                                    { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } 
                                else 
                                    { ?>
                                    <a href="cart_add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                    }
                            }
                            ?>
                        </div>
                    </div>
            </div>
        </div>
        <div class="row text-center" id="cameras">
           <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/4.jpg" alt="" width="50%" height="50%">
                        <div class="caption">
                            <h3>Nokia 3231 Basic Phone</h3>
                            <p>Price: Rs.6000.00 </p>
                            <p>Numeric KeyPad<br> Internet Browsing</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_cart(4)) 
                                    { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } 
                                else 
                                    { ?>
                                    <a href="cart_add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                    }
                            }
                            ?>
                        </div>
                    </div>
                </div>
           
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/5.jpg" alt="" width="50%" height="50%">
                        <div class="caption">
                            <h3>Nokia 6.2 </h3>
                            <p>Price: Rs. 18000.00 </p>
                            <p>5.5" Display Snap Dragon Processor <br>16GB Internal Memory 3 GB RAM<br>19 MP Rear Camera 8MP Front Camera</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                                <?php
                            } else {
                                if (check_cart(5)) 
                                    { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } 
                                else 
                                    { ?>
                                    <a href="cart_add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                    }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                
           <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/6.jpg" alt="" width="50%" height="50%">
                        <div class="caption">
                            <h3>Nokia Qwerty Phone </h3>
                            <p>Price: Rs. 8000.00 </p>
                            <p>Qwerty keypad <br> 5MP Rear Camera 2MP Front Camera </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_cart(6)) 
                                    { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } 
                                else 
                                    { ?>
                                    <a href="cart_add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                    }
                            }
                            ?>
                        </div>
                    </div>
            </div>
        </div>
        <div class="row text-center" id="cameras">
           <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/7.jpg" alt="" width="50%" height="50%">
                        <div class="caption">
                            <h3>Nokia 8.2 </h3>
                            <p>Price: Rs. 22000.00 </p>
                            <p>6" Display Snap dragon processor <br> 23MP Front Camera 12 MP Front Camera <br> 4GB RAM 32 GB Internal memory </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                                <?php
                            } else {
                                if (check_cart(7)) 
                                    { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } 
                                else 
                                    { ?>
                                    <a href="cart_add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                    }
                            }
                            ?>
                        </div>
                    </div>
                </div>
           
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/8.jpg" alt="" width="50%" height="50%">
                        <div class="caption">
                            <h3>Motorola G7 </h3>
                            <p>Price: Rs. 15000.00 </p>
                            <p>5.5" Display Snap dragon processor <br> 18MP Rear Camera 8 MP Front Camera <br> 3GB RAM 64 GB Internal memory </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                                <?php
                            } else {
                                if (check_cart(8)) 
                                    { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } 
                                else 
                                    { ?>
                                    <a href="cart_add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                    }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                
           <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/9.jpg" alt="" width="50%" height="50%">
                        <div class="caption">
                            <h3>Apple iPhone X </h3>
                            Price: Rs. 80000.00 
                            6" Display ios 5 <br> 22 MP Rear Camera 5 MP Front Camera <br> 128 GB Internal memory
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                                <?php
                            } else {
                                if (check_cart(9)) 
                                    { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } 
                                else 
                                    { ?>
                                    <a href="cart_add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                    }
                            }
                            ?>
                        </div>
                    </div>
            </div>
        </div>
        </div>
        

        <?php
        include 'includes/footer.php';
        ?>
        
    </body> 
</html>