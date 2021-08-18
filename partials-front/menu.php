<?php include('config/constants.php')?>
<?php include('login-check.php');?>
<?php
    if(isset($_GET['id']))
    $id=$_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
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
    <!--Added by user -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- start-smoth-scrolling -->
</head>
<body>
    <div class="header">
        <div class="header-left">
            <a href="home.php?id=<?php echo $id; ?>" style="text-decoration:none;color:white;"><img src="images/logo.png" alt="" />BOOKCASA</a>
        </div>
        <div class="header-right">
            <span class="menu"><img src="images/menu.png" alt=""/></span>
            <nav class="cl-effect-11" id="cl-effect-11" style="margin-left:18%;">
                <ul class="nav1">
                    <li><a class="scroll" href="#" data-hover="ORDERHISTORY" onclick="window.location.href='orderhistory.php?id=<?php echo $id;?>'">ORDERHISTORY</a></li>
                    <li><a class="scroll" href="#" data-hover="MYCART" onclick="window.location.href='mycart.php?id=<?php echo $id;?>'">MYCART</a></li>
                    <li><a class="scroll" href="#" data-hover="LOGOUT" onclick="window.location.href='logout.php'" style="margin-right:0px;">LOGOUT</a></li>
                    <li style="float:right !important;padding-right:2%;"><i class='far fa-user-circle' style='font-size:24px;color:white;'></i><a class="scroll" href="#" data-hover="&nbsp;<?php echo $_SESSION['user']; ?>" style="margin-right:0px;margin-left:0px;">&nbsp;<?php echo $_SESSION['user']; ?></a></li>
                </ul>
            </nav>
            <!-- script for menu -->
            <script>
                $("span.menu").click(function() {
                    $("ul.nav1").slideToggle(300, function() {
                        // Animation complete.
                    });
                });
            </script>
            <!-- //script for menu -->
        </div>
        <div class="clearfix"></div>
    </div>