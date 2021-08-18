<?php include('config/constants.php');?>
<?php include('partials-front/login-check.php'); ?>
<?php
    $id=$_GET['id'];
    $name=$_GET['name'];
    $author=$_GET['author'];
    $image=$_GET['image'];
    $price=$_GET['price'];
    $sql="DELETE FROM mycart WHERE id='$id'AND name='$name'";
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
        alert("Failed To Delete From Wishlist");
        window.location.href='mycart.php?id=<?php echo $id;?>';
    </script>
    <?php
    }
?>