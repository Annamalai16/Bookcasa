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
    $temp = mysqli_real_escape_string($conn,$_GET["name"]);
    $sql1 = "SELECT * from category WHERE name='$temp'";
    $result1 = $conn->query($sql1);
    $row1 = $result1->fetch_assoc();
    $name = $row1['name'];
    $imageName = $row1['image'];
?>
<div class="input-container" style="margin-top:10%">
    <form method="post" enctype="multipart/form-data">
        <h1 style="text-align: center;font-size: 120%; color: whitesmoke;">EDIT CATEGORY</h1>
        <br>
        <input type="text" name="categoryName" placeholder="Category Name" value="<?php echo $name; ?>" style="margin-left: 5px;" class="input-field">
        <br><br> 
        <input type="file" name="image" placeholder="Image" style="margin-left: 5px;" class="input-field">
        <br><br>
        <input type="submit" name="Create" class="submit-btn">
    </form>
</div>

<?php 
    if(isset($_POST['Create'])){
        if(isset($_POST['categoryName'])){
            $name = $_POST['categoryName'];
        }
        $var = $_FILES['image']['name'];
        if($var!=""){
            echo "abc";
            $imageName = $_FILES['image']['name'];
            $source = $_FILES['image']['tmp_name'];
            $destination = "../Images/uploadedBooks/".$name.".jpg";
            move_uploaded_file($source ,$destination);
            $imageName = $name.".jpg";
            $sql = "UPDATE category SET image = '$imageName' WHERE name='$temp'";
            $conn->query($sql);
        }
        $sql = "UPDATE category SET name = '$name' WHERE name = '$temp'";
        $result = $conn->query($sql);
        if(!$result){?> 
            <script>
                alert("Category already Exists!!")
            </script>
        <?php 
        }
        $sql = "UPDATE books SET category='$name' WHERE category='$temp';";
        $result = $conn->query($sql);
        header("Refresh:0;url=index.php");
    }
?> 