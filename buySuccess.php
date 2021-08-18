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
    $status = "Ordered";
    $insert = "INSERT INTO orders VALUES('$id','$name','$author','$image','$price','$currentDate','$status');";
    if($conn->query($insert)) 
?>
<meta http-equiv = "refresh" content = "0; url = ./orderHistory.php?id=<?php echo $id; ?>" />
<?php else {
    echo "NOT BOUGHT";
    <meta http-equiv = "refresh" content = "3; url = ./home.php?id=<?php echo $id; ?>" />
}

