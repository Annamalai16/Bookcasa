<?php
    session_start();
    $id = $_SESSION['gid'];
    $name = $_SESSION['gname'];
    $conn = $conn = mysqli_connect("localhost","root","","bookorder");
    if($conn->connect_error) {
        die("Connection Failed:".$conn->connect_error);
    }
    $booksql = "SELECT * FROM books where name='$name'";
    $bookresult = $conn->query($booksql);
    $bookRow = $bookresult->fetch_assoc();
    $author = $bookRow['author'];
    $price = $bookRow['price'];
    $image = $bookRow['image'];
    date_default_timezone_set("Asia/kolkata");
    $currentDate = date("Y/m/d");
    $insert = "INSERT INTO orders VALUES('$id','$name','$author','$image','$price','$currentDate')";
      
?>
<meta http-equiv = "refresh" content = "0; url = ./orderHistory.php?id=<?php echo $id; ?>" />