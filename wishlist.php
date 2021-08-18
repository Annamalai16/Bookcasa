<?php include('config/constants.php');?>
<?php include('partials-front/login-check.php'); ?>
<?php
    $id=$_GET['id'];
    $name=$_GET['name'];
    $author=$_GET['author'];
    $image=$_GET['image'];
    $price=$_GET['price'];
    $sql="INSERT INTO mycart SET
    id='$id',
    name='$name',
    author='$author',
    image='$image',
    price='$price'";
    $res=mysqli_query($conn,$sql);
    if($res==True){
        ?>
        <script>
            window.location.href='mycart.php?id=<?php echo $id;?>';
        </script>
        <?php
    }else{
    ?>
    <script>
        alert("Already in wishlist");
        window.location.href=">categories.php?id=<?php echo $id; ?>";
    </script>
    <?php
    }
?>