<?php
    session_start();
    /*variable for database*/
    define('LOCALHOST','localhost');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','');
    define('DB_NAME','library');
    define('SITEURL','http://localhost/library/');
    #connecting database
    $conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD);
    $db_select=mysqli_select_db($conn,DB_NAME);
?>
