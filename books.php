<?php include('partials-front/menu.php'); ?>
<?php
    $id=$_GET['id'];
    $category=$_GET['category_name'];
?>
<div class="container-fluid" style="margin-left:7%;">
    <h2 style="margin:auto !important;dispaly:block;padding-top:70px;font-family: 'Righteous', cursive;font-size:30px;margin-bottom:5%;"><?php echo $category; ?>.</h2>
    <br>    
    <div class="container-fluid">
            <?php
                $sql2="SELECT * FROM books WHERE category='$category'";
                $res2=mysqli_query($conn,$sql2);
                if($res2==True){
                    $count2=mysqli_num_rows($res2);
                    if($count2>0){
                        while($row2=mysqli_fetch_assoc($res2)){
                            $name=$row2['name'];
                            $author=$row2['author'];
                            $image=$row2['image'];
                            $price=$row2['price'];
                        ?>
                        <div class="catalog">
                            <img src="images/uploadedBooks/<?php echo $image; ?>" alt="<?php echo $name; ?>"></img>
                            <ul>
                                <li><h5><?php echo $name; ?></h5></li>
                                <li><section>By:<?php echo  $author; ?></section></li>
                                <li><p>&#8377;<?php echo $price; ?></p></li>
                                <li>
                                    <a href="<?php echo SITEURL; ?>order.php?id=<?php echo $id; ?>&name=<?php echo $name; ?>"><button type="submit" style="background-color:#10ac84;">Buy&nbsp;<i class='fas fa-shopping-bag' style='font-size:24px'></i></button></a>
                                    <a href="<?php echo SITEURL; ?>mycart.php?id=<?php echo $id; ?>&name=<?php echo $name; ?>"><button type="submit" style="background-color:#ff5252;">Wishlist&nbsp;&#9825;</button></a>
                                </li>
                            </ul>
                        </div><br>
                        <?php
                        }
                    }else{
                        ?>
                        <img src="images/uploadedBooks/default.png" alt="Nobooks" style="margin:auto;display:block;widht:300px;height:400px;"></img>
                    <?php
                    }
                }else{
                    ?>
                    <script>
                        alert("Failed to load the books!");
                        window.location.href='categories.php?id=<?php echo $id; ?>';
                    </script>
                    <?php
                }
            ?>
            </div>
</div>
<?php include('partials-front/footer.php'); ?>