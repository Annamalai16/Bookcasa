<?php include('partials/menu.php'); ?>
<<<<<<< HEAD
<div class="container-fluid" style="background-image: url('./Images/addBook.jpg');background-repeat: no-repeat;background-size:cover;background-position:center;height:100%;width:100%;height:85vh;">
    <br><br><br>
    <div class="input-container" style="margin-top:2%">
        <form action="addCategory.php" method="post" enctype="multipart/form-data">
            <h1 style="text-align: center;font-size: 120%; color: whitesmoke;">ADD Category</h1>
            <br>
                <input type="text" name="categoryName" placeholder="Category Name" style="margin-left: 5px;" class="input-field" required>
                <br><br> 
                <input type="file" name="image" placeholder="Image" style="margin-left: 5px;" class="input-field" required>
                <br><br>
                <input type="submit" name="Create" class="submit-btn">
            </form>
    </div>
    <?php 
        if(isset($_POST['Create'])){
            $name = $_POST['categoryName'];
            $imageName = $_FILES['image']['name'];
            $source = $_FILES['image']['tmp_name'];
            $destination = "../Images/uploadedCategories/".$name.".jpg";
            move_uploaded_file($source ,$destination);
            $imageName = $name.".jpg";
            $sql = "INSERT INTO category SET name='$name', image='$imageName'";
            $res=mysqli_query($conn,$sql);
            if($res==true){
                ?>
                <script>
                    alert("Category Added Successfully");
                    window.location.href='index.php';
                </script>
                <?php
            }
        }?>
=======
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
    $conn = mysqli_connect("localhost","root","","bookorder");
    if($conn->connect_error) {
        die("Connection Failed:".$conn->connect_error);
    }
?>
<div class="input-container" style="margin-top:5%">
    <form action="addCategory.php" method="post" enctype="multipart/form-data">
        <h1 style="text-align: center;font-size: 120%; color: whitesmoke;">ADD CATEGORY</h1>
        <br>
        <input type="text" name="categoryName" placeholder="Category Name" style="margin-left: 5px;" class="input-field" required>
        <br><br> 
        <input type="file" name="image" placeholder="Image" style="margin-left: 5px;" class="input-field" required>
        <br><br>
        <input type="submit" name="Create" class="submit-btn">
    </form>
</div>

<?php 
    if(isset($_POST['Create'])){
        $name = $_POST['categoryName'];
        $imageName = $_FILES['image']['name'];
        $source = $_FILES['image']['tmp_name'];
        $destination = "../Images/uploadedCategories/".$name.".jpg";
        move_uploaded_file($source ,$destination);
        $imageName = $name.".jpg";
        $insertSQL = "INSERT INTO category VALUES ('$name','$imageName')";
        $conn->query($insertSQL);?>
        <?php echo $id; ?>
        <meta http-equiv = "refresh" content = "0; url = ../admin/index.php?id=<?php echo $id; ?>" />
        <?php 
    }
?> 

>>>>>>> 817ebfc443a1387f672b71cf2ba3b11e8b894c05
<br><br><br>
<?php include('partials/footer.php'); ?>
</div>