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
                                <h4> ARTS SCHOOL</h4>
                                <p><button style="background:none;outline:none;border:none;" onclick="window.location.href = 'categories.php?id=<?php echo $id; ?>'">ORDER NOW</button></p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="banner two">
                        <div class="container">
                            <div class="banner-info">
                                <h3>KNOWLEDGE <span>|</span> HARD WORK <span>|</span> INTELLIGENCE</h3>
                                <h4> ARTS SCHOOL</h4>
                                <p><button style="background:none;outline:none;border:none;" onclick="window.location.href = 'categories.php?id=<?php echo $id; ?>'">ORDER NOW</button></p>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- //banner-slider -->
<?php include('partials-front/footer.php'); ?>