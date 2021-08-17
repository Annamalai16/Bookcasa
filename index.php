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
            <a href="index.php"><img src="images/logo.png" alt="" /><span> BOOKCASA </a>
        </div>
        <div class="header-right">
            <span class="menu"><img src="images/menu.png" alt=""/></span>
            <nav class="cl-effect-11" id="cl-effect-11">
                <ul class="nav1">
                    <li><a class="scroll" href="#home" data-hover="HOME" style="margin-right:0px;">HOME</a></li>
                    <li><a class="scroll" href="#about" data-hover="ABOUT" style="margin-right:0px;">ABOUT</a></li>
                    <li><a class="scroll" href="#services" data-hover="SERVICES" style="margin-right:0px;">SERVICES</a></li>
                    <li><a class="scroll" href="#team" data-hover="TEAM" style="margin-right:0px;">TEAM</a></li>
                    <li><a class="scroll" href="#contact" data-hover="CONTACT" style="margin-right:0px;">CONTACT</a></li>
                    <li style="float:right !important;"><a class="scroll" href="#" data-hover="LOGIN" onclick="window.location.href='login.php'">LOGIN</a></li>
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
                                <h3>KNOWLEDGE&nbsp|<span></span> HARD WORK&nbsp|<span>|</span>INTELLIGENCE&nbsp|</h3>
                                <h4>Your House of books</h4>
                                <p><button style="background:none;outline:none;border:none;" onclick="window.location.href = 'signup.php'">Sign Up</button></p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="banner two">
                        <div class="container">
                            <div class="banner-info">
                                <h3>KNOWLEDGE <span>|</span> HARD WORK <span>|</span> INTELLIGENCE</h3>
                                <h4>Your House of books</h4>
                                <p><button style="background:none;outline:none;border:none;" onclick="window.location.href = 'signup.php'">Sign Up</button></p>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- //banner-slider -->
    <!-- welcome -->
    <div class="welcome">
        <div class="container">
            <div class="welcome-head">
                <h3>WHY BOOKCASA? </h3>
                <p>The year 2020 has brought a new revolution in the field of education. The traditional teaching methods have come for a pause and online teaching is soaring up the skies. Online classes have a lot of advantages but one major drawback is the unavailability of hardcopy books. Though eBooks are plenty and always available online, it fails to give the satisfaction of holding the books and learning. Also, reading online always can cause a lot of stress on an individual’s eyes too. So what we do here at Bookcasa is that, we make sure to find your book from any part of the world and deliver it at your place.</p>
            </div>
        </div>
    </div>
    <!-- //welcome -->
    <!-- about -->
    <div class="about" id="about">
        <div class="container">
            <h3>ABOUT </h3>
            <div class="about-grids">
                <div class="col-md-6 about-grid-right">
                    <img src="images/1.jpg" alt=" " class="img-responsive" />
                </div>
                <div class="col-md-6 about-grid-left">
                    <h4>What makes us Special</h4>
                    <p>Bookcasa is a platform to find all books you need. Books of various genres and study streams are available on our website. All you have to do is register yourself on our website and search for the books you require. Place your order and your books will be delivered within the estimated time. <span>People from all over the world can place orders online on any books available in any part of the world and we make sure to deliver it without fail with utmost care. </span></p>
                    <div class="about-grid-left-grids">
                        <div class="about-grid-left-grid">
                            <img src="images/2.jpg" alt=" " class="img-responsive" />
                        </div>
                        <div class="about-grid-left-grid">
                            <img src="images/3.jpg" alt=" " class="img-responsive" />
                        </div>
                        <div class="about-grid-left-grid">
                            <img src="images/12.jpg" alt=" " class="img-responsive" />
                        </div>

                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //about -->
    <!-- services -->
    <div id="services" class="services1">
        <div class="container">
            <h3>WHY CHOOSE US? </h3>
            <div class="servc-grids">
                <div class="col-md-6 servc-grid">
                    <div class="servc-grid-left">
                        <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                    </div>
                    <div class="servc-grid-right">
                        <h4>Fastest delivery</h4>
                        <p>Our team works for the fastest delivery as we realise the position of our customers.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 servc-grid">
                    <div class="servc-grid-left">
                        <span class="glyphicon glyphicon-gift" aria-hidden="true"></span>
                    </div>
                    <div class="servc-grid-right">
                        <h4>Supreme packaging care</h4>
                        <p>We take utmost care to deliver the books without any damages</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 servc-grid">
                    <div class="servc-grid-left">
                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                    </div>
                    <div class="servc-grid-right">
                        <h4>Hassle-free shopping</h4>
                        <p>All books are available on a single website. If books are not available, mail us and books will be added within 2 weeks</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 servc-grid">
                    <div class="servc-grid-left">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    </div>
                    <div class="servc-grid-right">
                        <h4>24/7 customer service</h4>
                        <p>Your satisfaction is all that matters. Any queries our customer service will back you up and make sure that you are satisfied with our services</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- services -->
    <!-- team -->
    <!--start-teachers-->
    <div id="team" class="team" style="padding-left:20%;">
        <div class="container">
            <h3 class="tittle" style="margin-left:-30%;">OUR TEAM</h3>
            <div class="main">
                <div class="col-md-3 view-grid">
                    <div class="view fifth-effect">
                        <a href="#" title="Full Image"><img src="images/t1.jpg" alt="" /></a>
                        <div class="mask"></div>
                    </div>
                </div>
                <div class="col-md-3 view-grid">
                    <div class="view fifth-effect">
                        <a href="#" title="Full Image"><img src="images/t2.jpg" alt="" /></a>
                        <div class="mask"></div>
                    </div>
                </div>
                <div class="col-md-3 view-grid">
                    <div class="view fifth-effect">
                        <a href="#" title="Full Image"><img src="images/t3.jpg" alt="" /></a>
                        <div class="mask"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <!--//end-teachers-->
    <!-- contact -->
    <div class="contact" id="contact">
        <div class="container">
            <h3 class="tittle two">CONTACT</h3>
            <div class="contact-top">
                <div class="col-md-8 contact-top-right">
                    <form>
                        <input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
                        <input type="text" class="text" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}">
                        <div class="clearfix"></div>
                        <textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
                        <div class="sub-button">
                            <input type="submit" value="SEND">
                        </div>
                    </form>
                </div>
                <div class="col-md-4 contact-top-left">
                    <div class="contact-top-one">
                        <h4>Address:</h4>
                        <p>10,Gandhi nagar.
                            <span>756 gt globel Place,</span> CD-Road,ch-600 004.
                        </p>
                    </div>
                    <div class="contact-top-one">
                        <h4>Phone:</h4>
                        <p>Telephone: +91 9445656611
                            <span>FAX: +1 234 567 9871</span>
                        </p>
                    </div>
                    <div class="contact-top-one">
                        <h4>E-mail:</h4>
                        <p><a href="mailto:info@example.com">GT202@gmail.com</a></p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

    <!-- //contact -->
    <div class="copy-right">
        <div class="container">
            <p> &copy; All rights reserved.Designed by Team <a href="https://github.com/Annamalai16/library"> GT202</a></p>
        </div>
    </div>
    <!-- smooth scrolling -->
    <script type="text/javascript">
        $(document).ready(function() {
            $().UItoTop({
                easingType: 'easeOutQuart'
            });
        });
    </script>
    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    <!-- //smooth scrolling -->
</body>

</html>