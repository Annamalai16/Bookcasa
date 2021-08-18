<?php include('partials/menu.php'); ?>
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
    $sql1 = "SELECT * from books WHERE name='$temp'";
    $result1 = $conn->query($sql1);
    $row1 = $result1->fetch_assoc();
    $category = $row1['category'];
    $name = $row1['name'];
    $author = $row1['author'];
    $price = $row1['price'];
    $imageName = $row1['image'];
?>

<div class="input-container" style="margin-top:4%">
    <form method="post" enctype="multipart/form-data">
        <h1 style="text-align: center;font-size: 120%; color: whitesmoke;">UPDATE BOOK</h1>
        <br>
        <select class="input-field" name="category">
            <option value="" disabled selected hidden>Category</option>
            <?php 
            $sql = "SELECT name FROM category";
            $result = $conn->query($sql);
            if($result->num_rows>0){
                while($row = $result->fetch_assoc()){ ?>
                    <option style="color: black;" value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
                <?php 
                }
            } ?>
        </select>
        <br>
        <input type="text" name="bookname" placeholder="Book Name" value="<?php echo $row1['name']; ?>" style="margin-left: 5px;" class="input-field">
        <br>
        <input type="text" name="author" placeholder="Author" value="<?php echo $row1['author']; ?>" style="margin-left: 5px;" class="input-field">
        <br>
        <input type="number" name="price" placeholder="Price" value="<?php echo $row1['price']; ?>" style="margin-left: 5px;" class="input-field">
        <br>
        <input type="file" name="image" placeholder="Image" style="margin-left: 5px;" class="input-field">
        <br>
        <input type="submit" name="Create" class="submit-btn">
    </form>
</div>

<?php 
    if(isset($_POST['Create'])){
        if(isset($_POST['category'])){
            $category = $_POST['category'];
        }
        if(isset($_POST['bookname'])){
            $name = $_POST['bookname'];
        }
        if(isset($_POST['author'])){
            $author = $_POST['author'];
        }
        if(isset($_POST['price'])){
            $price = $_POST['price'];
        }
        $var = $_FILES['image']['name'];
        if($var!=""){
            $imageName = $_FILES['image']['name'];
            $source = $_FILES['image']['tmp_name'];
            $destination = "../Images/uploadedBooks/".$name.".jpg";
            move_uploaded_file($source ,$destination);
            $imageName = $name.".jpg";
            $sql = "UPDATE books SET image = '$imageName' WHERE name='$temp'";
            $conn->query($sql);
        }
        $sql = "UPDATE books SET category = '$category', name = '$name', author = '$author', price = '$price' WHERE name = '$temp'";
        $result = $conn->query($sql);
        if(!$result){?> 
            <script>
                alert("Book already Exists!!")
            </script>
        <?php 
        }
        ?>
        <meta http-equiv = "refresh" content = "0; url = ./index.php?id=<?php echo $id; ?>" />
    <?php 
    }
?> 

<br><br><br>
<?php include('partials/footer.php'); ?>