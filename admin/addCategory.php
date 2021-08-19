<?php include('partials/menu.php'); ?>
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
<br><br><br>
<?php include('partials/footer.php'); ?>
</div>