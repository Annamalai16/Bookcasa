<?php include('config/constants.php');?>
<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <!--fonts-->
    <link href='//fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <!--//fonts-->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/chocolat.css" rel="stylesheet">
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Viaoda+Libre&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cardo:400,700|Oswald" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css" />
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
            <a href="index.html"><img src="images/logo.png" alt=""/><span>ARTS</span>SCHOOL</a>
        </div>
        <div class="header-right">
            <span class="menu"><img src="images/menu.png" alt=""/></span>
            <nav class="cl-effect-11" id="cl-effect-11">
                <ul class="nav1" style="float:right !important;">
                    <li><a class="scroll" href="#home" data-hover=""></a></li>
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
                  <div class="banner one">
                        <div class="container">
                            <div class="banner-info">
                                <div class="container-fluid register"><!--register is the form box-->
                                    <div class="button-box">
                                        <div id="btn"></div>
                                        <button type="button" class="toggle-btn" onclick="user()">User</button>
                                        <button type="button" class="toggle-btn" onclick="admin()">Admin</button>
                                    </div>
                                    <div class="social-icons">
                                        <img src="images/fblogo.png" alt="fblogo" srcset="">
                                        <img src="images/twitterlogo.png" alt="twitterlogo" srcset="">
                                        <img src="images/googlelogo.png" alt="googlelogo" srcset="">
                                    </div>
                                    <form id="user" class="input-group" method="post">
                                        <input type="text" name="username" class="input-field" placeholder="User Id" required>
                                        <input type="text" name="password" class="input-field" placeholder="Enter Password" required>
                                        <input type="Submit" name="user" class="submit-btn" value="Sign up">
                                    </form>
                                    <form id="admin" class="input-group" method="post">
                                        <input type="text" name="username1"class="input-field" placeholder="Admin Id" required style="background:none;"> 
                                        <input type="text" name="password1" class="input-field" placeholder="Enter Password" required>
                                        <input type="Submit" name="admin" class="submit-btn" value="Sign up" >
                                    </form>
                                </div>
                            </div>
                            <script>
                                var x = document.getElementById("user");
                                var y = document.getElementById("admin");
                                var z = document.getElementById("btn");
                                var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
                                function admin(){
                                    x.style.left="-400px";
                                    y.style.left="50px";
                                    if(width<=481){
                                        z.style.left="50%"; 
                                    }else{
                                        z.style.left="110px";
                                    }
                                }
                                function user(){
                                    x.style.left="50px";
                                    y.style.left="450px";
                                    z.style.left="0px";
                                }
                            </script>
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
        $password=$_POST["password"];

        //2.SQL Query to save data into database
        $sql="INSERT INTO tbl_user SET 
        username='$username',
        password='$password'
         ";

        //3.executing and saving data in database
        $res=mysqli_query($conn,$sql) or die(mysqi_error());

        //4.checking if we have inserted the data
        if($res==True){
            //echo "Data Inserted";
            //redirecting page to manage admin
            $_SESSION['user']=$username;
        ?>
        <script>
            window.location.href='index.php'
        </script>
        <?php
        }else{
        ?>
        <script>
            window.location.href='home.php'
        </script>
        <?php
        }
    }elseif(isset($_POST['admin'])){
        //1.processing data if button is clicked 
        $username1=$_POST["username1"];
        $password1=$_POST["password1"];

        //2.SQL Query to save data into database
        $sql1="INSERT INTO tbl_admin SET 
        user_name='$username1',
        pass_word='$password1'
         ";

        //3.executing and saving data in database
        $res1=mysqli_query($conn,$sql1) or die(mysqi_error());

        //4.checking if we have inserted the data
        if($res1==True){
            //echo "Data Inserted";
            //redirecting page to manage admin
            $_SESSION['user1']=$username1;
        ?>
        <script>
            window.location.href='index.php'
        </script>
        <?php
        }else{
        ?>
        <script>
            window.location.href='home.php'
        </script>
        <?php
        }
    }       
?>
</html>