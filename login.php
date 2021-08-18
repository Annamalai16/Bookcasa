<?php include('config/constants.php');?>
<!DOCTYPE html>
<html>
<head>
    <title>login</title>
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
                  <div class="banner login">
                        <div class="container">
                            <div class="banner-info" style="margin-top:150px;">
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
                                        <input type="text" name="username" class="input-field" placeholder="User Name" required>
                                        <input type="email" name="email" class="input-field" placeholder="abc@xyz.com" required>
                                        <input type="password" name="password" class="input-field" placeholder="Enter Password" required>
                                        <input type="Submit" name="user" class="submit-btn" value="Login">
                                    </form>
                                    <form id="admin" class="input-group" method="post">
                                        <input type="text" name="username1"class="input-field" placeholder="Admin Name" required style="background:none;"> 
                                        <input type="email" name="email1" class="input-field" placeholder="abc@xyz.com" required>
                                        <input type="password" name="password1" class="input-field" placeholder="Enter Password" required>
                                        <input type="Submit" name="admin" class="submit-btn" value="Login" >
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
        $email=$_POST["email"];
        $password=$_POST["password"];

        //2.SQL Query to save data into database
        $sql="SELECT * FROM tbl_user WHERE email='$email' AND password='$password' ";
        
        //3.executing and saving data in database
        $res=mysqli_query($conn,$sql);
        //4.checking if we have inserted the data
        if($res==True){      
            $count= mysqli_num_rows($res);
            if($count==1){
                $_SESSION['user']=$username;
                while($row=mysqli_fetch_assoc($res)){
                    $id=$row['id'];
                    ?>
                <script>
                    window.location.href="<?php echo SITEURL; ?>home.php?id=<?php echo $id; ?>";
                </script>
                <?php
                }
            }else{
            ?>
            <script>
                alert("No such user Exist");
                window.location.href='signup.php';
            </script>
            <?php
            }
            //echo "Data Inserted";
            //redirecting page to manage admin
        }else{
        ?>
        <script>
            alert("Failed to Login.Please Try Again");
            window.location.href='login.php';
        </script>
        <?php
        }
    }elseif(isset($_POST['admin'])){
        //1.processing data if button is clicked 
        $username1=$_POST["username1"];
        $email1=$_POST["email1"];
        $password1=$_POST["password1"];
        //2.SQL Query to save data into database
        $sql1="SELECT * FROM tbl_admin WHERE e_mail='$email1' AND pass_word='$password1' ";
        
        //3.executing and saving data in database
        $res1= mysqli_query($conn,$sql1);

        //4.checking if we have inserted the data
        if($res1==True){
            $count1=mysqli_num_rows($res1);
            if($count1==1){
                $_SESSION['user']=$username1;
                while($row1=mysqli_fetch_assoc($res1)){
                    $id=$row1['id'];
                    ?>
                <script>
                    window.location.href="admin/index.php?id=<?php echo $id; ?>";
                </script>
                <?php
                break;
                }
            }else{
                ?>
                <script>
                    alert("No such Admin Exist");
                    window.location.href='index.php';
                </script>
                <?php
            }
            //echo "Data Inserted";
            //redirecting page to manage admin
        }else{
        ?>
        <script>
            alert("Failed to Login.Please Try Again");
            window.location.href='login.php';
        </script>
        <?php
        }
    }
?>
</html>