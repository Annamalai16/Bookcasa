<?php 
    include("../config/constants.php");           //including this for SITEURL 
    session_destroy();
    ?>
    <script>window.location.href='home.php';</script>
    <?php                      //DESTROYING ALL SESSIONS CREATED
     //REDIRECTING TO LOGIN PAGE?>