<?php include('config/constants.php');?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign up</title>
    <!--fonts-->
    <link href='//fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <!--//fonts-->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/chocolat.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Arts School Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //for-mobile-apps -->
    <!-- js -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- js -->
    <script src="js/modernizr.custom.97074.js"></script>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
</head>
<body>
    <div class="header">
        <div class="header-left">
            <a href="index.php"><img src="images/logo.png" alt=""/>BOOKCASA</a>
        </div>
        <div class="header-right">
            <span class="menu"><img src="images/menu.png" alt=""/></span>
            <nav class="cl-effect-11" id="cl-effect-11">
                <ul class="nav1" style="float:right !important;">
                    <li><a class="scroll" href="#" data-hover="HOME" onclick="window.location.href='index.php'">HOME</a></li>
                </ul>
            </nav>
            <!-- script for menu -->
            <!-- //script for menu -->
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- banner-slider -->
    <div id="home" class="banner-slider">
        <div id="top" class="callbacks_container">
            <ul class="rslides" id="slider3">
                <li>
                  <div class="banner signup">
                        <div class="container">
                            <div class="banner-info" style="margin-top:150px;">
                                <div class="container-fluid register"><!--register is the form box-->
                                    <div class="button-box">
                                        <div style="top: 0;left: 0;position: absolute;width: 220px;height: 100%;background: rgb(37, 150, 190);border-radius: 30px;"></div>
                                        <button type="button" class="toggle-btn" style="text-align:center;padding: 10px 72px;">Sign Up</button>
                                    </div>
                                    <div class="social-icons">
                                        <img src="images/fblogo.png" alt="fblogo" srcset="">
                                        <img src="images/twitterlogo.png" alt="twitterlogo" srcset="">
                                        <img src="images/googlelogo.png" alt="googlelogo" srcset="">
                                    </div>
                                    <form id="user" class="input-group" method="post">
                                        <input type="text" name="username" class="input-field" placeholder="User Id" required>
                                        <input type="email" name="email" class="input-field" placeholder="abc@xyz.com" required>
                                        <input type="tel" name="phone" class="input-field" placeholder="+91**********" minlength="10" required>
                                        <input type="text" name="password" class="input-field" placeholder="Enter Password" required>
                                        <input type="Submit" name="user" class="submit-btn" value="Sign up">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
     </div>
<div class="clearfix"></div>
<!-- //banner-slider -->
</body>
<?php 
    //form to the database operation done here
    if(isset($_POST['user'])){
        //1.processing data if button is clicked 
        $username=$_POST["username"];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $password=$_POST["password"];

        //2.SQL Query to save data into database
        $sql="INSERT INTO tbl_user SET 
        username='$username',
        email='$email',
        phone='$phone',
        password='$password'
         ";
        echo $sql;
        //3.executing and saving data in database
        $res=mysqli_query($conn,$sql);

        //4.checking if we have inserted the data
        if($res==True){
            //echo "Data Inserted";
            //redirecting page to manage admin
        ?>
        <script>
            alert("Thank you for being a part of us!","Book Buddy")
            window.location.href='login.php'
        </script>
        <?php
        }else{
        ?>
        <script>
            alert("Failed to Sign up! Try Again")
            window.location.href='index.php'
        </script>
        <?php
        }
    }       
?>
</html>