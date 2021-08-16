<?php 
        //Authentiction purpose creating this

        //ie.to make sure user visits this page after login only
        if(!isset($_SESSION['user']) or !isset($_SESSION['user1'])){   //if not logged it
            header("location:".SITEURL."home.php");
        }
?>