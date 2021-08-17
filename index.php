<?php include('config/constants.php')?>
<!DOCTYPE html>
<html>
<head>
    <title>index</title>
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
            <a href="index.html"><img src="images/logo.png" alt="" /><span>ARTS</span> SCHOOL</a>
        </div>
        <div class="header-right">
            <span class="menu"><img src="images/menu.png" alt=""/></span>
            <nav class="cl-effect-11" id="cl-effect-11">
                <ul class="nav1" style="float:right !important;">
                    <li><a class="scroll" href="#" data-hover="LOGIN" onclick="window.location.href='login.php'" >LOGIN</a></li>
                </ul>
            </nav>
            <!-- script for menu -->
            <!-- //script for menu -->
        </div>
        <div class="clearfix"></div>
        </div>
    <!-- banner-slider -->
    <div id="home" class="banner-slider">
        <!-- responsiveslides -->
        <script src="js/responsiveslides.min.js"></script>
        <script>
            // You can also use "$(window).load(function() {"
            $(function() {
                // Slideshow 4
                $("#slider3").responsiveSlides({
                    auto: true,
                    pager: false,
                    nav: false,
                    speed: 500,
                    namespace: "callbacks",
                    before: function() {
                        $('.events').append("<li>before event fired.</li>");
                    },
                    after: function() {
                        $('.events').append("<li>after event fired.</li>");
                    }
                });
            });
        </script>
        <!-- responsiveslides -->
        <div id="top" class="callbacks_container">
            <ul class="rslides" id="slider3">
                <li>
                    <div class="banner one">

                        <div class="container">
                            <div class="banner-info">
                                <h3>KNOWLEDGE <span>|</span> HARD WORK <span>|</span> INTELLIGENCE</h3>
                                <h4><span>ARTS</span> SCHOOL</h4>
                                <p><button style="background:none;outline:none;border:none;" onclick="window.location.href = 'signup.php'">Sign up</button></p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="banner two">
                        <div class="container">
                            <div class="banner-info">
                                <h3>KNOWLEDGE <span>|</span> HARD WORK <span>|</span> INTELLIGENCE</h3>
                                <h4><span>ARTS</span> SCHOOL</h4>
                                <p><button style="background:none;outline:none;border:none;" onclick="window.location.href = 'signup.php'">Sign up</button></p>
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
</html>