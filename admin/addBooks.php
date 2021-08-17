<head>
    <link href="styles.css" rel="stylesheet">
    <style>
        body {
            background-image: url('./Images/addBook.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
    </style>
</head>

<?php 
    $conn = $conn = mysqli_connect("localhost","root","","bookorder");
    if($conn->connect_error) {
        die("Connection Failed:".$conn->connect_error);
    }
?>

<div class="input-container" style="margin-top:4%">
    <form action="addBooks.php" method="post" enctype="multipart/form-data">
        <h1 style="text-align: center;font-size: 120%; color: whitesmoke;">ADD BOOK</h1>
        <br>
        <select class="input-field" name="category" required>
            <option value="" disabled selected hidden>Category</option>
            <option style="color: black;" value="Hii">Hii</option>
        </select>
        <br><br>
        <input type="text" name="bookname" placeholder="Book Name" style="margin-left: 5px;" class="input-field" required>
        <br><br>
        <input type="text" name="author" placeholder="Author" style="margin-left: 5px;" class="input-field" required>
        <br><br>
        <input type="number" name="price" placeholder="Price" style="margin-left: 5px;" class="input-field" required>
        <br><br>
        <input type="file" name="image" placeholder="Image" style="margin-left: 5px;" class="input-field" required>
        <br><br>
        <input type="submit" name="Create" class="submit-btn">
    </form>
</div>

<?php 
    if(isset($_POST['Create'])){
        $category = $_POST['category'];
        $name = $_POST['bookname'];
        $author = $_POST['author'];
        $price = $_POST['price'];
        $imageName = $_FILES['image']['name'];
        $source = $_FILES['image']['tmp_name'];
        $destination = "../Images/uploadedBooks/".$name.".jpg";
        move_uploaded_file($source ,$destination);
        $imageName = $name.".jpg";
        $insertSQL = "INSERT INTO books VALUES ('$category','$name','$author','$imageName','$price')";
        $conn->query($insertSQL);
    }
?> 