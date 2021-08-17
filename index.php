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
                <ul class="nav1">
                    <li><a class="scroll" href="#home" data-hover="HOME" style="margin-right:0px;">HOME</a></li>
                    <li><a class="scroll" href="#about" data-hover="ABOUT" style="margin-right:0px;">ABOUT</a></li>
                    <li><a class="scroll" href="#services" data-hover="SERVICES" style="margin-right:0px;">SERVICES</a></li>
                    <li><a class="scroll" href="#team" data-hover="TEAM" style="margin-right:0px;">TEAM</a></li>
                    <li><a class="scroll" href="#gallery" data-hover="GALLERY" style="margin-right:0px;">GALLERY</a></li>
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
                                <h3>KNOWLEDGE <span>|</span> HARD WORK <span>|</span> INTELLIGENCE</h3>
                                <h4><span>ARTS</span> SCHOOL</h4>
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
                                <h4><span>ARTS</span> SCHOOL</h4>
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
                <h3>WELCOME</h3>
                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut
                    rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
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
                    <h4>eum fugiat quo voluptas nulla pariatur</h4>
                    <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.<span>Temporibus autem quibusdam et aut officiis debitis 
						aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et 
						molestiae non recusandae.</span></p>
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
            <h3>SERVICES</h3>
            <div class="servc-grids">
                <div class="col-md-6 servc-grid">
                    <div class="servc-grid-left">
                        <span class="glyphicon glyphicon-education" aria-hidden="true"></span>
                    </div>
                    <div class="servc-grid-right">
                        <h4>cum soluta nobis est eligendi optio cumque nihil cons</h4>
                        <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 servc-grid">
                    <div class="servc-grid-left">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </div>
                    <div class="servc-grid-right">
                        <h4>cum soluta nobis est eligendi optio cumque nihil cons</h4>
                        <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 servc-grid">
                    <div class="servc-grid-left">
                        <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                    </div>
                    <div class="servc-grid-right">
                        <h4>cum soluta nobis est eligendi optio cumque nihil cons</h4>
                        <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 servc-grid">
                    <div class="servc-grid-left">
                        <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
                    </div>
                    <div class="servc-grid-right">
                        <h4>cum soluta nobis est eligendi optio cumque nihil cons</h4>
                        <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
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
    <div id="team" class="team">
        <div class="container">
            <h3 class="tittle">OUR TEAM</h3>
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
                <div class="col-md-3 view-grid">
                    <div class="view fifth-effect">
                        <a href="#" title="Full Image"><img src="images/t4.jpg" alt="" /></a>
                        <div class="mask"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <!--//end-teachers-->
    <!-- //team -->
    <!-- gallery -->
    <div class="gallery" id="gallery">
        <div class="container">
            <h3 class="tittle">GALLERY</h3>
            <div class="gallery-bottom">
                <div class="col-md-4 gal-grid">
                    <div class="view view-fifth">
                        <a href="images/g1.jpg" class="b-link-stripe b-animate-go  thickbox" title="Image Title"><img src="images/g1.jpg" alt="" class="img-responsive">
                            <div class="mask">
                                <h2>VOLUPTATIBUS</h2>
                                <p>A wonderful serenity has taken possession of my entire soul.</p>
                                <span>More</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 gal-grid">
                    <div class="view view-fifth">
                        <a href="images/g2.jpg" class="b-link-stripe b-animate-go  thickbox" title="Image Title"><img src="images/g2.jpg" alt="" class="img-responsive">
                            <div class="mask">
                                <h2>VOLUPTATIBUS</h2>
                                <p>A wonderful serenity has taken possession of my entire soul.</p>
                                <span>More</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 gal-grid">
                    <div class="view view-fifth">
                        <a href="images/g3.jpg" class="b-link-stripe b-animate-go  thickbox" title="Image Title"><img src="images/g3.jpg" alt="" class="img-responsive">
                            <div class="mask">
                                <h2>VOLUPTATIBUS</h2>
                                <p>A wonderful serenity has taken possession of my entire soul.</p>
                                <span>More</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 gal-grid">
                    <div class="view view-fifth">
                        <a href="images/g4.jpg" class="b-link-stripe b-animate-go  thickbox" title="Image Title"><img src="images/g4.jpg" alt="" class="img-responsive">
                            <div class="mask">
                                <h2>VOLUPTATIBUS</h2>
                                <p>A wonderful serenity has taken possession of my entire soul.</p>
                                <span>More</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 gal-grid">
                    <div class="view view-fifth">
                        <a href="images/g5.jpg" class="b-link-stripe b-animate-go  thickbox" title="Image Title"><img src="images/g5.jpg" alt="" class="img-responsive">
                            <div class="mask">
                                <h2>VOLUPTATIBUS</h2>
                                <p>A wonderful serenity has taken possession of my entire soul.</p>
                                <span>More</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 gal-grid">
                    <div class="view view-fifth">
                        <a href="images/g6.jpg" class="b-link-stripe b-animate-go  thickbox" title="Image Title"><img src="images/g6.jpg" alt="" class="img-responsive">
                            <div class="mask">
                                <h2>VOLUPTATIBUS</h2>
                                <p>A wonderful serenity has taken possession of my entire soul.</p>
                                <span>More</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 gal-grid">
                    <div class="view view-fifth">
                        <a href="images/g1.jpg" class="b-link-stripe b-animate-go  thickbox" title="Image Title"><img src="images/g1.jpg" alt="" class="img-responsive">
                            <div class="mask">
                                <h2>VOLUPTATIBUS</h2>
                                <p>A wonderful serenity has taken possession of my entire soul.</p>
                                <span>More</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 gal-grid">
                    <div class="view view-fifth">
                        <a href="images/g3.jpg" class="b-link-stripe b-animate-go  thickbox" title="Image Title"><img src="images/g3.jpg" alt="" class="img-responsive">
                            <div class="mask">
                                <h2>VOLUPTATIBUS</h2>
                                <p>A wonderful serenity has taken possession of my entire soul.</p>
                                <span>More</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 gal-grid">
                    <div class="view view-fifth">
                        <a href="images/g2.jpg" class="b-link-stripe b-animate-go  thickbox" title="Image Title"><img src="images/g2.jpg" alt="" class="img-responsive">
                            <div class="mask">
                                <h2>VOLUPTATIBUS</h2>
                                <p>A wonderful serenity has taken possession of my entire soul.</p>
                                <span>More</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <script src="js/jquery.chocolat.js"></script>

            <!--light-box-files -->
            <script type="text/javascript">
                $(function() {
                    $('.gallery a').Chocolat();
                });
            </script>

        </div>
    </div>
    <!-- //gallery -->
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