<?php 
    include("config/constants.php");           //including this for SITEURL 
    session_destroy();
    header('location:'.SITEURL."index.php");
?>