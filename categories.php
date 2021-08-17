<?php include('partials-front/menu.php'); ?>
<?php 
    $id=$_GET['id'];
?>
<div class="container-fluid" style="margin-left:7%;">
    <h2 style="margin-left:27%;padding-top:70px;font-family: 'Righteous', cursive;font-size:30px;margin-bottom:5%;">Explore Our Wide Range Of Collections</h2>
        <?php
            $sql="SELECT * FROM category";
            $res=mysqli_query($conn,$sql);
            if($res==True){
                $count=mysqli_num_rows($res);
                if($count>0){
                    while($row=mysqli_fetch_assoc($res)){
                        $name=$row['name'];
                        $image=$row['image'];
                    ?>
                    <div id="images">
                        <a href="<?php echo SITEURL; ?>books.php?category_name=<?php echo $name; ?>">
                            <img class="effect" src="<?php echo SITEURL; ?>images/uploadedCategories/<?php echo $image; ?>" alt="<?php echo $name; ?>" >
                            <p id="imgcontent"><?php echo $name; ?></p>
                        </a>
                    </div>
                    <?php
                    }
                }
            }
        ?>
</div>
<?php include('partials-front/footer.php'); ?>
