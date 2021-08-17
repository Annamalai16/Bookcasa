<?php include('partials-front/menu.php')?>
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
                                <p><button style="background:none;outline:none;border:none;" onclick="window.location.href = 'categories.php'">ORDER NOW</button></p>
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
                                <p><button style="background:none;outline:none;border:none;" onclick="window.location.href = 'categories.php'">ORDER NOW</button></p>
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
                        <p>Newyork Still Road.
                            <span>756 gt globel Place,</span> CD-Road,M 07 435.
                        </p>
                    </div>
                    <div class="contact-top-one">
                        <h4>Phone:</h4>
                        <p>Telephone: +1 234 567 9871
                            <span>FAX: +1 234 567 9871</span>
                        </p>
                    </div>
                    <div class="contact-top-one">
                        <h4>E-mail:</h4>
                        <p><a href="mailto:info@example.com">mail@example.com</a></p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

    <!-- //contact -->
    <div class="copy-right">
        <div class="container">
            <p> &copy; 2015 Arts School. All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a></p>
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