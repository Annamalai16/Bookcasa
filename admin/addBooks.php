<?php include('partials/menu.php'); ?>
<div class="container-fluid" style="background-image: url('./Images/addBook.jpg');background-repeat: no-repeat;background-size:cover;background-position:center;height:100%;width:100%;height:85vh;">
    <br><br><br>
    <div class="input-container" style="margin-top:2%">
        <form action="addBooks.php" method="post" enctype="multipart/form-data">
            <h1 style="text-align: center;font-size: 120%; color: whitesmoke;">ADD BOOK</h1>
            <br>
            <select class="input-field" name="category" required>
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
            <input type="text" name="bookname" placeholder="Book Name" style="margin-left: 5px;" class="input-field" required>
            <br>
            <input type="text" name="author" placeholder="Author" style="margin-left: 5px;" class="input-field" required>
            <br>
            <input type="number" name="price" placeholder="Price" style="margin-left: 5px;" class="input-field" required>
            <br>
            <input type="file" name="image" placeholder="Image" style="margin-left: 5px;" class="input-field" required>
            <br>
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
            $sql = "INSERT INTO books SET category='$category',name='$name',author='$author',image='$imageName',price='$price'";
            $res = $conn->query($sql);
            if($res==true){
                ?>
                <script>
                    alert("Book Added Successfully");
                    window.location.href='index.php';
                </script>
                <?php
            }
        }
    ?> 
<br><br><br>
<?php include('partials/footer.php'); ?>
</div>