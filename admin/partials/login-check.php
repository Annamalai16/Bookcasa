<?php 
        //Authentiction purpose creating this
        //ie.to make sure user visits this page after login only
        if(!isset($_SESSION['user1'])){   
            header("location:".SITEURL."index.php");                  //if not logged it
        }
?>